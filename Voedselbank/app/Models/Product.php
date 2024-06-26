<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'naam', 'houdbaarheidsdatum', 'leverancier_id'
    ];

    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class);
    }
}
