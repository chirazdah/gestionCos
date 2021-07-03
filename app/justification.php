<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class justification extends Model
{
    public function justification()
    {
        return $this->belongsTo(operations::class);
    }
}
