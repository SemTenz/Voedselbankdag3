<?php

namespace Database\Seeders;

use App\Models\contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactPerGezin;



class ContactPerGezinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactPerGezin::firstOrCreate(
            ['id' => 1, 'GezinId' => 1, 'ContactId' => 1]
        );
        ContactPerGezin::firstOrCreate(
            ['id' => 2, 'GezinId' => 2, 'ContactId' => 2]
        );
        ContactPerGezin::firstOrCreate(
            ['id' => 3, 'GezinId' => 3, 'ContactId' => 3]
        );
        ContactPerGezin::firstOrCreate(
            ['id' => 4, 'GezinId' => 4, 'ContactId' => 4]
        );

        ContactPerGezin::firstOrCreate(
            ['id' => 5, 'GezinId' => 5, 'ContactId' => 5]
        );

        ContactPerGezin::firstOrCreate(
            ['id' => 6, 'GezinId' => 6, 'ContactId' => 6]
        );
    }
}
