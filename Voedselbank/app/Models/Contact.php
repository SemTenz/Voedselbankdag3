<?php
// App\Models\Contact.php
// App\Models\Contact.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact'; // Juiste tabelnaam

    protected $fillable = [
        'Straat', 'Huisnummer', 'Toevoeging', 'Postcode', 'Woonplaats', 'Email', 'Mobiel'
    ];

    public function leveranciers()
    {
        return $this->belongsToMany(Leverancier::class, 'contactperleverancier', 'contact_id', 'leverancier_id');
    }
}

