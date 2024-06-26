<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    protected $fillable = [
        'naam', 'contactpersoon', 'leverancier_nummer', 'leverancier_type'
    ];

    /**
     * De contacten die aan deze leverancier zijn gekoppeld.
     */
    public function contact()
    {
        return $this->belongsToMany(Contact::class, 'contactperleverancier', 'leverancier_id', 'contact_id');
    }
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
