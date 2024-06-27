<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Eetwens extends Model
{
    protected $table = 'eetwensen';
    // Add a method to filter by eetwens
    public function gezinnen()
    {
        return $this->belongsToMany(Gezin::class, 'eetwenspergezin', 'eetwensid', 'gezinid');
    }
}