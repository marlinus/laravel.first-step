<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CityController extends Controller {

  public function index() {
    $countries = Country::with('cities')->take(10)->get();
    $cities = City::query()->orderBy('population', 'DESC')->limit(10)->get();

//    dd($cities);

    return view('components.city.index', [
      'cities' => $cities,
      'css' => 'css/table.css'
    ]);
  }

  public function create() {
    return view('components.city.create');
  }

  public function store(Request $request) {
    dd($request->all());
  }

  public function edit($id) {

    $city = City::with('country')->find($id);

    return view('components.city.edit', compact('city'));

  }

  public function update(Request $request, $id) {
    $validate = $request->validate([
      'name' => 'required',
      'population' => 'required'
    ]);

    $city = City::query()->find($id);
    dd($city);
  }

  public function destroy($id) {
    return 'deleted';
  }




}
