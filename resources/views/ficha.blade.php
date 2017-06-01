@extends('template')

@section('title')
  O.S - Solicitação de Diárias
@endsection

@section('topo')
  <div class="row">
    <div class="col-md-4">
      <img src="/bst/brasao.png" class="img-responsive" alt="" height="70em" width="70em" />
    </div>
    <div class="col-md-4">
      <center>
        <h4>COMANDO DA AERONÁUTICA</h4>
        <p>GRUPAMENTO DE APOIO DE CAMPO GRANDE</p>
        <p>Solicitação nº SC {{ $os }}</p>
      </center>
    </div>
    <div class="col-md-4">
      <center>
        <h5>Data: {{ $data }}</h5>
        <p>Nº PCDP: {{ $pcdp }}</p>
      </center>
    </div>
  </div>
@endsection

@section('sec1')
  <div class="row">
    <h5><b>1 - Determinação:</b></h5>
  </div>
  <div class="row">
    <h6>Determino ao militar/servidor civil abaixo que realize o serviço especificado, fora da sede desta OM, nas condições seguintes:</h6>
  </div>
  <div class="row">
    <div class="col-md-7">
      <input type="text" id="pnome" name="pnome" class="form-control input-sm" placeholder="POSTO/GRAD/NOME:">
    </div>
  <div class="col-md-2">
    <input type="text" id="saram" name="saram" class="form-control input-sm" placeholder="SARAM:">
  </div>
  <div class="col-md-3">
    <input type="text" id="cpf" name="cpf" class="form-control input-sm" placeholder="CPF:">
  </div>
</div>
@endsection
