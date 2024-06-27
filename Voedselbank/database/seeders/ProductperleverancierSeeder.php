<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductPerLeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'leverancier_id' => 1,
                'product_id' => 1,
                'datum_aangeleverd' => '2024-06-11',
                'datum_eerstvolgende_levering' => '2024-07-26',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 2,
                'product_id' => 2,
                'datum_aangeleverd' => '2024-06-06',
                'datum_eerstvolgende_levering' => '2024-07-21',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 3,
                'product_id' => 3,
                'datum_aangeleverd' => '2024-06-01',
                'datum_eerstvolgende_levering' => '2024-07-16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 4,
                'product_id' => 4,
                'datum_aangeleverd' => '2024-05-27',
                'datum_eerstvolgende_levering' => '2024-07-11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 1,
                'product_id' => 5,
                'datum_aangeleverd' => '2024-06-16',
                'datum_eerstvolgende_levering' => '2024-07-31',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 2,
                'product_id' => 6,
                'datum_aangeleverd' => '2024-06-14',
                'datum_eerstvolgende_levering' => '2024-07-28',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 5,
                'product_id' => 7,
                'datum_aangeleverd' => '2024-06-08',
                'datum_eerstvolgende_levering' => '2024-07-24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 6,
                'product_id' => 8,
                'datum_aangeleverd' => '2024-06-04',
                'datum_eerstvolgende_levering' => '2024-07-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 8,
                'product_id' => 9,
                'datum_aangeleverd' => '2024-05-30',
                'datum_eerstvolgende_levering' => '2024-07-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 7,
                'product_id' => 10,
                'datum_aangeleverd' => '2024-06-13',
                'datum_eerstvolgende_levering' => '2024-07-27',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 3,
                'product_id' => 11,
                'datum_aangeleverd' => '2024-06-09',
                'datum_eerstvolgende_levering' => '2024-07-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 8,
                'product_id' => 12,
                'datum_aangeleverd' => '2024-06-05',
                'datum_eerstvolgende_levering' => '2024-07-19',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 7,
                'product_id' => 13,
                'datum_aangeleverd' => '2024-06-10',
                'datum_eerstvolgende_levering' => '2024-07-24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 5,
                'product_id' => 14,
                'datum_aangeleverd' => '2024-06-02',
                'datum_eerstvolgende_levering' => '2024-07-16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 8,
                'product_id' => 15,
                'datum_aangeleverd' => '2024-05-29',
                'datum_eerstvolgende_levering' => '2024-07-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 5,
                'product_id' => 16,
                'datum_aangeleverd' => '2024-06-12',
                'datum_eerstvolgende_levering' => '2024-07-26',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 7,
                'product_id' => 17,
                'datum_aangeleverd' => '2024-06-07',
                'datum_eerstvolgende_levering' => '2024-07-21',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 2,
                'product_id' => 18,
                'datum_aangeleverd' => '2024-06-03',
                'datum_eerstvolgende_levering' => '2024-07-17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 7,
                'product_id' => 19,
                'datum_aangeleverd' => '2024-05-31',
                'datum_eerstvolgende_levering' => '2024-07-14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 4,
                'product_id' => 20,
                'datum_aangeleverd' => '2024-05-28',
                'datum_eerstvolgende_levering' => '2024-07-11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 6,
                'product_id' => 21,
                'datum_aangeleverd' => '2024-06-15',
                'datum_eerstvolgende_levering' => '2024-07-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 2,
                'product_id' => 22,
                'datum_aangeleverd' => '2024-06-17',
                'datum_eerstvolgende_levering' => '2024-08-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 3,
                'product_id' => 23,
                'datum_aangeleverd' => '2024-06-18',
                'datum_eerstvolgende_levering' => '2024-08-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 4,
                'product_id' => 24,
                'datum_aangeleverd' => '2024-06-19',
                'datum_eerstvolgende_levering' => '2024-08-03',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 1,
                'product_id' => 25,
                'datum_aangeleverd' => '2024-06-20',
                'datum_eerstvolgende_levering' => '2024-08-04',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'leverancier_id' => 2,
                'product_id' => 26,
                'datum_aangeleverd' => '2024-06-21',
                'datum_eerstvolgende_levering' => '2024-08-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Gegevens invoegen in de tabel
        DB::table('productperleverancier')->insert($data);
    }
}
