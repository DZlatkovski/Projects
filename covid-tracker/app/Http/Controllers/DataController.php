<?php

namespace App\Http\Controllers;
use App\GlobalCase;
use App\CountryData;
use DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DataController extends Controller
{
   
    public function countryData($inputValue, $subDaus1, $subDays2, $country)
    {
        $countries = CountryData::select('country')->groupBy('country')->get();
        
        $date1 = Carbon::now()->subDays($subDaus1);
        $date1 = date("Y-m-d 00:00:00", strtotime($date1));

        $date2 = Carbon::now()->subDays($subDays2);
        $date2 = date("Y-m-d 00:00:00", strtotime($date2));

        $confirmed1 = CountryData::where('date', $date1)->where('country', '=', $inputValue)
        ->sum('confirmed');

        $confirmed2 = CountryData::where('date', $date2)->where('country', '=', $inputValue)
        ->sum('confirmed');

        $confirmed = ($confirmed1 - $confirmed2);

        $deaths1 = CountryData::where('date', $date1)->where('country', '=', $inputValue)
        ->sum('deaths');

        $deaths2 = CountryData::where('date', $date2)->where('country', '=', $inputValue)
        ->sum('deaths');

        $deaths = ($deaths1 - $deaths2);

        $recovered1 = CountryData::where('date', $date1)->where('country', '=', $inputValue)
        ->sum('recovered');

        $recovered2 = CountryData::where('date', $date2)->where('country', '=', $inputValue)
        ->sum('recovered');

        $recovered = ($recovered1 - $recovered2);

        $countriesData = CountryData::where('country', $country)
        ->get();

        $countryData = [$confirmed, $deaths, $recovered, $date1, $inputValue];

        return view('country', [
            'countries' => $countries,
            'countryData' => $countryData,
            'countriesData'=> $countriesData,
        ]);

        return;
    }

    public function globalData($inputValue, $subDaus1, $subDays2)
    {

        $date1 = Carbon::now()->subDays($subDaus1);
        $date1 = date("Y-m-d 00:00:00", strtotime($date1));

        $date2 = Carbon::now()->subDays($subDays2);
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

        return;
    }

    public function getGlobalData(Request $request)
    {
        $inputValue = $request->input('global-period');

        if($request->input('global-period') == "daily")
        {
            return $this->globalData($inputValue, 1, 2);

        } elseif($request->input('global-period') == "monthly")
        {
            return $this->globalData($inputValue, 1, 30);
            
        } else
        {
            return $this->globalData($inputValue, 1, 90);
        }
        
    }

    public function getCountryData(Request $request)
    {

        $countriesCases = CountryData::select('country')->groupBy('country')->get();
        $inputValue = $request->input('countries');
        $country = $request->input('countries');

        if($request->input('country-period') == "daily")
        {
            return $this->countryData($inputValue, 1, 2, $country);
            
        } elseif($request->input('country-period') == "monthly") 
        {
            return $this->countryData($inputValue, 1, 30, $country);

        } else 
        {
            return $this->countryData($inputValue, 1, 90, $country);
        }
        
    }
}
