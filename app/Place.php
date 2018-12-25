<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
   public function scopeSearch($query, $s)
    {
        return $query->where('pavadinimas', 'LIKE', '%' . $s . '%')
                ->orWhere("trumpas_aprasymas","LIKE",'%' . $s . '%')
                ->orWhere("aprasymas","LIKE",'%' . $s . '%')
                ->orWhere("miestas","LIKE",'%' . $s . '%');
    }
}
