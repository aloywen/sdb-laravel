<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pembayaran extends Model
{
    protected $table = "pembayarans";
 
    public function pembayaran()
    {
    	return $this->belongsTo('App\Pembayaran');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }
}
