<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Visit extends Model
{
    protected $fillable = ['user_id', 'box', 'email_id', 'nama', 'keterangan', 'total_bayar', 'keterangan_bayar'];


    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }
}
