<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EetwensenTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('eetwensen')->insert([
            [
                'id' => 1,
                'naam' => 'GeenVarken',
                'omschrijving' => 'Geen varkensvlees',
            ],
            [
                'id' => 2,
                'naam' => 'Veganistisch',
                'omschrijving' => 'Geen zuivelproducten en vlees',
            ],
            [
                'id' => 3,
                'naam' => 'Vegetarisch',
                'omschrijving' => 'Geen vlees',
            ],
            [
                'id' => 4,
                'naam' => 'Omnivoor',
                'omschrijving' => 'Geen beperkingen',
            ],
        ]);
    }
}