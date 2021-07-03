<?php

namespace App;
use App\Models\operation;

use Illuminate\Database\Eloquent\Model;

class aide_sociale extends Model
{
    public function operation()
    {
        return $this->belongsTo(operation::class);
    }
}
