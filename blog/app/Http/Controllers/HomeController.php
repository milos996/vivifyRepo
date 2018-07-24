<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function __construct(){

    $this->middleware('home');

  }

    //
    public function ispisLog(){
      \Log::info("U kontroleru si");

      return "Cao od kontrolera!";
    }
}
