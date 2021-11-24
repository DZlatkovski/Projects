<?php

namespace App\Http\Controllers;

use App\CountryData;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $date1 = Carbon::now()->subDays(1);
        $date1 = date("Y-m-d 00:00:00", strtotime($date1));

        $date2 = Carbon::now()->subDays(2);
        $date2 = date("Y-m-d 00:00:00", strtotime($date2));

        $confirmed1 = CountryData::where('date', $date1)
            ->sum('confirmed');

        $confirmed2 = CountryData::where('date', $date2)
            ->sum('confirmed');

        $confirmed = ($confirmed1 - $confirmed2);

        $deaths1 = CountryData::where('date', $date1)
            ->sum('deaths');

        $deaths2 = CountryData::where('date', $date2)
            ->sum('deaths');

        $deaths = ($deaths1 - $deaths2);

        $recovered1 = CountryData::where('date', $date1)
            ->sum('recovered');

        $recovered2 = CountryData::where('date', $date2)
            ->sum('recovered');

        $recovered = ($recovered1 - $recovered2);

        $globalData = [$confirmed, $deaths, $recovered, $date1];

        return view('main', ['globalData' => $globalData]);
    }

    public function backToGlobal()
    {
        return redirect()->route('home');
    }
}
