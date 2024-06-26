<?php
// database/seeders/ContactPerLeverancierSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Leverancier;
use App\Models\Contact;

class ContactPerLeverancierSeeder extends Seeder
{
    public function run()
    {
        // Voorbeeld van gegevens toevoegen aan leveranciers

        // Leverancier 1 - 4 met contactgegevens ID 7 - 10
        $leverancier1 = Leverancier::find(1);
        $leverancier1->contact()->attach(Contact::find(7));

        $leverancier2 = Leverancier::find(2);
        $leverancier2->contact()->attach(Contact::find(8));

        $leverancier3 = Leverancier::find(3);
        $leverancier3->contact()->attach(Contact::find(9));

        $leverancier4 = Leverancier::find(4);
        $leverancier4->contact()->attach(Contact::find(10));

        // Leverancier 5 zonder contactgegevens
        $leverancier5 = Leverancier::find(5);
        $leverancier5->contact()->attach(Contact::find(1));

        // Leverancier 6 - 8 met contactgegevens ID 11 - 13
        $leverancier6 = Leverancier::find(6);
        $leverancier6->contact()->attach(Contact::find(11));

        $leverancier7 = Leverancier::find(7);
        $leverancier7->contact()->attach(Contact::find(12));

        $leverancier8 = Leverancier::find(8);
        $leverancier8->contact()->attach(Contact::find(13));
    }
}

