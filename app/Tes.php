<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
 


class Tes extends Model
{
    protected $fillable = ['kondisi_id', 'no_box', 'ukuran', 'awal_sewa', 'ahkir_sewa', 'nama', 'keterangan',];
    protected $table = 'tes';
    
    public function pembayaran()
    {
        return $this->hasOne('App\Pembayaran');
    }
    
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }
    
}
