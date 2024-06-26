<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::firstOrCreate(
            ['id' => 1, 'straat' => 'Prinses Irenestraat', 'Huisnummer' => 12, 'toevoeging' => 'A', 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'Email' => 'j.van.zevenhuizen@gmail.com', 'Mobiel' => '+31 623456123']
        );
        Contact::firstOrCreate(
            ['id' => 2, 'straat' => 'Gibraltarstraat', 'Huisnummer' => 234, 'toevoeging' => 'NULL', 'postcode' => '5271TJ', 'woonplaats' => 'Maaskantje', 'Email' => 'a.bergkamp@hotmail.com', 'Mobiel' => '+31 62345123']
        );
        Contact::firstOrCreate(
            ['id' => 3, 'straat' => 'Der Kinderenstraat', 'Huisnummer' => 456, 'toevoeging' => 'Bis', 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'Email' => 's.van.de.heuvel@gmail.com', 'Mobiel' => '+31 623456123']
        );
        Contact::firstOrCreate(
            ['id' => 4, 'straat' => 'Nachtegaalstraat', 'Huisnummer' => 233, 'toevoeging' => 'A', 'postcode' => '5271TJ', 'woonplaats' => 'Maaskantje', 'Email' => 'e.scherder@gmail.com', 'Mobiel' => '+31 623456123']
        );
        Contact::firstOrCreate(
            ['id' => 5, 'straat' => 'Bertram Russelstraat', 'Huisnummer' => 45, 'toevoeging' => 'NULL', 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'Email' => 'f.de.jong@hotmail.com', 'Mobiel' => '+31 623456123']
        );
        Contact::firstOrCreate(
            ['id' => 6, 'straat' => 'Leonardo Da VinciHof', 'Huisnummer' => 34, 'toevoeging' => 'NULL', 'postcode' => '5271ZE', 'woonplaats' => 'Maaskantje', 'Email' => 'h.van.der.berg@gmail.com', 'Mobiel' => '+31 623456123']
        );
        Contact::firstOrCreate(
            ['id' => 7, 'straat' => 'Siegfrien knutsenlaan', 'Huisnummer' => 234, 'toevoeging' => 'NULL', 'postcode' => '5271ZE', 'woonplaats' => 'Maaskantje', 'Email' => 'r.ter.weijden@ah.nl', 'Mobiel' => '+31 623456123']
        );
        Contact::firstOrCreate(
            ['id' => 8, 'straat' => 'Theo de Bokstraat', 'Huisnummer' => 256, 'toevoeging' => 'NULL', 'postcode' => '5271ZH', 'woonplaats' => 'Maaskantje', 'Email' => 'l.pastoor@gmail.com', 'Mobiel' => '+31 623456123']
        );
        Contact::firstOrCreate(
            ['id' => 9, 'straat' => 'Meester van Leerhof', 'Huisnummer' => 2, 'toevoeging' => 'A', 'postcode' => '5271Zh', 'woonplaats' => 'Maaskantje', 'Email' => 'm.yazidi@gemeenteutrecht.com', 'Mobiel' => '+31 623456123']
        );
        Contact::firstOrCreate(
            ['id' => 10, 'straat' => 'Van Wemelenplantsoen', 'Huisnummer' => 300, 'toevoeging' => 'NULL', 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'Email' => 'b.van.driel@gmail.com', 'Mobiel' => '+31 623456123']
        );
        Contact::firstOrCreate(
            ['id' => 11, 'straat' => 'Terlinghof', 'Huisnummer' => 20, 'toevoeging' => 'NULL', 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'Email' => 'j.pastorius@gmail.com', 'Mobiel' => '+31 623456356']
        );
        Contact::firstOrCreate(
            ['id' => 12, 'straat' => 'Veldhoen', 'Huisnummer' => 31, 'toevoeging' => 'NULL', 'postcode' => '5271ZE', 'woonplaats' => 'Maaskantje', 'Email' => 's.dollaard@gmail.com', 'Mobiel' => '+31 623452314']
        );
        Contact::firstOrCreate(
            ['id' => 13, 'straat' => 'ScheringaDreef', 'Huisnummer' => 37, 'toevoeging' => 'NULL', 'postcode' => '5271ZE', 'woonplaats' => 'vucht', 'Email' => 'j.blokker@gemeentevucht.com', 'Mobiel' => '+31 623452314']
        );
    }
}
