<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoasController extends Controller
{
  private $pessoa;

  public function __construct(Pessoa $pessoa)
  {
    $this->pessoa = $pessoa;

  }

  public function index()
  {

    $pessoa = $this->pessoa->all();

    $pessoa = $this->pessoa->all();
      $os = rand();
      $data = date('d/m/Y');
      $pcdp = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9));
    //$pessoas = Pessoa::all();
    return view('ficha.edit', compact('pessoa'), ['os' => $os, 'data' => $data, 'pcdp'=>$pcdp]);

}
