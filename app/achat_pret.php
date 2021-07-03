<?php

namespace App;
use App\Models\paiement;
use App\operations;
use Illuminate\Database\Eloquent\Model;

class achat_pret extends Model
{
     public function paiement()
     {
         return $this->hasOne(paiement::class);
     }
public function operation()
     {
        return $this->belongsTo('App\operations');
     }
}
