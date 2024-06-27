<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('producten.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'houdbaarheid' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    $today = Carbon::today();
                    $selectedDate = Carbon::parse($value);
    
                    // Controleer of de gekozen datum vandaag of in de toekomst ligt
                    if ($selectedDate->lessThanOrEqualTo($today)) {
                        $fail('De houdbaarheidsdatum moet een datum in de toekomst zijn.');
                    }
                },
            ],
        ]);
    
        $newHoudbaarheid = Carbon::parse($request->houdbaarheid);
        $currentHoudbaarheid = Carbon::parse($product->houdbaarheid);
    
        // Controleer eerst of de nieuwe houdbaarheidsdatum gelijk is aan de huidige
        if ($newHoudbaarheid->equalTo($currentHoudbaarheid)) {
            return redirect()->back()->withErrors(['nietverlengd' => 'De houdbaarheidsdatum is niet gewijzigd']);
        }
    
        // Maak een kopie van $currentHoudbaarheid en voeg 7 dagen toe voor de vergelijking
        $modifiedHoudbaarheid = (clone $currentHoudbaarheid)->addDays(7);
    
        // Controleer dan of de nieuwe houdbaarheidsdatum niet meer dan 7 dagen verschilt van de huidige
        if ($newHoudbaarheid->greaterThan($modifiedHoudbaarheid)) {
            return redirect()->back()->withErrors(['houdbaarheid' => 'De houdbaarheidsdatum mag met maximaal 7 dagen worden verlengd']);
        }
    
        // Update de houdbaarheidsdatum van het product
        $product->houdbaarheid = $newHoudbaarheid;
        $product->save();
    
        // Als de houdbaarheidsdatum is gewijzigd, geef een succesmelding door naar de view
        return redirect()->back()->with('success', 'De houdbaarheidsdatum is gewijzigd.');
    }
}    
