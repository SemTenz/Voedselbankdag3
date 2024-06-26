<?php

namespace Database\Seeders;

use App\Models\persoon;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,

            GezinSeeder::class,
            ContactSeeder::class,
            ContactPergezinSeeder::class,


            PersoonSeeder::class,
        ]);
    }
}
