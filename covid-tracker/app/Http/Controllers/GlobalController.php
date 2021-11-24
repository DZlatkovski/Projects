<?php

namespace App\Http\Controllers;

use App\CountryData;
use Illuminate\Support\Facades\Http;

class GlobalController extends Controller
{
    public function sync()
    {
        ini_set('max_execution_time', '0'); //To set the timeout time.

        $countries = Http::get('https://api.covid19api.com/countries')->json();

        foreach ($countries as $country) {
            $countrySlug = $country['Slug'];
            $countriesData = Http::get('https://api.covid19api.com/total/dayone/country/' . $countrySlug)->json();

            if (is_array($countriesData)) {

                foreach ($countriesData as $countryData) {
                    $country = new CountryData;
                    $date = $countryData['Date'];
                    $date = date("Y-m-d H:i:s", strtotime($date));

                    if ($country::where('date', '=', $date)->where('country', '=', $countryData['Country'])->exists()) {
                        continue;
                    } else {
                        $country->country = $countryData['Country'];
                        $country->active = $countryData['Active'];
                        $country->recovered = $countryData['Recovered'];
                        $country->deaths = $countryData['Deaths'];
                        $country->confirmed = $countryData['Confirmed'];
                        $country->date = $date;
                        $country->save();
                    }
                }
            }
        }

        return view('main');
    }

}
