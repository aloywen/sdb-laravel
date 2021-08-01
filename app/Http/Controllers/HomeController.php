<?php

namespace App\Http\Controllers;

use App\Form;
use App\Box;
use App\Nasabah;
Use Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function syarat()
    {
        return view('home.syarat');
    }

    public function pilih()
    {
        $kecil = Box::where('ukuran', 'Kecil')->get();
        $sedang = Box::where('ukuran', 'Sedang')->get();
        $besar = Box::where('ukuran', 'Besar')->get();

        return view('home.pilih-box', ['kecil' => $kecil, 'sedang' => $sedang, 'besar' => $besar, ]);
    }
    
    public function form($id)
    {
        $box = Box::where('id', $id)->first();

        // $ukuran = ['Kecil','Sedang','Besar'];
        $kelamin = ['Pria','Wanita'];
        $kewarganegaraan = ['WNI','WNA'];
        $status_pendu = ['Penduduk','Non Penduduk'];
        $identitas = ['KITAP','Paspor','KITAS','KTP'];
        $status_tempat = ['Milik Sendiri','Milik Keluarga','Sewa','Dinas'];
        $agama = ['Islam','Kristen','Budha','Hindu','kong Hu Cu'];
        $pendidikan = ['S1','S2','S3','SMA'];
        $perkawinan = ['Lajang','Menikah','Duda','Janda'];
        $pekerjaan = ['Wiraswasta','Pengusaha','ASN'];
        $status_kerja = ['Tetap','Kontrak','Paruh Waktu','Honorer','Lainnya'];

        return view('home.formulir', [
            'box' => $box,
            // 'ukuran' => $ukuran,
            'kelamin' => $kelamin,
            'kewarganegaraan' => $kewarganegaraan,
            'status_pendu' => $status_pendu,
            'identitas' => $identitas, 
            'status_tempat' => $status_tempat,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'perkawinan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'status_kerja' => $status_kerja
            ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'jangka_sewa' => 'required',
            'nama' => 'required',
            'no_rek' => 'required',
        ]);



        $nasabah = $request->all();
        $nasabah['total_bayar'] = \Str::of($request->total_bayar)->replaceMatches('/,.*|\D/', '');
        $nasabah['password'] = \Hash::make($request->password);
        // $nasabah['jangka_sewa'] = $request->jangka_sewa; 
        // dd($nasabah);  
        Nasabah::create($nasabah);     

        Box::where('box',$request->no_box)->update([
            'kondisi' => 1,
        ]);


        return redirect('/')->with('success', 'Booking Box Berhasil! Silahkan Login');

        // dd($request->all());
    }
}
