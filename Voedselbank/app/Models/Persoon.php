<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Persoon extends Model
{
    protected $table = 'persoon';

    public function voedselAllergie(): BelongsToMany
    {
        return $this->belongsToMany(VoedselAllergie::class, 'allergieperpersoon', 'persoonid', 'allergieid');
    }
}
