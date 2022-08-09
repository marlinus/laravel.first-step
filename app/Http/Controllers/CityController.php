<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Routing\Controller;

class CityController extends Controller {

  public function index() {
    $countries = Country::with('cities')->take(10)->get();
    $cities = City::query()->orderBy('population', 'DESC')->limit(10)->get();

//    dd($cities);

    return view('city.index', [
      'cities' => $cities,
      'css' => 'css/table.css'
    ]);
  }

}
