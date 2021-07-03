<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\operations;

class employers extends Model
{
    public function operation(){
        return $this->hasMany(operations::class);
    }
}
