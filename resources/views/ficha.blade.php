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
        <p>Solicitação nº <sup>1</sup>SC {{ $os }}</p>
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
  <!-- primeira linha da tabela-->
  <div class="row">
    <div class="col-md-7">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">2</span>
        <input type="text" id="pnome" name="pnome" class="form-control input-sm" placeholder="POSTO/GRAD/NOME:">
      </div>
    </div>
    <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">3</span>
        <input type="text" id="saram" name="saram" class="form-control input-sm" placeholder="SARAM:">
      </div>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">4</span>
        <input type="text" id="cpf" name="cpf" class="form-control input-sm" placeholder="CPF:">
      </div>
    </div>
  </div>
  <p></p>
  <!-- segunda linha da tabela-->
  <div class="row">
    <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">5</span>
        <input type="text" id="banco" name="banco" class="form-control input-sm" placeholder="BANCO:">
      </div>
    </div>
    <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">6</span>
        <input type="text" id="agencia" name="agencia" class="form-control input-sm" placeholder="AGÊNCIA:">
      </div>
    </div>
    <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">7</span>
        <input type="text" id="conta" name="conta" class="form-control input-sm" placeholder="CONTA:">
      </div>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">8</span>
        <input type="text" id="email" name="email" class="form-control input-sm" placeholder="EMAIL:">
      </div>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">9</span>
        <input type="text" id="datanascimento" name="datanascimento" class="form-control input-sm" placeholder="DATA NASCIMENTO:">
      </div>
    </div>
  </div>
  <p></p>
  <!-- terceira linha da tabela-->
  <div class="row">
    <div class="col-md-5">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">10</span>
        <input style="font-size: 11px" type="text" id="enquadramento" name="enquadramento" class="form-control input-sm" value="Art. 18, do Dec. 4.307, de 19.jul.2002, e Portaria nº 1348/GC4, de 3 set 2015." readonly>
      </div>
    </div>
    <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">11</span>
        <input type="text" id="identidade" name="identidade" class="form-control input-sm" placeholder="IDENTIDADE:">
      </div>
    </div>
    <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">12</span>
        <input type="text" id="om" name="om" class="form-control input-sm" placeholder="OM:">
      </div>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">13</span>
        <input type="text" id="telefone" name="telefone" class="form-control input-sm" placeholder="TELEFONE:">
      </div>
    </div>
  </div>
  <p></p>

@endsection
