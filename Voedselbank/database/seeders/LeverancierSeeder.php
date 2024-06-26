<?php

namespace Database\Seeders;

use App\Models\Leverancier;
use Illuminate\Database\Seeder;

class LeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Voorbeeld gegevens voor leveranciers
        $leveranciers = [
            [
                'naam' => 'Albert Heijn',
                'contactpersoon' => 'Ruud ter Weijden',
                'leverancier_nummer' => 'L0001',
                'leverancier_type' => 'Bedrijf',
            ],
            [
                'naam' => 'Albertus Kerk',
                'contactpersoon' => 'Leo Pastoor',
                'leverancier_nummer' => 'L0002',
                'leverancier_type' => 'Instelling',
            ],
            [
                'naam' => 'Gemeente Utrecht',
                'contactpersoon' => 'Mohammed Yazidi',
                'leverancier_nummer' => 'L0003',
                'leverancier_type' => 'Overheid',
            ],
            [
                'naam' => 'Boerderij Meerhoven',
                'contactpersoon' => 'Bertus van Driel',
                'leverancier_nummer' => 'L0004',
                'leverancier_type' => 'Particulier',
            ],
            [
                'naam' => 'Jan van der Heijden',
                'contactpersoon' => 'Jan van der Heijden',
                'leverancier_nummer' => 'L0005',
                'leverancier_type' => 'Donor',
            ],
            [
                'naam' => 'Vomar',
                'contactpersoon' => 'Jan Pastorius',
                'leverancier_nummer' => 'L0006',
                'leverancier_type' => 'Bedrijf',
            ],
            [
                'naam' => 'Deka Markt',
                'contactpersoon' => 'Sil den Dollaard',
                'leverancier_nummer' => 'L0007',
                'leverancier_type' => 'Bedrijf',
            ], [
                'naam' => 'Gemeente Vught',
                'contactpersoon' => 'Jan Blokker',
                'leverancier_nummer' => 'L0008',
                'leverancier_type' => 'Overheid',
            ],
            // Voeg hier meer voorbeeldgegevens toe als nodig
        ];

        // Insert data in the database
        foreach ($leveranciers as $leverancierData) {
            Leverancier::create($leverancierData);
        }
    }
}
