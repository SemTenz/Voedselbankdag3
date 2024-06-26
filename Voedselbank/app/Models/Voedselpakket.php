<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voedselpakket extends Model
{
    use HasFactory;

    // If your table name doesn't follow Laravel's naming convention, specify it
    protected $table = 'voedselpakketten';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        // Add your voedselpakket attributes here, for example:
        'name',
        'description',
        'quantity',
        // etc.
    ];

    // Define relationships, for example, if a voedselpakket belongs to a category
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}