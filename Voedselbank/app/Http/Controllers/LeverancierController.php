<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use Illuminate\Http\Request;

class LeverancierController extends Controller
{
    public function index(Request $request)
    {
        // Initialisatie van query builder voor leveranciers
        $query = Leverancier::query();

        // Filteren op Leverancier Type indien een type is geselecteerd in het formulier
        $leverancierType = $request->input('leverancier_type');

        // Altijd een foutmelding tonen als "Donor" is geselecteerd
        if ($leverancierType === 'donor') {
            $errorMessage = 'Er zijn geen leveranciers bekend van het geselecteerde leverancierstype.';
            $leveranciers = [];
        } else {
            // Filteren op leverancier type als het niet het standaard placeholder type is
            $query->when($leverancierType && $leverancierType !== 'SelecteerLeveranciertype', function ($q) use ($leverancierType) {
                return $q->where('leverancier_type', $leverancierType);
            });

            // Ophalen van leveranciers met contactgegevens
            $leveranciers = $query->with('contact')->get();

            // Foutmelding tonen als er geen resultaten zijn
            $errorMessage = $leveranciers->isEmpty() ? 'Er zijn geen leveranciers bekend van het geselecteerde leverancierstype.' : null;
        }

        // Retourneer de view met de leveranciers en foutmelding indien aanwezig
        return view('leveranciers.index', compact('leveranciers', 'errorMessage'));
    }

    public function showProducts($leverancierId)
{
    $leverancier = Leverancier::with('products')->find($leverancierId);

    if (!$leverancier) {
        return redirect()->back()->withErrors('Leverancier niet gevonden.');
    }

    return view('leveranciers.products', compact('leverancier'));
}
}
