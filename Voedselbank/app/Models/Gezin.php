<?php

// app/Models/Gezin.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gezin extends Model
{
    protected $table = 'gezin';

    public function personen()
    {
        return $this->hasMany(Persoon::class, 'gezin_id');
    }

    public function allergieën()
    {
        return $this->hasManyThrough(
            VoedselAllergie::class,
            Persoon::class,
            'gezin_id', // Foreign key on Persoon table
            'id', // Foreign key on VoedselAllergie table
            'id', // Local key on Gezin table
            'allergieid' // Local key on Persoon table (through allergieperpersoon)
        );
    }
}
