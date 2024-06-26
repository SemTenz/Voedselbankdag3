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
                'naam' => 'ZevenhuizenGezin',
                'code' => 'G0001',
                'omschrijving' => 'Bijstandsgezin',
                'aantalvolwassenen' => 2,
                'aantalkinderen' => 2,
                'aantalbabys' => 0,
                'totaalaantalpersonen' => 4,
            ],
            [
                'naam' => 'BergkampGezin',
                'code' => 'G0002',
                'omschrijving' => 'Bijstandsgezin',
                'aantalvolwassenen' => 2,
                'aantalkinderen' => 1,
                'aantalbabys' => 1,
                'totaalaantalpersonen' => 4,
            ],
            [
                'naam' => 'HeuvelGezin',
                'code' => 'G0003',
                'omschrijving' => 'Bijstandsgezin',
                'aantalvolwassenen' => 2,
                'aantalkinderen' => 0,
                'aantalbabys' => 0,
                'totaalaantalpersonen' => 2,
            ],
            [
                'naam' => 'ScherderGezin',
                'code' => 'G0004',
                'omschrijving' => 'Bijstandsgezin',
                'aantalvolwassenen' => 1,
                'aantalkinderen' => 0,
                'aantalbabys' => 2,
                'totaalaantalpersonen' => 3,
            ],
            [
                'naam' => 'HeuvelGezin',
                'code' => 'G0005',
                'omschrijving' => 'Bijstandsgezin',
                'aantalvolwassenen' => 1,
                'aantalkinderen' => 1,
                'aantalbabys' => 0,
                'totaalaantalpersonen' => 2,
            ],
            [
                'naam' => 'HeuvelGezin',
                'code' => 'G0006',
                'omschrijving' => 'AlleenGaande',
                'aantalvolwassenen' => 1,
                'aantalkinderen' => 0,
                'aantalbabys' => 0,
                'totaalaantalpersonen' => 1,
            ],
        ]);
    }
}
