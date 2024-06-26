<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoedselAllergie extends Model
{
    protected $table = 'voedsel_allergie'; // optioneel, afhankelijk van je tabelnaam

    public function personen()
    {
        return $this->hasMany(Persoon::class, 'allergie_id');
    }
}
