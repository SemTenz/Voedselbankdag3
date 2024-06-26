<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    protected $table = 'persoon'; // optioneel, afhankelijk van je tabelnaam

    public function gezin()
    {
        return $this->belongsTo(Gezin::class, 'gezin_id');
    }

    public function voedselAllergie()
    {
        return $this->belongsTo(VoedselAllergie::class, 'allergie_id');
    }
}
