@extends('template')

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
