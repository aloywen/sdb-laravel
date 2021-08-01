<?php

namespace App\Http\Controllers;

use App\Pembayaran;
use App\Visit;
use App\Nasabah;
use App\Box;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index()
    {
        $user = \Session::get('user');
        $visit = Visit::get()->where('email_id', $user->email);

        // tampilannya
       return view('visit.dashboard', ['data' => $user, 'visit' => $visit]);
    }

    public function tambah_kunjungan($id)
    {
        $data = Nasabah::get()->where('id', $id)->first();

        return view('visit.tambah_kunjungan', ['data' => $data]);
    }

    public function addKunjungan(Request $request)
    {
        $visit = new Visit;
        $visit->user_id = $request->id;
        $visit->box = $request->no_box;
        $visit->email_id = $request->email;
        $visit->nama = $request->nama;
        $visit->keterangan = $request->keterangan;

        $visit->save();

        return redirect('/visit');
    }

    public function pembayaran_user()
    {
        $user = \Session::get('user');
        $pembayaran = Pembayaran::get()->where('tes_id', $user->id);

        $dibayar = 0;
        foreach($pembayaran as $item=>$value)
        {
        $dibayar +=$value['jumlah'];
        }
        // dd($data);
        return view('visit.pembayaran_user', ['data' => $user, 'pembayaran' => $pembayaran, 'dibayar' => $dibayar]);
    }

    public function akhir_sewa()
    {
        $user = \Session::get('user');
        $box = Box::get()->where('box', $user->no_box)->first();
        $user = Nasabah::get()->where('id', $user->id)->first();

        // dd($box);
        return view('visit.akhir_sewa', ['box' => $box, 'user' => $user]);
    }

    public function selesai(Request $request)
    {
        $konfir = Box::where('box',$request->box)->update([
            'kondisi' => 3,
        ]);

        $konfir = Nasabah::where('id',$request->id)->update([
            'status_aktif' => "Tidak",
        ]);

        return redirect('/visit');
    }
}
 