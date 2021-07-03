<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\operation;

class prime extends Model
{
    public function operation()
    {
        return $this->belongsTo(operation::class);
    }
}
