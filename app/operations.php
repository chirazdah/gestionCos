<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\employers;
use App\justification;
use App\achat_pret;
use App\aide_sociale;
use App\prime;
class operations extends Model
{

    protected $fillable = [
        'id', 'date_benifice', 'matricule',
    ];



    public function employer()
    {
        return $this->belongsTo(employers::class);
    }

    public function justification(){
        return $this->hasMany(justification::class);
    }

    public function achat_pret(){
        return $this->hasOne('App\achat_pret', 'id','id_operation');
    }

    public function aide_sociale(){
        return $this->hasOne(aide_sociale::class);
    }
    public function prime(){
        return $this->hasOne(prime::class);
    }      
}       
