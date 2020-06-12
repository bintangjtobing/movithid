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
        $client->password = Hash::make($generate_password);
        $client->unpassword = $generate_password;
        $client->updated_by = auth()->user()->name;
        $client->created_by = auth()->user()->name;
        $client->save();
        return back()->with('selesai', 'Tambah data client berhasil ditambah.');
    }
    public function updateclients(Request $request, $id)
    {
        $client = clientsDB::find($id);
        $client->clients_name = $request->fullname;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->deskripsi = $request->deskripsi;
        $client->namausaha = $request->namausaha;
        $client->username = $request->username;
        $client->updated_by = auth()->user()->name;

        $client->save();
        return back()->with('selesai', 'Update data client berhasil diubah.');
    }
    public function deleteclient($id)
    {
        $client = clientsDB::find($id);

        if ($client) {
            if ($client->delete()) {

                DB::statement('ALTER TABLE clients AUTO_INCREMENT = ' . (count(clientsDB::all()) + 1) . ';');

                return back()->with('selesai', 'Client has been successfully deleted!');
            }
        }
    }

    public function addplaces(Request $request)
    {
        $generate_password = str_random(6);
        $places = new placesDB;
        $places->nama = $request->name;
        $places->nama_toko = $request->nama_toko;
        $places->alamat_toko = $request->alamat_toko;
        $places->email = $request->email;
        $places->nohp = $request->nohp;
        $places->spesifikasitv = $request->spesifikasi;
        $places->smarttv = $request->smarttv;
        $places->updated_by = auth()->user()->name;
        $places->created_by = auth()->user()->name;
        $places->save();
        return back()->with('selesai', 'Yey! Kamu berhasil menambahkan data toko/tempat lainnya untuk kita bisa masukkan iklan lagi nih!');
    }
    public function updateplaces(Request $request, $id)
    {
        $places = placesDB::find($id);
        $places->nama = $request->name;
        $places->nama_toko = $request->nama_toko;
        $places->alamat_toko = $request->alamat_toko;
        $places->email = $request->email;
        $places->nohp = $request->nohp;
        $places->spesifikasitv = $request->spesifikasi;
        $places->smarttv = $request->smarttv;
        $places->updated_by = auth()->user()->name;
        $places->save();
        return back()->with('selesai', 'Yes! Kamu berhasil update data toko/tempat movith.');
        // dd($places);
    }
    public function deleteplaces($id)
    {
        $places = placesDB::find($id);

        if ($places) {
            if ($places->delete()) {

                DB::statement('ALTER TABLE places AUTO_INCREMENT = ' . (count(placesDB::all()) + 1) . ';');

                return back()->with('selesai', 'Places has been successfully deleted!');
            }
        }
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

    // Ads video controller
    public function ads()
    {
        return view('dashboard.content.ads');
    }
    public function adsvideoadd(Request $request)
    {
        // $this->validate($request, [
        //     'coverimg' => 'required|required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        //     'fileads' =>
        //     'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        // ]);
        // $ads = new adsDB();
        // $ads->judul_ads = $request->judul_ads;
        // $ads->desc_ads = $request->desc_ads;
        // $ads->requester = auth()->user()->name;
        // $ads->kategori = $request->kategori;
        // $ads->lama_kontrak = $request->lama_kontrak;
        // $ads->starteddate = $request->starteddate;

        dd($request->all());
    }
    // End ads video controller
    // Box Office Controller
    public function boxoffice()
    {
        return view('dashboard.content.boxoffice');
    }
    public function boxofficeadd(Request $request)
    {
        $this->validate($request, [
            'coverimg' => 'required|required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'file' =>
            'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);
    }
    // End Box Office Controller
}
