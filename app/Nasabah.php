<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Nasabah extends Model
{
    protected $fillable = ['kondisi_id', 'no_box', 'ukuran', 'jangka_sewa', 'dibayar', 'total_bayar', 'keterangan_bayar', 'tunggakan', 'nama', 'email', 'password', 'no_rek', 'tempat', 'tgl_lahir', 'jenis_kelamin', 'warganegara', 'jenis_identitas', 'no_identitas', 'npwp', 'alamat_identitas', 'alamat_sekarang', 'alamat_kantor', 'status_tempat_tinggal', 'no_hp', 'pekerjaan', 'nama_keluarga', 'alamat_keluarga', 'hubungan', 'no_hp_keluarga', 'nama_perusahaan', 'jabatan', 'status_pekerjaan', 'status_aktif'];
    
    public function pembayaran()
    {
        return $this->hasOne('App\Pembayaran');
    }
    
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }
}
