<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        $data = [
            [
                'categorie_id' => 1,
                'naam' => 'Appels',
                'soort_allergie' => null,
                'barcode' => '1234567890123',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Verse appels van het seizoen.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 2,
                'naam' => 'Melk',
                'soort_allergie' => 'Lactose',
                'barcode' => '2345678901234',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Halfvolle melk, vers van de boerderij.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 3,
                'naam' => 'Kipfilet',
                'soort_allergie' => null,
                'barcode' => '3456789012345',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Malse kipfilet, ideaal voor een gezonde maaltijd.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 4,
                'naam' => 'Tomaten',
                'soort_allergie' => null,
                'barcode' => '4567890123456',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Rijpe tomaten, perfect voor salades en sauzen.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 5,
                'naam' => 'Bruin brood',
                'soort_allergie' => null,
                'barcode' => '5678901234567',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Vers gebakken bruin brood van de bakker.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 6,
                'naam' => 'Appelsap',
                'soort_allergie' => null,
                'barcode' => '6789012345678',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => '100% puur appelsap zonder toegevoegde suikers.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 7,
                'naam' => 'Aardbeien',
                'soort_allergie' => null,
                'barcode' => '7890123456789',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Verse Hollandse aardbeien, zoet en sappig.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 8,
                'naam' => 'Chocoladereep',
                'soort_allergie' => 'Cocoa',
                'barcode' => '8901234567890',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Pure chocoladereep met minstens 70% cacao.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 1,
                'naam' => 'Komkommers',
                'soort_allergie' => null,
                'barcode' => '9012345678901',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Knapperige komkommers, heerlijk in salades.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 2,
                'naam' => 'Yoghurt',
                'soort_allergie' => 'Lactose',
                'barcode' => '0123456789012',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Verse volle yoghurt van biologische melk.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 3,
                'naam' => 'Zalmfilet',
                'soort_allergie' => null,
                'barcode' => '1234567890123',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Verse zalmfilet, perfect voor op de barbecue.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 4,
                'naam' => 'Aardappelen',
                'soort_allergie' => null,
                'barcode' => '2345678901234',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Verse Hollandse aardappelen, geschikt voor elke maaltijd.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 5,
                'naam' => 'Wit brood',
                'soort_allergie' => null,
                'barcode' => '3456789012345',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Vers gebakken wit brood, lekker knapperig van buiten en zacht van binnen.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 6,
                'naam' => 'Sinaasappelsap',
                'soort_allergie' => null,
                'barcode' => '4567890123456',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Vers geperst sinaasappelsap, rijk aan vitamine C.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 7,
                'naam' => 'Peren',
                'soort_allergie' => null,
                'barcode' => '5678901234567',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Sappige peren, ideaal als gezond tussendoortje.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 8,
                'naam' => 'Witte chocolade',
                'soort_allergie' => 'Cocoa',
                'barcode' => '6789012345678',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Romige witte chocolade, perfect voor de zoetekauw.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 1,
                'naam' => 'Paprika',
                'soort_allergie' => null,
                'barcode' => '7890123456789',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Verse paprika, perfect voor roerbakgerechten of als snack.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 2,
                'naam' => 'Rundergehakt',
                'soort_allergie' => null,
                'barcode' => '8901234567890',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Mager rundergehakt, ideaal voor het bereiden van gehaktballen of spaghetti bolognese.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 3,
                'naam' => 'Kaas',
                'soort_allergie' => 'Lactose',
                'barcode' => '9012345678901',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Belegen kaas van Nederlandse bodem, heerlijk bij de borrel of op brood.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 4,
                'naam' => 'Mandarijnen',
                'soort_allergie' => null,
                'barcode' => '0123456789012',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Zongerijpte mandarijnen, fris en zoet van smaak.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 5,
                'naam' => 'Ham',
                'soort_allergie' => null,
                'barcode' => '1234567890123',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Verse achterham, perfect voor op brood of door de pasta.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 6,
                'naam' => 'Wortelen',
                'soort_allergie' => null,
                'barcode' => '2345678901234',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Verse wortelen, lekker knapperig en gezond als tussendoortje of in gerechten.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 7,
                'naam' => 'Tonijn',
                'soort_allergie' => null,
                'barcode' => '3456789012345',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Verse tonijnfilet, ideaal voor sushi, salades of als hoofdgerecht.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 8,
                'naam' => 'Boter',
                'soort_allergie' => 'Lactose',
                'barcode' => '4567890123456',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Verse roomboter, heerlijk smeerbaar op brood of om mee te bakken.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 9,
                'naam' => 'Pasta',
                'soort_allergie' => null,
                'barcode' => '5678901234567',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Verse pasta, ideaal voor snelle en smakelijke gerechten.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categorie_id' => 10,
                'naam' => 'Bananen',
                'soort_allergie' => null,
                'barcode' => '6789012345678',
                'houdbaarheid' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'omschrijving' => 'Rijpe bananen, perfect voor smoothies, desserts of gewoon als gezonde snack.',
                'status' => 'op voorraad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('product')->insert($data);
    }
}
