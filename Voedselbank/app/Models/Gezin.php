<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persoon;

class Gezin extends Model
{
    use HasFactory;

    // Explicitly define the table if it doesn't follow Laravel's naming convention
    protected $table = 'gezinnen';

    // Attributes that are mass assignable
    protected $fillable = [
        'naam',
        'omschrijving',
        'volwassenen',
        'kinderen',
        'babys',
    ];

    // Attributes that should be hidden for arrays
    protected $hidden = [
        'sensitive_attribute', // Example: passwords, personal info, etc.
    ];

    // Attributes that should be cast to native types
    protected $casts = [
        'email_verified_at' => 'datetime', // Example casting
    ];

    // Example of a one-to-many relationship
    public function voedselpakketten()
    {
        return $this->hasMany(Voedselpakket::class);
    }

    public function vertegenwoordiger()
{
    return $this->belongsTo(Persoon::class, 'vertegenwoordiger_id');
}

    public function eetwensen()
    {
        return $this->belongsToMany(Eetwens::class, 'eetwenspergezin', 'gezinid', 'eetwensid');
    }
}