<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gezin extends Model
{
    use HasFactory;

    protected $table = 'gezin';

    protected $fillable = [
        'Naam',
        'Straat',
        'Huisnummer',
        'Toevoeging',
        'Postcode',
        'Woonplaats',
        'IsActive'
    ];


    public function persoon()
    {
        return $this->hasMany(Persoon::class, 'GezinId');
    }


    public function contact()
    {
        return $this->belongsToMany('App\Models\Contact', 'ContactPerGezin', 'GezinId', 'ContactId');
    }
}
