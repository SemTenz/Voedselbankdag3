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
            ['email' => 'manager@gmail.com'],
            [
                'name' => 'manager',
                'email' => 'manager@gmail.com',
                'password' => bcrypt('manager'),
                'usertype' => 'manager'
            ]
        );

        // Gebruiker 'magazijnmedewerker'
        User::firstOrCreate(
            ['email' => 'medewerker@gmail.com'],
            [
                'name' => 'medewerker',
                'email' => 'medewerker@gmail.com',
                'password' => bcrypt('medewerker'),
                'usertype' => 'medewerker'
            ]
        );

        // Gebruiker 'vrijwilliger'
        User::firstOrCreate(
            ['email' => 'vrijwilliger@gmail.com'],
            [
                'name' => 'vrijwilliger',
                'email' => 'vrijwilliger@gmail.com',
                'password' => bcrypt('vrijwilliger'),
                'usertype' => 'vrijwilliger'
            ]
        );

        // Gebruiker 'user'
        User::firstOrCreate(
            ['email' => 'klant@gmail.com'],
            [
                'name' => 'klant',
                'email' => 'klant@gmail.com',
                'password' => bcrypt('klant123'),
                'usertype' => 'klant'
            ]
        );
    }
}
