<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Gebruiker 'directie'
        User::firstOrCreate(
            ['email' => 'hans@maaskantje.nl'],
            [
                'name' => 'Hans van Leeuwen',
                'email' => 'hans@maaskantje.nl',
                'password' => bcrypt('manager'),
                'usertype' => 'manager'
            ]
        );

        // Gebruiker 'magazijnmedewerker'
        User::firstOrCreate(
            ['email' => 'jan@maaskantje.nl'],
            [
                'name' => 'Jan van der Sluijs',
                'email' => 'jan@maaskantje.nl',
                'password' => bcrypt('medewerker'),
                'usertype' => 'medewerker'
            ]
        );

        // Gebruiker 'vrijwilliger'
        User::firstOrCreate(
            ['email' => 'herman@maaskantje.nl'],
            [
                'name' => 'Herman den Duker',
                'email' => 'herman@maaskantje.nl',
                'password' => bcrypt('vrijwilliger'),
                'usertype' => 'vrijwilliger'
            ]
        );

        // Gebruiker 'user'
        User::firstOrCreate(
            ['email' => 'user@gmail.com'],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user123'),
                'usertype' => 'user'
            ]
        );
    }
}
