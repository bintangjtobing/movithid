<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function validateLogin(Request $request)
    {
        $tokens = str_random(50);
        // if (Auth::attempt([
        //     'username' => $request->username,
        //     'password' => $request->password,
        //     'status' => 'active',
        // ])) {
        //     return redirect('/dash');
        // }
        // return back()->with('gagal', 'Otorisasi keanggotaan gagal atau silahkan cek kembali username atau password anda.');


        $username = $request->username;
        $password = $request->password;

        $check = DB::table('places')
            ->where('username', $username)
            ->first();



        //dd($check);

        if($check && HASH::check($password, $check->password)) {
            $check->isLogin = 'login';
            $check = (array)$check;
            session($check);

            return redirect('/demands');
        }


        return back()->with('gagal', 'Otorisasi keanggotaan gagal atau silahkan cek kembali username atau password anda.');


    }
    public function logout($id)
    {
        //Auth::logout();
        session()->forget([
            'id', 'nama', 'isLogin',
        ]);
        return redirect('/');
    }
    public function validateadministrator(Request $request){
        $tokens = str_random(50);
        // if (Auth::attempt([
        //     'username' => $request->username,
        //     'password' => $request->password,
        //     'status' => 'active',
        // ])) {
        //     return redirect('/dash');
        // }
        // return back()->with('gagal', 'Otorisasi keanggotaan gagal atau silahkan cek kembali username atau password anda.');


        $username = $request->username;
        $password = $request->password;

        $check = DB::table('users')
            ->where('username', $username)
            ->first();



        //dd($check);

        if($check && HASH::check($password, $check->password)) {
            $check->isLogin = 'admin';
            $check = (array)$check;
            session($check);

            return redirect('/dash');
        }


        return back()->with('gagal', 'Otorisasi keanggotaan gagal atau silahkan cek kembali username atau password anda.');
    }
}
