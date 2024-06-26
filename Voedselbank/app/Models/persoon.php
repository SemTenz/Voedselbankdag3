<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persoon extends Model
{
    use HasFactory;

    protected $table = 'persoon';

    protected $fillable = [
        'Voornaam',
        'Tussenvoegsel',
        'Achternaam',
        'Geboortedatum',
        'IsActive'
    ];
}
