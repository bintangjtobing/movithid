<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\clientsDB;
use App\placesDB;
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
        $data_member = new placesDB;
        $data_member->nama = $request->name;
        $data_member->username = $request->username;
        $data_member->email = $request->email;
        $data_member->nohp = $request->phone;
        $data_member->unpassword = $request->password;
        $data_member->password = Hash::make($request->password);
        $data_member->domisilis_id = $request->city;
        $data_member->status = 'unactived';
        $data_member->nama_toko = $request->placename;
        $data_member->places_type = $request->place;
        $data_member->alamat_toko = '-';
        $data_member->spesifikasitv = '-';
        $data_member->smarttv = '-';
        $data_member->created_by = 'Guest';
        $data_member->updated_by = 'Guest';
        $data_member->save();
        // dd($data_member);
        return view('homepage.berhasil', ['name' => $name]);
    }

    public function administrator()
    {
        return view('homepage.administrator');
    }
}
