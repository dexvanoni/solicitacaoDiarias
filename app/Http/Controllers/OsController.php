<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OsController extends Controller
{
    public function index(){
      $os = rand();
      $data = date('d/m/Y');
      $pcdp = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9));
      return view('ficha', ['os' => $os, 'data' => $data, 'pcdp'=>$pcdp]);
    }
}
