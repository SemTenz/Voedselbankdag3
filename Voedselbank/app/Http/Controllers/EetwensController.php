<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eetwens;

class EetwensController extends Controller
{
    public function search(Request $request)
    {
        $eetwens = $request->input('eetwens');
        $sort_by = $request->input('sort_by', 'default_column'); // Default sorting column
        $sort_order = $request->input('sort_order', 'asc'); // Default sorting order

        $data = Eetwens::filterByEetwens($eetwens)
                ->orderBy($sort_by, $sort_order)
                ->paginate(10); // Example pagination

        // Assuming "eetwensen" options are static or retrieved elsewhere
        return view('index', ['data' => $data, 'eetwensen' => $this->getEetwensenOptions()]);
    }

    protected function getEetwensenOptions()
    {
        // This method should retrieve or define your "eetwens" options
        return ['Vegetarian', 'Vegan', 'Gluten-Free']; // Example options
    }

}