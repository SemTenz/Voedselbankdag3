<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            [   
                
                'Straat' => 'Prinses Irenestraat',
                'Huisnummer' => '12',
                'Toevoeging' => 'A',
                'Postcode' => '5271TH',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'j.van.zevenhuizen@gmail.com',
                'Mobiel' => '+31 623456123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Straat' => 'Teststraat',
                'Huisnummer' => '456',
                'Toevoeging' => 'B',
                'Postcode' => '5678 CD',
                'Woonplaats' => 'Teststad',
                'Email' => 'a.bergkamp@hotmail.com',
                'Mobiel' => '+31 623456123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [   
                
                'Straat' => 'Prinses Irenestraat',
                'Huisnummer' => '12',
                'Toevoeging' => 'A',
                'Postcode' => '5271TH',
                'Woonplaats' => 'Maaskantje',
                'Email' => 's.van.de.heuvel@gmail.com',
                'Mobiel' => '+31 623456123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Straat' => 'Teststraat',
                'Huisnummer' => '456',
                'Toevoeging' => 'B',
                'Postcode' => '5678 CD',
                'Woonplaats' => 'Teststad',
                'Email' => 'e.scherder@gmail.com',
                'Mobiel' => '+31 623456123',
                'created_at' => now(),
                'updated_at' => now(),
            ], [   
                
                'Straat' => 'Prinses Irenestraat',
                'Huisnummer' => '12',
                'Toevoeging' => 'A',
                'Postcode' => '5271TH',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'f.de.jong@hotmail.com',
                'Mobiel' => '+31 623456123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Straat' => 'Teststraat',
                'Huisnummer' => '456',
                'Toevoeging' => 'B',
                'Postcode' => '5678 CD',
                'Woonplaats' => 'Teststad',
                'Email' => 'h.van.der.berg@gmail.com',
                'Mobiel' => '+31 623456123',
                'created_at' => now(),
                'updated_at' => now(),
            ], [   
                
                'Straat' => 'Prinses Irenestraat',
                'Huisnummer' => '12',
                'Toevoeging' => 'A',
                'Postcode' => '5271TH',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'r.ter.weijden@ah.nl',
                'Mobiel' => '+31 623456123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Straat' => 'Teststraat',
                'Huisnummer' => '456',
                'Toevoeging' => 'B',
                'Postcode' => '5678 CD',
                'Woonplaats' => 'Teststad',
                'Email' => 'I.pastoor@gmail.com',
                'Mobiel' => '+31 623456123',
                'created_at' => now(),
                'updated_at' => now(),
            ], [   
                
                'Straat' => 'Prinses Irenestraat',
                'Huisnummer' => '12',
                'Toevoeging' => 'A',
                'Postcode' => '5271TH',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'm.yazidi@gemeenteutrecht.nl',
                'Mobiel' => '0612345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Straat' => 'Teststraat',
                'Huisnummer' => '456',
                'Toevoeging' => 'B',
                'Postcode' => '5678 CD',
                'Woonplaats' => 'Teststad',
                'Email' => 'b.van.driel@gmail.com',
                'Mobiel' => '+31 623456123',
                'created_at' => now(),
                'updated_at' => now(),
            ], [   
                
                'Straat' => 'Prinses Irenestraat',
                'Huisnummer' => '12',
                'Toevoeging' => 'A',
                'Postcode' => '5271TH',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'j.pastorius@gmail.com',
                'Mobiel' => '0612345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Straat' => 'Teststraat',
                'Huisnummer' => '456',
                'Toevoeging' => 'B',
                'Postcode' => '5678 CD',
                'Woonplaats' => 'Teststad',
                'Email' => 's.dollaard@gmail.com',
                'Mobiel' => '+31 623456123',
                'created_at' => now(),
                'updated_at' => now(),
            ], [   
                
                'Straat' => 'Prinses Irenestraat',
                'Huisnummer' => '12',
                'Toevoeging' => 'A',
                'Postcode' => '5271TH',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'voorbeeld@email.com',
                'Mobiel' => '+31 623456123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Straat' => 'Teststraat',
                'Huisnummer' => '456',
                'Toevoeging' => 'B',
                'Postcode' => '5678 CD',
                'Woonplaats' => 'Teststad',
                'Email' => 'j.blokker@gemeentevught.nl',
                'Mobiel' => '+31 623456123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Voeg meer dummy gegevens toe zoals hierboven indien nodig
        ]);
    }
}
