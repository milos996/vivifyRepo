<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function __construct(){

    $this->middleware('home');

  }

    //
    public function showContent(){
      \Log::info("U kontroleru si");

      return view('child1', ['name' => "Milos"]);
    }
}
