<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasabahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('nasabahs', function (Blueprint $table) {
            $table->id();
            $table->integer('no_box');
            $table->integer('kondisi_id');
            $table->string('ukuran', 8);
            $table->integer('jangka_sewa');
            $table->integer('dibayar');
            $table->integer('total_bayar');
            $table->string('keterangan_bayar', 25);
            $table->string('tunggakan', 25);
            $table->string('nama', 200);
            $table->string('email', 200);
            $table->string('password', 200);
            $table->integer('no_rek');
            $table->string('tempat', 200);
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin', 15);
            $table->string('warganegara', 5);
            $table->string('jenis_identitas', 7);
            $table->string('no_identitas', 7);
            $table->integer('npwp');
            $table->string('alamat_identitas', 200);
            $table->string('alamat_sekarang', 200);
            $table->string('alamat_kantor', 200);
            $table->string('status_tempat_tinggal', 20);
            $table->integer('no_hp');
            $table->string('pekerjaan', 20);
            $table->string('nama_keluarga', 200);
            $table->string('alamat_keluarga', 200);
            $table->string('hubungan', 35);
            $table->integer('no_hp_keluarga');
            $table->string('nama_perusahaan', 200);
            $table->string('jabatan', 200);
            $table->string('status_pekerjaan', 25);
            $table->string('status_aktif', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nasabahs');
    }
}
