<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GezinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('gezin')->insert([
            [
                'naam' => 'Familie Jansen',
                'code' => 'FJ001',
                'omschrijving' => 'Bijstandsgezin',
                'aantalvolwassenen' => 2,
                'aantalkinderen' => 2,
                'aantalbabys' => 0,
                'totaalaantalpersonen' => 4,
            ],
            [
                'naam' => 'Familie De Vries',
                'code' => 'FV001',
                'omschrijving' => 'Gezin met 1 volwassene en 3 kinderen',
                'aantalvolwassenen' => 1,
                'aantalkinderen' => 3,
                'aantalbabys' => 0,
                'totaalaantalpersonen' => 4,
            ],
        ]);
    }
}
