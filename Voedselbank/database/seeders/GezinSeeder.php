<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gezin;

class GezinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gezin::firstOrCreate(
            ['id' => 1, 'naam' => 'ZevenhuizenGezin', 'code' => 'G0001', 'Omschrijving' => 'Bijstandsgezin', 'AantalVolwassenen' => 2, 'AantalKinderen' => 2, 'AantalBabys' => 0, 'TotaalAantalPersonen' => '4']
        );
        Gezin::firstOrCreate(
            ['id' => 2, 'naam' => 'BergkampGezin', 'code' => 'G0002', 'Omschrijving' => 'Bijstandsgezin', 'AantalVolwassenen' => 2, 'AantalKinderen' => 1, 'AantalBabys' => 1, 'TotaalAantalPersonen' => '4']
        );
        Gezin::firstOrCreate(
            ['id' => 3, 'naam' => 'HeuvelGezin', 'code' => 'G0003', 'Omschrijving' => 'Bijstandsgezin', 'AantalVolwassenen' => 2, 'AantalKinderen' => 0, 'AantalBabys' => 0, 'TotaalAantalPersonen' => '2']
        );
        Gezin::firstOrCreate(
            ['id' => 4, 'naam' => 'ScherderGezin', 'code' => 'G0004', 'Omschrijving' => 'Bijstandsgezin', 'AantalVolwassenen' => 2, 'AantalKinderen' => 0, 'AantalBabys' => 0, 'TotaalAantalPersonen' => '3']
        );
        Gezin::firstOrCreate(
            ['id' => 5, 'naam' => 'DeJongGezing', 'code' => 'G0005', 'Omschrijving' => 'Bijstandsgezin', 'AantalVolwassenen' => 1, 'AantalKinderen' => 1, 'AantalBabys' => 0, 'TotaalAantalPersonen' => '2']
        );
        Gezin::firstOrCreate(
            ['id' => 6, 'naam' => 'VanderBergGezin', 'code' => 'G0006', 'Omschrijving' => 'AlleenGaande', 'AantalVolwassenen' => 1, 'AantalKinderen' => 0, 'AantalBabys' => 0, 'TotaalAantalPersonen' => '1']
        );
    }
}
