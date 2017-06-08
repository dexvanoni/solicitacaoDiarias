<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OsController extends Controller
{
  private $pessoa;
  private $ficha;

  public function __construct(Pessoa $pessoa, Ficha $ficha)
  {
    $this->pessoa = $pessoa;
    $this->ficha = $ficha;
  }

  public function index()
  {
    $pessoa = $this->pessoa->all();
    $ficha = $this->ficha->all();
      $os = rand();
      $data = date('d/m/Y');
      $pcdp = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9));
    //$pessoas = Pessoa::all();
    return view('ficha.edit', compact('pessoa'), ['os' => $os, 'data' => $data, 'pcdp'=>$pcdp]);

}
