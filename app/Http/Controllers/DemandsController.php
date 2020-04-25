<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gmopx\LaravelOWM\LaravelOWM;

class DemandsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Get Location
        // $ip = request()->getClientIp();
        $ip = '175.158.36.106';
        // $data = \Location::get($ip);
        // $cityGet = $data->cityName;

        // Get Weather Info
        $lowm = new LaravelOWM();
        // $current_weather = $lowm->getCurrentWeather($cityGet);
        // dd($current_weather->temperature);
        return view('demands.index');
    }
}
