<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            ['Categorie_id' => 1, 'Naam' => 'Aardappel', 'soort_allergie' => NULL, 'Barcode' => '8719587321239', 'houdbaarheid' => '2024-07-12', 'Omschrijving' => 'Kruimige aardappel', 'Status' => 'op voorraad'],
            ['Categorie_id' => 1, 'Naam' => 'Aardappel', 'soort_allergie' => NULL, 'Barcode' => '8719587321239', 'houdbaarheid' => '2024-07-26', 'Omschrijving' => 'Kruimige aardappel', 'Status' => 'op voorraad'],
            ['Categorie_id' => 1, 'Naam' => 'Ui', 'soort_allergie' => NULL, 'Barcode' => '8719437321335', 'houdbaarheid' => '2024-09-02', 'Omschrijving' => 'Gele ui', 'Status' => 'niet op voorraad'],
            ['Categorie_id' => 1, 'Naam' => 'Appel', 'soort_allergie' => NULL, 'Barcode' => '8719486321332', 'houdbaarheid' => '2024-08-16', 'Omschrijving' => 'Granny Smith', 'Status' => 'niet leverbaar'],
            ['Categorie_id' => 1, 'Naam' => 'Appel', 'soort_allergie' => NULL, 'Barcode' => '8719486321332', 'houdbaarheid' => '2024-09-23', 'Omschrijving' => 'Granny Smith', 'Status' => 'niet leverbaar'],
            ['Categorie_id' => 1, 'Naam' => 'Banaan', 'soort_allergie' => 'Banaan', 'Barcode' => '8719484321336', 'houdbaarheid' => '2024-07-12', 'Omschrijving' => 'Biologische Banaan', 'Status' => 'over houdbaarheidsdatum'],
            ['Categorie_id' => 1, 'Naam' => 'Banaan', 'soort_allergie' => 'Banaan', 'Barcode' => '8719484321336', 'houdbaarheid' => '2024-07-19', 'Omschrijving' => 'Biologische Banaan', 'Status' => 'over houdbaarheidsdatum'],
            ['Categorie_id' => 2, 'Naam' => 'Kaas', 'soort_allergie' => 'Lactose', 'Barcode' => '8719487421338', 'houdbaarheid' => '2024-09-19', 'Omschrijving' => 'Jonge Kaas', 'Status' => 'op voorraad'],
            ['Categorie_id' => 2, 'Naam' => 'Rosbief', 'soort_allergie' => NULL, 'Barcode' => '8719487421331', 'houdbaarheid' => '2024-07-23', 'Omschrijving' => 'Rundvlees', 'Status' => 'op voorraad'],
            ['Categorie_id' => 3, 'Naam' => 'Melk', 'soort_allergie' => 'Lactose', 'Barcode' => '8719447321332', 'houdbaarheid' => '2024-07-23', 'Omschrijving' => 'Halfvolle melk', 'Status' => 'op voorraad'],
            ['Categorie_id' => 3, 'Naam' => 'Margarine', 'soort_allergie' => NULL, 'Barcode' => '8719486321336', 'houdbaarheid' => '2024-08-02', 'Omschrijving' => 'Plantaardige boter', 'Status' => 'op voorraad'],
            ['Categorie_id' => 3, 'Naam' => 'Ei', 'soort_allergie' => 'Eier', 'Barcode' => '8719487421334', 'houdbaarheid' => '2024-08-04', 'Omschrijving' => 'Scharrelei', 'Status' => 'op voorraad'],
            ['Categorie_id' => 4, 'Naam' => 'Brood', 'soort_allergie' => 'Gluten', 'Barcode' => '8719487721337', 'houdbaarheid' => '2024-07-07', 'Omschrijving' => 'Volkoren brood', 'Status' => 'op voorraad'],
            ['Categorie_id' => 4, 'Naam' => 'Gevulde Koek', 'soort_allergie' => 'Amandel', 'Barcode' => '8719483321333', 'houdbaarheid' => '2024-09-04', 'Omschrijving' => 'Banketbakkers kwaliteit', 'Status' => 'op voorraad'],
            ['Categorie_id' => 5, 'Naam' => 'Fristi', 'soort_allergie' => 'Lactose', 'Barcode' => '8719487121331', 'houdbaarheid' => '2024-10-28', 'Omschrijving' => 'Frisdrank', 'Status' => 'niet op voorraad'],
            ['Categorie_id' => 5, 'Naam' => 'Appelsap', 'soort_allergie' => NULL, 'Barcode' => '8719487521335', 'houdbaarheid' => '2024-10-19', 'Omschrijving' => '100% vruchtensap', 'Status' => 'op voorraad'],
            ['Categorie_id' => 5, 'Naam' => 'Koffie', 'soort_allergie' => 'Caffeïne', 'Barcode' => '8719487381338', 'houdbaarheid' => '2024-10-23', 'Omschrijving' => 'Arabica koffie', 'Status' => 'over houdbaarheidsdatum'],
            ['Categorie_id' => 5, 'Naam' => 'Thee', 'soort_allergie' => 'Theïne', 'Barcode' => '8719487329339', 'houdbaarheid' => '2024-09-02', 'Omschrijving' => 'Ceylon thee', 'Status' => 'op voorraad'],
            ['Categorie_id' => 6, 'Naam' => 'Pasta', 'soort_allergie' => 'Gluten', 'Barcode' => '8719487321334', 'houdbaarheid' => '2024-12-16', 'Omschrijving' => 'Macaroni', 'Status' => 'niet leverbaar'],
            ['Categorie_id' => 6, 'Naam' => 'Rijst', 'soort_allergie' => NULL, 'Barcode' => '8719487331332', 'houdbaarheid' => '2024-12-25', 'Omschrijving' => 'Basmati Rijst', 'Status' => 'op voorraad'],
            ['Categorie_id' => 6, 'Naam' => 'Knorr Nasi Mix', 'soort_allergie' => NULL, 'Barcode' => '871948735135', 'houdbaarheid' => '2024-12-13', 'Omschrijving' => 'Nasi kruiden', 'Status' => 'op voorraad'],
            ['Categorie_id' => 7, 'Naam' => 'Tomatensoep', 'soort_allergie' => NULL, 'Barcode' => '8719487371337', 'houdbaarheid' => '2024-12-23', 'Omschrijving' => 'Romige tomatensoep', 'Status' => 'op voorraad'],
            ['Categorie_id' => 7, 'Naam' => 'Tomatensaus', 'soort_allergie' => NULL, 'Barcode' => '8719487341334', 'houdbaarheid' => '2024-12-21', 'Omschrijving' => 'Pizza saus', 'Status' => 'niet op voorraad'],
            ['Categorie_id' => 7, 'Naam' => 'Peterselie', 'soort_allergie' => NULL, 'Barcode' => '8719487321636', 'houdbaarheid' => '2024-07-31', 'Omschrijving' => 'Verse kruidenpot', 'Status' => 'op voorraad'],
            ['Categorie_id' => 8, 'Naam' => 'Olie', 'soort_allergie' => NULL, 'Barcode' => '8719487327337', 'houdbaarheid' => '2024-12-27', 'Omschrijving' => 'Olijfolie', 'Status' => 'op voorraad'],
            ['Categorie_id' => 8, 'Naam' => 'Mars', 'soort_allergie' => NULL, 'Barcode' => '8719487324334', 'houdbaarheid' => '2024-12-11', 'Omschrijving' => 'Snoep', 'Status' => 'op voorraad'],
            ['Categorie_id' => 8, 'Naam' => 'Biscuit', 'soort_allergie' => NULL, 'Barcode' => '8719487311331', 'houdbaarheid' => '2024-08-07', 'Omschrijving' => 'San Francisco biscuit', 'Status' => 'op voorraad'],
            ['Categorie_id' => 8, 'Naam' => 'Paprika Chips', 'soort_allergie' => NULL, 'Barcode' => '87194873218398', 'houdbaarheid' => '2024-12-22', 'Omschrijving' => 'Ribbelchips paprika', 'Status' => 'op voorraad'],
            ['Categorie_id' => 8, 'Naam' => 'Chocolade reep', 'soort_allergie' => 'Cacoa', 'Barcode' => '8719487321533', 'houdbaarheid' => '2024-11-21', 'Omschrijving' => 'Tony Chocolonely', 'Status' => 'op voorraad'],
        ];

        DB::table('product')->insert($data);
    }
}
