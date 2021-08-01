<?php

namespace App\Http\Controllers;

use App\Nasabah;
use App\Pembayaran;
use App\Box;
use App\Visit;
use App\User;
use Carbon\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // ambil data dari tabel Nasabah yg berkondisi pending
        $data = Nasabah::where('kondisi_id', 1)->get(); 

        // tampilannya
        return view('admin.dashboard', ['data' => $data]);
    }
    
    public function detail($id)
    {
        // ambil data dari tabel Nasabah yg sesuai id
        $data = Nasabah::get()->where('id', $id)->first();

        // menghitung lama sewa
        $startTime = Carbon::parse($data->awal_sewa);
        $endTime = Carbon::parse($data->akhir_sewa);

        $totalDuration =  $data->jangka_sewa." Tahun";
        // dd($totalDuration);

        return view('admin.detail_pending', ['data' => $data, 'total_hari' => $totalDuration]);
    }

    public function konfirmasi(Request $request, $id)
    {
        $konfir = Nasabah::where('no_box',$id)->update([
            'kondisi_id' => 2,
        ]);
        
        $box = Box::find($id);
        $box->kondisi = 2;
        $box->update();

        return redirect('/pending')->with('success', 'Task Created Successfully!');
        // dd($request->kondisi);
    }

    public function pembayaran()
    {
        $data = Nasabah::where('kondisi_id', 2)->get();

        return view('admin.pembayaran', ['data' => $data]);
    }

    public function detail_pembayaran($id)
    {
        // ambil data sewa user
        $data = Nasabah::get()->where('id', $id)->first();
        
        // ambil data pembayaran berdasarkan id user
        $pembayaran = Pembayaran::get()->where('tes_id', $id);

        $dibayar = 0;
        foreach($pembayaran as $item=>$value)
        {
        $dibayar +=$value['jumlah'];
        }

        // dd($harga_total);

        // lama sewa
        $totalDuration =  $data->jangka_sewa." Tahun";

        // hitung harga box
        $hargabox = $data->total_bayar / $data->jangka_sewa;



        return view('admin.detail_pembayaran', ['data' => $data, 'total_hari' => $totalDuration, 'hargabox' => $hargabox, 'pembayaran' => $pembayaran, 'dibayar' => $dibayar]);
        // dd($pembayaran);
    }

    public function bayar(Request $request)
    {
        $bayar = new Pembayaran;
        $bayar->tes_id = $request->tes_id;
        $bayar->jumlah = \Str::of($request->dibayar)->replaceMatches('/,.*|\D/', '');
        $bayar->save();

        return back()->with('success', 'Pembayaran Telah Ditambah!');
        // dd($request->all());
    }

    public function history()
    {
        $history = Box::get();
        return view('admin.history', ['box' => $history]);
    }

    public function detail_history($id)
    {
        // $data = Nasabah::where('no_box', $id)->get();
        $data = Nasabah::get()->where('no_box', $id)->first();

        // dd($data);
        // $startTime = Carbon::parse($waktu->awal_sewa);
        // $endTime = Carbon::parse($waktu->akhir_sewa);

        // $totalDuration =  $startTime->diffInDays($endTime)." Hari";

        return view('admin.detail_history', ['data' => $data]);
        // dd($data);
    }

    public function detail_box_history($id)
    {
        $data = Nasabah::get()->where('id', $id)->first();

        $startTime = Carbon::parse($data->awal_sewa);
        $endTime = Carbon::parse($data->akhir_sewa);

        $totalDuration =  $startTime->diffInDays($endTime)." Hari";
        // dd($totalDuration);

        return view('admin.detail_box_history', ['data' => $data, 'total_hari' => $totalDuration]);
    }

    public function visitor()
    {

        $data = Visit::get();

        return view('admin.visitor', ['data' => $data]);
    }

    public function admin()
    {
        $data = User::get();
        return view('admin.admin', ['data' => $data]);
    }

    public function tambah_admin()
    {
        return view('admin.tambah_admin');
    }

    public function addAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // dd($request->all());
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->save();

        return redirect('/admin');
    }

    public function blokirVisit(Request $request)
    {
        // dd($request->all());
        $konfir = Nasabah::where('id',$request->id)->update([
            'tunggakan' => $request->blokir
        ]);

        return redirect('/pembayaran')->with('success', 'Task Created Successfully!');
    }

    public function bukaVisit(Request $request)
    {
        // dd($request->all());
        $konfir = Nasabah::where('id',$request->id)->update([
            'tunggakan' => $request->buka
        ]);

        return redirect('/pembayaran')->with('success', 'Task Created Successfully!');
    }
}
  