<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoedselAllergie extends Model
{
    protected $table = 'allergie'; // Controleer of dit overeenkomt met je daadwerkelijke tabelnaam

    // Definieer relaties indien nodig
    public function personen()
    {
        return $this->hasMany(Persoon::class, 'allergie_id');
    }
}
