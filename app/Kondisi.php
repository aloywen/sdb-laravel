<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kondisi extends Model
{
    public function tes()
    {
        return $this->hasMany(Tes::class);
    }
}
