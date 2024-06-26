<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EetwensPerGezinTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('eetwenspergezin')->insert([
            [
                'id' => 1, 
                'gezinid' => 1,
                'eetwensid' => 2,
            ],
            [
                'id' => 2, 
                'gezinid' => 2,
                'eetwensid' => 4,
            ],
            [
                'id' => 3, 
                'gezinid' => 3,
                'eetwensid' => 4,
            ],
            [
                'id' => 4, 
                'gezinid' => 4,
                'eetwensid' => 3,
            ],
            [
                'id' => 5, 
                'gezinid' => 5,
                'eetwensid' => 2,
            ],
        ]);
    }
}