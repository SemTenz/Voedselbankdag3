<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    // Assuming each Persoon can represent multiple Gezinnen
    public function gezinnen()
    {
        return $this->hasMany(Gezin::class, 'vertegenwoordiger_id');
    }
}