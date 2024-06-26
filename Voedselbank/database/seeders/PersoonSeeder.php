<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persoon;

class PersoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Persoon::firstOrCreate(
            ['id' => 1, 'GezinId' => NULL, 'voornaam' => 'Hans', 'tussenvoegsel' => 'van', 'achternaam' => 'Leeuwen', 'geboortedatum' => '1958-02-12', 'typepersoon' => 'Manager', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 2, 'GezinId' => NULL, 'voornaam' => 'Jan', 'tussenvoegsel' => 'van der', 'achternaam' => 'Sluijs', 'geboortedatum' => '1993-04-30', 'typepersoon' => 'Medewerker', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 3, 'GezinId' => NULL, 'voornaam' => 'Herman', 'tussenvoegsel' => 'den', 'achternaam' => 'Duiker', 'geboortedatum' => '1989-08-30', 'typepersoon' => 'Vrijwilliger', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 4, 'GezinId' => '1', 'voornaam' => 'Johan', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '1990-05-20', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => 1]
        );
        Persoon::firstOrCreate(
            ['id' => 5, 'GezinId' => '1', 'voornaam' => 'Sarah', 'tussenvoegsel' => 'den', 'achternaam' => 'Dolder', 'geboortedatum' => '1985-03-23', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 6, 'GezinId' => '1', 'voornaam' => 'Theo', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '2015-03-08', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 7, 'GezinId' => '1', 'voornaam' => 'Theo', 'tussenvoegsel' => 'van ', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '2016-09-20', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 8, 'GezinId' => '2', 'voornaam' => 'arjan', 'tussenvoegsel' => 'NULL', 'achternaam' => 'Bergkamp', 'geboortedatum' => '1968-07-12', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => 1]
        );
        Persoon::firstOrCreate(
            ['id' => 9, 'GezinId' => '2', 'voornaam' => 'Janneke', 'tussenvoegsel' => 'NULL', 'achternaam' => 'Sanders', 'geboortedatum' => '1969-05-11', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 10, 'GezinId' => '2', 'voornaam' => 'Sharon', 'tussenvoegsel' => 'van', 'achternaam' => 'Bergkamp', 'geboortedatum' => '2009-02-02', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 11, 'GezinId' => '2', 'voornaam' => 'Stan', 'tussenvoegsel' => 'NULL', 'achternaam' => 'Bergkamp', 'geboortedatum' => '2022-02-05', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 12, 'GezinId' => '3', 'voornaam' => 'Mazin', 'tussenvoegsel' => 'van', 'achternaam' => 'Vliet', 'geboortedatum' => '1968-08-18', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 13, 'GezinId' => '3', 'voornaam' => 'Selma', 'tussenvoegsel' => 'van de', 'achternaam' => 'Heuvel', 'geboortedatum' => '1965-09-04', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => 1]
        );
        Persoon::firstOrCreate(
            ['id' => 14, 'GezinId' => '4', 'voornaam' => 'Eva', 'tussenvoegsel' => 'NULL', 'achternaam' => 'scherder', 'geboortedatum' => '2000-04-07', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => 1]
        );
        Persoon::firstOrCreate(
            ['id' => 15, 'GezinId' => '4', 'voornaam' => 'Felicia', 'tussenvoegsel' => 'NULL', 'achternaam' => 'scherder', 'geboortedatum' => '2021-11-29', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 16, 'GezinId' => '4', 'voornaam' => 'Devin', 'tussenvoegsel' => 'NULL', 'achternaam' => 'scherder', 'geboortedatum' => '2024-03-01', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 17, 'GezinId' => '5', 'voornaam' => 'Frieda', 'tussenvoegsel' => 'de', 'achternaam' => 'Jong', 'geboortedatum' => '1280-06-04', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => 1]
        );
        Persoon::firstOrCreate(
            ['id' => 18, 'GezinId' => '5', 'voornaam' => 'Simeon', 'tussenvoegsel' => 'de', 'achternaam' => 'Jong', 'geboortedatum' => '2018-05-23', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => null]
        );
        Persoon::firstOrCreate(
            ['id' => 19, 'GezinId' => '6', 'voornaam' => 'Hanna', 'tussenvoegsel' => 'van der', 'achternaam' => 'Berg', 'geboortedatum' => '1999-09-09', 'typepersoon' => 'Klant', 'Isvertegenwoordiger' => 1]
        );
    }
}
