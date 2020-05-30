<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adsDB;
use App\boxofficeDB;
use App\clientsDB;
use App\User;
use App\placesDB;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ContentController extends Controller
{
    // VIEW SECTION
    public function ads()
    {
        return view('dashboard.content.ads');
    }
    // Client and places section
    public function client()
    {
        $client = clientsDB::all();
        $places = placesDB::all();
        return view('dashboard.content.client', ['client' => $client, 'places' => $places]);
    }
    public function addclient(Request $request)
    {
        $generate_password = str_random(6);
        $client = new clientsDB;
        $client->clients_name = $request->fullname;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->deskripsi = $request->deskripsi;
        $client->namausaha = $request->namausaha;
        $client->username = $request->username;
        $client->password = $generate_password;
        return back()->with('selesai', 'Tambah data client berhasil ditambah.');
    }
    public function addplaces(Request $request)
    {
        $generate_password = str_random(6);
        $places = new placesDB;
        $places->nama = $request->name;
        $places->nama_toko = $request->nama_toko;
        $places->alamat_toko = $request->alamat_toko;
        $places->email = $request->email;
        $places->password = $generate_password;
        $places->nohp = $request->nohp;
        $places->spesifikasitv = $request->spesifikasi;
        $places->smarttv = $request->smarttv;
        return back()->with('selesai', 'Yey! Kamu berhasil menambahkan data toko/tempat lainnya untuk kita bisa masukkan iklan lagi nih!');
    }
    // End section client and places

    // USER SECTION
    public function user()
    {
        $user = User::all();
        return view('dashboard.content.user', ['user' => $user]);
    }
    public function adduser(Request $request)
    {
        $generate_password = str_random(6);
        $user = new User;
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->status = 'active';
        $user->password  = Hash::make($generate_password);
        $user->unpassword = $generate_password;

        // dd($user);
        $user->save();
        return back()->with('selesai', 'Berhasil tambah data user baru');
    }
    public function updateuser(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->phone =  $request->phone;
        $user->status = $request->status;

        $user->save();
        return back()->with('selesai', 'Berhasil update data user!');
        // dd($user);
    }
    public function deleteuser($id)
    {
        $user = User::find($id);

        if ($user) {
            if ($user->delete()) {

                DB::statement('ALTER TABLE users AUTO_INCREMENT = ' . (count(User::all()) + 1) . ';');

                return back()->with('selesai', 'User has been successfully deleted!');
            }
        }
    }
    // END USER SECTION

    public function boxoffice()
    {
        return view('dashboard.content.boxoffice');
    }
}
