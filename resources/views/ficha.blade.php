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

  <!-- quarta linha da tabela-->
  <div class="row">
    <div class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">14</span>
        <input type="text" id="servico" name="servico" class="form-control input-sm" placeholder="SERVIÇO A REALIZAR:">
      </div>
    </div>
  </div>
  <p></p>

  <!-- quinta linha da tabela-->
  <div class="row">
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">15</span>
        <input type="text" id="documentos" name="documentos" class="form-control input-sm" placeholder="DOCUMENTOS QUE ORIGINARAM A MISSÃO:">
      </div>
    </div>
    <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">16</span>
        <input type="text" id="ne" name="ne" class="form-control input-sm" placeholder="NE:">
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">17</span>
        <select class="form-control input-sm" name="em_proveito" id="em_proveito">
          <option value="" hidden disabled selected>MISSÃO EM PROVEITO:</option>
          <option value="União">UNIÃO</option>
          <option value="Própria">PRÓPRIA</option>
        </select>
      </div>
    </div>
  </div>
  <p></p>

  <!-- sexta linha da tabela-->
  <div class="row">
    <div class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">18</span>
        <select class="form-control input-sm" name="custeio" id="custeio">
          <option value="" hidden disabled selected>CUSTEIO:</option>
          <option value="Sem Custo">SEM CUSTO</option>
          <option value="Diária">DIÁRIA</option>
          <option value="Comissionamento">COMISSIONAMENTO</option>
        </select>
      </div>
    </div>
  </div>
  <p></p>

  <!-- SÉTIMA linha da tabela-->
  <div class="row">
    <div class="col-md-5">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">19</span>
        <input type="text" id="local_servico" name="local_servico" class="form-control input-sm" placeholder="LOCAL DE REALIZAÇÃO DO SERVIÇO (Cidade):">
      </div>
    </div>
    <div class="col-md-7">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">20</span>
        <input type="text" id="local_pernoite" name="local_pernoite" class="form-control input-sm" placeholder="LOCAL(IS) DE PERNOITE:">
      </div>
    </div>
    <p></p>
    <!-- datas e horas SÉTIMA linha da tabela-->
  </div>
  <p></p>
  <div class="row">
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">21 - AFASTAMENTO DE SEDE:</span>
        <input type="date" id="data_afastamento_inicio" name="data_afastamento_inicio" class="form-control input-sm" placeholder="Data Início:">
        <input type="time" id="hora_afastamento_inicio" name="hora_afastamento_inicio" class="form-control input-sm" placeholder="Hora:">
        <input type="date" id="data_afastamento_retorno" name="data_afastamento_retorno" class="form-control input-sm" placeholder="Data Retorno:">
        <input type="time" id="hora_afastamento_retorno" name="hora_afastamento_retorno" class="form-control input-sm" placeholder="Hora:">
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">22</span>
        <select class="form-control input-sm" name="adicional_deslocamento" id="adicional_deslocamento">
          <option title="(§1º, do Art.20, do Dec. 4.307/2002, alterado pelo Dec.6.907/2009)" value="" hidden disabled selected>ADICIONAL DE DESLOCAMENTO:</option>
          <option value="Sim">ADICIONAL DE DESLOCAMENTO: SIM</option>
          <option value="Não">ADICIONAL DE DESLOCAMENTO: NÃO</option>
        </select>
        <select class="form-control input-sm" name="total_acrescimos" id="total_acrescimos">
          <option value="" hidden disabled selected>TOTAL DE ACRÉSCIMOS:</option>
          <option value="Diária Completa">DIÁRIA COMPLETA</option>
          <option value="1/2 Diária">1/2 DIÁRIA</option>
        </select>
      </div>
      <div class="input-group">
        <span style="font-size: 10px" class="input-group-addon" id="basic-addon1">23 - VALOR TOTAL (Diária + Adc. Desl.)</span>
        <input type="text" id="valor_total" name="valor_total" class="form-control input-sm" placeholder="R$">
        <input type="checkbox" id="ck_valor_total" value="Sem Custo">&nbsp&nbsp&nbsp&nbspSEM CUSTO
      </div>
    </div>
  </div>
  <p></p>
@endsection
