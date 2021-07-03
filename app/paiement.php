<?php

namespace App;
use App\Models\achat_pret;

use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    public function achat_pret()
    {
        return $this->belongsTo(achat_pret::class);
    }
}
