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
            'houdbaarheid' => 'required|date',
        ]);

        $newHoudbaarheid = Carbon::parse($request->houdbaarheid);

        // Huidige houdbaarheidsdatum van het product
        $currentHoudbaarheid = Carbon::parse($product->houdbaarheid);

        // Controleer of de nieuwe houdbaarheidsdatum niet meer dan 7 dagen verschilt van de huidige
        if ($newHoudbaarheid->greaterThan($currentHoudbaarheid->addDays(7))) {
            return redirect()->back()->with('error', 'De houdbaarheidsdatum mag met maximaal 7 dagen worden verlengd.');
        }

        // Update de houdbaarheidsdatum van het product
        $product->houdbaarheid = $newHoudbaarheid;
        $product->save();

        return redirect()->back()->with('success', 'De houdbaarheidsdatum is gewijzigd.');
    }
}

?>
