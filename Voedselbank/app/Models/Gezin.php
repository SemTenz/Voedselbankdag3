<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gezin extends Model
{
    protected $table = 'gezin'; // optioneel, afhankelijk van je tabelnaam

    public function personen()
    {
        return $this->hasMany(Persoon::class, 'gezin_id');
    }
}
