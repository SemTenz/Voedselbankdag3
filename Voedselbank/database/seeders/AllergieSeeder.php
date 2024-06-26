<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allergieën = [
            ['naam' => 'Gluten', 'omschrijving' => 'Allergie voor gluten', 'anafylactischrisico' => 'zeerlaag'],
            ['naam' => 'Pinda\'s', 'omschrijving' => 'Allergie voor pinda\'s', 'anafylactischrisico' => 'hoog'],
            ['naam' => 'Schaaldieren', 'omschrijving' => 'Allergie voor schaaldieren', 'anafylactischrisico' => 'redelijkhoog'],
            ['naam' => 'Hazelnoten', 'omschrijving' => 'Allergie voor hazelnoten', 'anafylactischrisico' => 'laag'],
            ['naam' => 'Lactose', 'omschrijving' => 'Allergie voor lactose', 'anafylactischrisico' => 'zeerlaag'],
            ['naam' => 'Soja', 'omschrijving' => 'Allergie voor soja', 'anafylactischrisico' => 'zeerlaag'],
        ];

        DB::table('allergie')->insert($allergieën);
    }
}
