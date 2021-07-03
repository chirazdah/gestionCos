<?php

namespace App;
use App\Models\paiement;
use App\operations;
use Illuminate\Database\Eloquent\Model;

class achat_pret extends Model
{
     protected $fillable = [
          'id_achat', 'type', 'titre','somme_max','date_fin_prevue','date_fin_reel','id_operation',
      ];

     public function paiement()
     {
         return $this->hasOne(paiement::class);
     }
/*public function operation()
     {
        return $this->belongsTo('App\operations');
     }*/
}
