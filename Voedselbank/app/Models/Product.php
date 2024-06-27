<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product'; // Correcte tabelnaam

    protected $fillable = [
        'naam', 'soort_allergie', 'barcode', 'houdbaarheid', 'omschrijving', 'status', 'categorie_id'
    ];
    

    protected $casts = [
        'houdbaarheid' => 'date', // Cast houdbaarheid naar datum
    ];

    public function leveranciers()
    {
        return $this->belongsToMany(Leverancier::class, 'productperleverancier', 'product_id', 'leverancier_id');
    }
}
