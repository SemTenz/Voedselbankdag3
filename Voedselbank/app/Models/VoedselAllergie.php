<?php

// app/Models/VoedselAllergie.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoedselAllergie extends Model
{
    protected $table = 'allergie';

    public function personen()
    {
        return $this->belongsToMany(Persoon::class, 'allergieperpersoon', 'allergieid', 'persoonid');
    }
}
