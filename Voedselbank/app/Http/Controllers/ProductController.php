<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function edit(Product $product)
    {
        return view('producten.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'houdbaarheid' => 'required|date',
        ]);

        $newHoudbaarheid = Carbon::parse($request->houdbaarheid);
        $currentDate = Carbon::now();

        if ($newHoudbaarheid->gt($currentDate->addDays(7))) {
            return redirect()->back()->with('error', 'De houdbaarheidsdatum is niet gewijzigd. De houdbaarheidsdatum mag met maximaal 7 dagen worden verlengd');
        }

    }
}
