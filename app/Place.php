<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //---------- Search by the word -----------
   public function scopeSearch($query, $s)
    {
        return $query->where('pavadinimas', 'LIKE', '%' . $s . '%')
        ->orWhere("trumpas_aprasymas","LIKE",'%' . $s . '%')
        ->orWhere("aprasymas","LIKE",'%' . $s . '%')
        ->orWhere("miestas","LIKE",'%' . $s . '%');
    }

    //---------- Search by the Rajonas -----------
    public function scopeRajonas($query, $r)
    {
        if($r != 'Visi') $query->where("rajonas", $r);
    }

    //---------- Search by the Parkas -----------
    public function scopeParkas($query, $p)
    {
        if($p != 'Visi') $query->where("parkas", $p);
    }

    //---------- Search by the Tipas -----------
    public function scopeTipas($query, $t)
    {
        if($t != 'Visi') $query->where("tipas", $t);
    }
}
