<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EventController extends Controller {

  public function index(Request $request) {

    if ($request->method() === 'GET') {
      return view('event.index');
    } elseif ($request->method() === 'POST') {
      event(new TestEvent($request->input('message')));
      return response()->json(['status' => 'OK!'])->header('x-my', 'some value');
    }
    return response('', 404)->json(['status' => 'failed']);
  }
}
