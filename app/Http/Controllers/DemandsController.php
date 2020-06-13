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

        $ads = adsDB::all()->random(1);
        $boxoffice = boxofficeDB::all();
        // $current_weather = $lowm->getCurrentWeather($cityGet);
        // dd($current_weather->temperature);
        return view('demands.index', ['ads' => $ads, 'boxoffice' => $boxoffice]);
    }
}
