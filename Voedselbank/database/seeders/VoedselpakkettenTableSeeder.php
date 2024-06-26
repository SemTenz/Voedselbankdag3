<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VoedselpakkettenTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('voedselpakketten')->insert([
            [
                'id'=> 1,
                'gezinid' => 1,
                'pakketnummer' => '1',
                'datumsamenstelling' => '2024-04-06',
                'datumuitgifte' => '2024-04-07',
                'status' => 'Uitgereikt',
            ],
            [
                'id'=> 2,
                'gezinid' => 1,
                'pakketnummer' => '2',
                'datumsamenstelling' => '2024-04-13',
                'datumuitgifte' => null,
                'status' => 'NietUitgereikt',
            ],
            [
                'id'=> 3,
                'gezinid' => 1,
                'pakketnummer' => '3',
                'datumsamenstelling' => '2024-04-20',
                'datumuitgifte' => null,
                'status' => 'NietMeerGegeven',
            ],
            [
                'id'=> 4,
                'gezinid' => 2,
                'pakketnummer' => '4',
                'datumsamenstelling' => '2024-04-06',
                'datumuitgifte' => '2024-04-07',
                'status' => 'Uitgereikt',
            ],
            [
                'id'=> 5,
                'gezinid' => 2,
                'pakketnummer' => '5',
                'datumsamenstelling' => '2024-04-13',
                'datumuitgifte' => '2024-04-14',
                'status' => 'Uitgereikt',
            ],
            [
                'id'=> 6,
                'gezinid' => 2,
                'pakketnummer' => '6',
                'datumsamenstelling' => '2024-04-20',
                'datumuitgifte' => null,
                'status' => 'NietUitgereikt',
            ],
        ]);
    }
}