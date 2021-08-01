<?php

namespace App\Http\Controllers\Auth;

use App\Nasabah;
use App\User;
use App\Pembayaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_visit()
    {
        return view('visit.login');
    }

    public function login_v(Request $request)
    {
        // dd($request->all());
        $user = Nasabah::where('email', $request->email)->first();
        

        if($user->id != null){
            if(Hash::check($request->password, $user->password)){
                \Session::put('user', $user);

                return redirect('/visit');
            }else {
                \Session::flash('err', 'Password Salah!');
                
                return redirect('/login-visit');
            }
        } else {
            \Session::flash('err', 'Nomor Box Anda Salah');
            
            return redirect('/login-visit');
        }
        // dd($request->all());
    }

    public function logout()
    {
        \Session::flush();;

        return redirect('/login-visit');
    }
    public function login_admin()
    {
        return view('admin.login');
    }

    public function login_a(Request $request)
    {
        // dd($request->all());
        $user = User::where('email', $request->email)->first();
        

        if($user->id != null){
            if(Hash::check($request->password, $user->password)){
                \Session::put('user', $user);

                return redirect('/pending');
            }else {
                \Session::flash('err', 'Password Salah!');
                
                return redirect('/login-admin');
            }
        } else {
            \Session::flash('err', 'Nomor Box Anda Salah');
            
            return redirect('/login-admin');
        }
        // dd($request->all());
    }

    public function logout_a()
    {
        \Session::flush();;

        return redirect('/login-admin');
    }
}
