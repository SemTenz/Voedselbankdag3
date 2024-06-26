<?php

namespace Database\Seeders;

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
            EetwensenTableSeeder::class,
            GezinnenTableSeeder::class,
            EetwensPerGezinTableSeeder::class,
            VoedselpakkettenTableSeeder::class,
            ProductPerVoedselpakketTableSeeder::class,
            PersonenTableSeeder::class,
        ]);
    }
}