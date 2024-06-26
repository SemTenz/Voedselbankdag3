<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eetwens extends Model
{
    public function gezinnen()
    {
        return $this->belongsToMany(Gezin::class, 'eetwenspergezin', 'eetwensid', 'gezinid');
    }
}