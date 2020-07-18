<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\clientsDB;
use Carbon\Traits\Timestamp;

class LoginController extends Controller
{
    public function signin()
    {
        return view('homepage.signin');
    }

    public function signup()
    {
        return view('homepage.register');
    }

    public function create_account(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users|min:5|regex:/^\S*$/u',
            'email' => 'required|unique:users|email',
            'phone' => 'required|unique:users|numeric|min:11',
        ]);

        $name = $request->name;
        $data_member = new User;
        $data_member->name = $request->name;
        $data_member->username = $request->username;
        $data_member->email = $request->email;
        $data_member->phone = $request->phone;
        $data_member->unpassword = $request->password;
        $data_member->password = Hash::make($request->password);
        $data_member->city = $request->city;
        $data_member->status = 'unactived';
        $data_member->save();
        // dd($data_member);
        return view('homepage.berhasil', ['name' => $name]);
    }

    public function administrator(){
        return view('homepage.administrator');
    }
}
