<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('persoon')->insert([
            [
                'gezin_id' => 1,
                'voornaam' => 'Jan',
                'tussenvoegsel' => null,
                'achternaam' => 'Jansen',
                'geboortedatum' => '1980-01-01',
                'usertype' => 'user',
                'isvertegenwoordiger' => 'Ja',
            ],
            [
                'gezin_id' => 1,
                'voornaam' => 'Piet',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Jansen',
                'geboortedatum' => '2010-05-15',
                'usertype' => 'user',
                'isvertegenwoordiger' => 'Nee',
            ],
            [
                'gezin_id' => 2,
                'voornaam' => 'Marie',
                'tussenvoegsel' => 'de',
                'achternaam' => 'Vries',
                'geboortedatum' => '1985-03-20',
                'usertype' => 'user',
                'isvertegenwoordiger' => 'Nee',
            ],
            [
                'gezin_id' => 2,
                'voornaam' => 'Anna',
                'tussenvoegsel' => null,
                'achternaam' => 'Vries',
                'geboortedatum' => '2012-07-10',
                'usertype' => 'user',
                'isvertegenwoordiger' => 'Nee',
            ],
        ]);
    }
}
