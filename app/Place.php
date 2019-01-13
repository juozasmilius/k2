<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
   public function scopeSearch($query, $s, $r, $p, $t)
    {
        if($r == 'visi' AND $p == 'visi' AND $t == 'visi'){
            return $query->where('pavadinimas', 'LIKE', '%' . $s . '%')
            ->orWhere("trumpas_aprasymas","LIKE",'%' . $s . '%')
            ->orWhere("aprasymas","LIKE",'%' . $s . '%')
            ->orWhere("miestas","LIKE",'%' . $s . '%');
        }elseif($r != 'visi'){
            return $query->where("rajonas","LIKE", '%' . $r . '%')
            ->orWhere('pavadinimas', 'LIKE', '%' . $s . '%')
            ->orWhere("trumpas_aprasymas","LIKE",'%' . $s . '%')
            ->orWhere("aprasymas","LIKE",'%' . $s . '%')
            ->orWhere("miestas","LIKE",'%' . $s . '%');
        }elseif($p != 'visi'){
            return $query->where("parkas","LIKE", '%' . $p . '%')
            ->orWhere('pavadinimas', 'LIKE', '%' . $s . '%')
            ->orWhere("trumpas_aprasymas","LIKE",'%' . $s . '%')
            ->orWhere("aprasymas","LIKE",'%' . $s . '%')
            ->orWhere("miestas","LIKE",'%' . $s . '%');
        }elseif($t != 'visi'){
            return $query->where("tipas","LIKE", '%' . $t . '%')
            ->orWhere('pavadinimas', 'LIKE', '%' . $s . '%')
            ->orWhere("trumpas_aprasymas","LIKE",'%' . $s . '%')
            ->orWhere("aprasymas","LIKE",'%' . $s . '%')
            ->orWhere("miestas","LIKE",'%' . $s . '%');
        }
        
    }
}
