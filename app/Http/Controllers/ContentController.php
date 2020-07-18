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
        $ads = adsDB::all();
        return view('dashboard.content.client', ['client' => $client, 'places' => $places, 'ads' => $ads]);
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


        //dd($request->input('id_ads'));

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

        $lastInsertId = $places->id;

        foreach($request->input('id_ads') as $id_ads) {
            DB::table('places_video')
                ->insert([
                    'id_place' => $lastInsertId,
                    'id_ads' => $id_ads
                ]);
        }

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

        DB::table('places_video')
            ->where('id_place', $id)
            ->delete();

        foreach($request->input('id_ads') as $id_ads) {
            DB::table('places_video')
                ->insert([
                    'id_place' => $id,
                    'id_ads' => $id_ads
                ]);
        }


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
        $ads = adsDB::all();
        return view('dashboard.content.ads', ['ads' => $ads]);
    }
    public function adsvideoadd(Request $request)
    {
        $this->validate($request, [
            'coverimg' => 'required|required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'fileads' =>
            'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);
        $ads = new adsDB();
        $ads->judul_ads = $request->judul_ads;
        $ads->desc_ads = $request->desc_ads;
        $ads->requester = $request->requester;
        if ($request->hasFile('fileads')) {
            $request->file('fileads')->move('media/fileads/' . $request->requester . '/', $request->file('fileads')->getClientOriginalName());
            $ads->fileads = $request->file('fileads')->getClientOriginalName();
        }
        $ads->kategori = $request->kategori;
        $ads->lama_kontrak = $request->lama_kontrak;
        $ads->starteddate = $request->starteddate;
        $ads->datefinished = $request->datefinished;
        if ($request->hasFile('coverimg')) {
            $request->file('coverimg')->move('media/coverimg/' . $request->requester . '/', $request->file('coverimg')->getClientOriginalName());
            $ads->coverimg = $request->file('coverimg')->getClientOriginalName();
        }
        $ads->save();
        return back()->with('selesai', 'Yeah! File iklan kamu berhasil diitambahkan!');
        // dd($request->all());
    }
    public function deleteads($id)
    {
        $ads = adsDB::find($id);

        if ($ads) {
            if ($ads->delete()) {

                DB::statement('ALTER TABLE ads AUTO_INCREMENT = ' . (count(adsDB::all()) + 1) . ';');

                return back()->with('selesai', 'File iklan telah berhasil dihapus!');
            }
        }
    }
    // End ads video controller
    // Box Office Controller
    public function boxoffice()
    {
        $box = boxofficeDB::all();
        return view('dashboard.content.boxoffice', ['box' => $box]);
    }
    public function boxofficeadd(Request $request)
    {
        $this->validate($request, [
            'coverimg' => 'required|required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'file' =>
            'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);
        $box = new boxofficeDB();
        $box->judul = $request->judul;
        $box->tahun_film = $request->tahun_film;
        $box->created_by = auth()->user()->name;
        $box->updated_by = auth()->user()->name;
        $box->kategori_utama = $request->kategori_utama;
        $box->sub_kategori = $request->sub_kategori;
        $box->sub_kategori2 = $request->sub_kategori2;
        if ($request->hasFile('coverimg')) {
            $request->file('coverimg')->move('media/boxoffice/coverimg/' . $request->judul . '/', $request->file('coverimg')->getClientOriginalName());
            $box->coverimg = $request->file('coverimg')->getClientOriginalName();
        }
        if ($request->hasFile('file')) {
            $request->file('file')->move('media/boxoffice/filefilm/' . $request->judul . '/', $request->file('file')->getClientOriginalName());
            $box->file = $request->file('file')->getClientOriginalName();
        }
        $box->save();
        return back()->with('selesai', 'Yeah! Film box office kamu berhasil diitambahkan!');
        // dd($request->all());
    }
    public function deleteboxoffice($id)
    {
        $box = boxofficeDB::find($id);

        if ($box) {
            if ($box->delete()) {

                DB::statement('ALTER TABLE boxoffice AUTO_INCREMENT = ' . (count(boxofficeDB::all()) + 1) . ';');

                return back()->with('selesai', 'Film Box Office telah berhasil dihapus!');
            }
        }
    }
    // End Box Office Controller
}
