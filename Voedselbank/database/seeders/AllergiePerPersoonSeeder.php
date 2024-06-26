<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergiePerPersoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $koppelingen = [
            [
                'persoonid' => 1,
                'allergieid' => 1,
            ],
            [
                'persoonid' => 4,
                'allergieid' => 1,
            ],
            [
                'persoonid' => 5,
                'allergieid' => 2,
            ],
            [
                'persoonid' => 6,
                'allergieid' => 3,
            ],
            [
                'persoonid' => 7,
                'allergieid' => 4,
            ],
            [
                'persoonid' => 8,
                'allergieid' => 3,
            ],
            [
                'persoonid' => 9,
                'allergieid' => 2,
            ],
            [
                'persoonid' => 10,
                'allergieid' => 5,
            ],
            [
                'persoonid' => 12,
                'allergieid' => 2,
            ],
            [
                'persoonid' => 13,
                'allergieid' => 4,
            ],
            [
                'persoonid' => 14,
                'allergieid' => 1,
            ],
            [
                'persoonid' => 15,
                'allergieid' => 3,
            ],
            [
                'persoonid' => 16,
                'allergieid' => 5,
            ],
            [
                'persoonid' => 17,
                'allergieid' => 1,
            ],
            [
                'persoonid' => 17,
                'allergieid' => 2,
            ],
            [
                'persoonid' => 18,
                'allergieid' => 4,
            ],
            [
                'persoonid' => 19,
                'allergieid' => 4,
            ],
        ];


        // Loop through the array and insert each record
        foreach ($koppelingen as $koppeling) {
            DB::table('allergieperpersoon')->insert($koppeling);
        }

        $this->command->info('AllergiePerPersoonSeeder uitgevoerd.');
    }
}
