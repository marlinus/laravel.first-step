<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Routing\Controller;

class CityController extends Controller {

  public function index() {

    $cities = City::query()->orderBy('population', 'DESC')->limit(10)->get();

    return view('city.index', [
      'cities' => $cities,
      'css' => 'css/table.css'
    ]);
  }

}
