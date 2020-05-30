<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adsDB;
use App\boxofficeDB;
use App\clientsDB;
use App\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ContentController extends Controller
{
    // VIEW SECTION
    public function ads()
    {
        return view('dashboard.content.ads');
    }
    public function client()
    {
        $client = clientsDB::all();
        return view('dashboard.content.client', ['client' => $client]);
    }

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
