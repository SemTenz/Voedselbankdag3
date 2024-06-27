<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voedselpakket extends Model
{
    use HasFactory;

    protected $table = 'voedselpakketten';

    public function productpervoedselpakket() {
        return $this->hasMany(productpervoedselpakket::class, 'voedselpakketid'); // Assuming 'voedselpakket_id' is the correct foreign key
    }

    protected static function boot() {
        parent::boot();
    
        static::saving(function ($voedselpakket) {
            if ($voedselpakket->isDirty('datumuitgifte')) {
                $voedselpakket->datumuitgifte_last_changed = now();
            }
        });
    }
}