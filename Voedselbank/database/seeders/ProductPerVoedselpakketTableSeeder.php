<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductPerVoedselpakketTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('productpervoedselpakket')->insert([
            [
                'id' => 1,
                'voedselpakketid' => 1, 
                'productid' => 7, 
                'aantalproducteenheden' => '1',
            ],
            [
                'id' => 2,
                'voedselpakketid' => 1, 
                'productid' => 8, 
                'aantalproducteenheden' => '2',
            ],
            [
                'id' => 3,
                'voedselpakketid' => 1, 
                'productid' => 9, 
                'aantalproducteenheden' => '1',
            ],
            [
                'id' => 4,
                'voedselpakketid' => 2, 
                'productid' => 12, 
                'aantalproducteenheden' => '1',
            ],
            [
                'id' => 5,
                'voedselpakketid' => 2, 
                'productid' => 13, 
                'aantalproducteenheden' => '2',
            ],
            [
                'id' => 6,
                'voedselpakketid' => 2, 
                'productid' => 14, 
                'aantalproducteenheden' => '1',
            ],
            [
                'id' => 7,
                'voedselpakketid' => 3, 
                'productid' => 3, 
                'aantalproducteenheden' => '1',
            ],
            [
                'id' => 8,
                'voedselpakketid' => 3, 
                'productid' => 4, 
                'aantalproducteenheden' => '1',
            ],
            [
                'id' => 9,
                'voedselpakketid' => 4, 
                'productid' => 20, 
                'aantalproducteenheden' => '1',
            ],
            [
                'id' => 10,
                'voedselpakketid' => 4, 
                'productid' => 19, 
                'aantalproducteenheden' => '1',
            ],
            [
                'id' => 11,
                'voedselpakketid' => 4, 
                'productid' => 21, 
                'aantalproducteenheden' => '1',
            ],
            [
                'id' => 12,
                'voedselpakketid' => 5, 
                'productid' => 24, 
                'aantalproducteenheden' => '1',
            ],
            [
                'id' => 13,
                'voedselpakketid' => 5, 
                'productid' => 25, 
                'aantalproducteenheden' => '1',
            ],
            [
                'id' => 14,
                'voedselpakketid' => 5, 
                'productid' => 26, 
                'aantalproducteenheden' => '1',
            ],
            [
                'id' => 15,
                'voedselpakketid' => 6, 
                'productid' => 26, 
                'aantalproducteenheden' => '1',
            ],
        ]);
    }
}