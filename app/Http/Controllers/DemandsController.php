<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gmopx\LaravelOWM\LaravelOWM;

use App\adsDB;
use App\boxofficeDB;

use Illuminate\Support\Facades\DB;

class DemandsController extends Controller
{
    public function index()
    {
        // Get Location
        // $ip = request()->getClientIp();
        $ip = '175.158.36.106';
        // $data = \Location::get($ip);
        // $cityGet = $data->cityName;

        // Get Weather Info
        $lowm = new LaravelOWM();

        $ads = DB::table('places_video')
            ->join('ads', 'places_video.id_ads','=', 'ads.id')
            ->orderBy('ads.created_at', 'ASC')
            ->select('ads.*')
            ->where('id_place', session()->get('id'))
            ->get();

        //dd($ads);

        $boxoffice = boxofficeDB::all();
        // $current_weather = $lowm->getCurrentWeather($cityGet);
        // dd($current_weather->temperature);
        return view('demands.index', ['ads' => $ads, 'boxoffice' => $boxoffice]);
    }
}
