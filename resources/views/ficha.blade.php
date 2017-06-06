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
    <h5><b>1 - DETERMINAÇÃO:</b></h5>
  </div>
  <div class="row">
    <h6>Determino ao militar/servidor civil abaixo que realize o serviço especificado, fora da sede desta OM, nas condições seguintes:</h6>
  </div>
  <!-- primeira linha da tabela-->
  <div class="row">
    <div title="Digite seu POSTO/GRAD e NOME COMPLETO" class="col-md-7">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">2</span>
        <input type="text" id="pnome" name="pnome" class="form-control input-sm" placeholder="POSTO/GRAD/NOME:">
      </div>
    </div>
    <div title="Digite seu SARAM" class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">3</span>
        <input type="text" id="saram" name="saram" class="form-control input-sm" placeholder="SARAM:">
      </div>
    </div>
    <div title="Digite seu CPF" class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">4</span>
        <input type="text" id="cpf" name="cpf" class="form-control input-sm" placeholder="CPF:">
      </div>
    </div>
  </div>
  <p></p>
  <!-- segunda linha da tabela-->
  <div class="row">
    <div title="Digite o número do seu banco" class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">5</span>
        <input type="text" id="banco" name="banco" class="form-control input-sm" placeholder="BANCO:">
      </div>
    </div>
    <div title="Digite o número de sua agência" class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">6</span>
        <input type="text" id="agencia" name="agencia" class="form-control input-sm" placeholder="AGÊNCIA:">
      </div>
    </div>
    <div title="Digite o número de sua conta" class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">7</span>
        <input type="text" id="conta" name="conta" class="form-control input-sm" placeholder="CONTA:">
      </div>
    </div>
    <div title="Digite seu email" class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">8</span>
        <input type="text" id="email" name="email" class="form-control input-sm" placeholder="EMAIL:">
      </div>
    </div>
    <div title="Digite sua data de nascimento" class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">9</span>
        <input type="text" id="datanascimento" name="datanascimento" class="form-control input-sm" placeholder="DATA NASCIMENTO:">
      </div>
    </div>
  </div>
  <p></p>
  <!-- terceira linha da tabela-->
  <div class="row">
    <div title="Campo automático!" class="col-md-5">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">10</span>
        <input style="font-size: 11px" type="text" id="enquadramento" name="enquadramento" class="form-control input-sm" value="Art. 18, do Dec. 4.307, de 19.jul.2002, e Portaria nº 1348/GC4, de 3 set 2015." readonly>
      </div>
    </div>
    <div title="Digite sua Identidade" class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">11</span>
        <input type="text" id="identidade" name="identidade" class="form-control input-sm" placeholder="IDENTIDADE:">
      </div>
    </div>
    <div title="Escolha sua OM" class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">12</span>
        <select type="text" id="om" name="om" class="form-control input-sm">
          <option value="GAP-CG">GAP-CG</option>
          <option value="ALA5">NuALA 5</option>
        </select>
      </div>
    </div>
    <div title="Digite seu telefone para contato" class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">13</span>
        <input type="text" id="telefone" name="telefone" class="form-control input-sm" placeholder="TELEFONE:">
      </div>
    </div>
  </div>
  <p></p>

  <!-- quarta linha da tabela-->
  <div class="row">
    <div title="Informe o serviço que será realizado" class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">14</span>
        <input type="text" id="servico" name="servico" class="form-control input-sm" placeholder="SERVIÇO A REALIZAR:">
      </div>
    </div>
  </div>
  <p></p>

  <!-- quinta linha da tabela-->
  <div class="row">
    <div title="Informe os documentos que originam a missão" class="col-md-6">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">15</span>
        <input type="text" id="documentos" name="documentos" class="form-control input-sm" placeholder="DOCUMENTOS QUE ORIGINARAM A MISSÃO:">
      </div>
    </div>
    <div title="Informe o NE" class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">16</span>
        <input type="text" id="ne" name="ne" class="form-control input-sm" placeholder="NE:">
      </div>
    </div>
    <div title="Informe o preito da missão" class="col-md-4">
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
    <div title="Informe a modalidade de custeio" class="col-md-12">
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
    <div title="Informe a cidade de realização do serviço" class="col-md-5">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">19</span>
        <input type="text" id="local_servico" name="local_servico" class="form-control input-sm" placeholder="LOCAL DE REALIZAÇÃO DO SERVIÇO (Cidade):">
      </div>
    </div>
    <div title="Informe os locais de pernoite" class="col-md-7">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">20</span>
        <input type="text" id="local_pernoite" name="local_pernoite" class="form-control input-sm" placeholder="LOCAL(IS) DE PERNOITE:">
      </div>
    </div>
    <p></p>
  </div>
  <p></p>
  <!-- datas e horas SÉTIMA linha da tabela-->
  <div class="row">
    <div title="Informe a data e hora de início e retorno do afastamento da sede" class="col-md-4">
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
        <select title="Informe se houve ou não adicional de deslocamento" class="form-control input-sm" name="adicional_deslocamento" id="adicional_deslocamento">
          <option title="(§1º, do Art.20, do Dec. 4.307/2002, alterado pelo Dec.6.907/2009)" value="" hidden disabled selected>ADICIONAL DE DESLOCAMENTO:</option>
          <option value="Sim">ADICIONAL DE DESLOCAMENTO: SIM</option>
          <option value="Não">ADICIONAL DE DESLOCAMENTO: NÃO</option>
        </select>
        <select title="Informe se Diária completa ou 1/2 diária" class="form-control input-sm" name="total_acrescimos" id="total_acrescimos">
          <option value="" hidden disabled selected>TOTAL DE ACRÉSCIMOS:</option>
          <option value="Diária Completa">DIÁRIA COMPLETA</option>
          <option value="1/2 Diária">1/2 DIÁRIA</option>
        </select>
      </div>
      <div style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group">
        <span style="border: 1px solid #D3D3D3; border-radius:3px; font-size: 10px" class="input-group-addon" id="basic-addon1">23 - VALOR TOTAL (Diária + Adc. Desl.)</span>
        <input title="Informe o valor total de diárias + adicionais de deslocamento" type="text" id="valor_total" name="valor_total" class="form-control input-sm" placeholder="R$">
        &nbsp&nbsp<input type="checkbox" id="ck_valor_total" title="Não havendo custos, favor marcar esta caixa!" value="Sem Custo">&nbsp&nbsp&nbsp&nbspSEM CUSTO
      </div>
    </div>
    <!-- oitava linha da tabela-->
    <div class="col-md-4">
      <div class="input-group">
        <span title="Informe se faz jus a auxílio transporte" style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">24 - AUXÍLIO TRANSPORTE:&nbsp</span>
        <div style="border: 1px solid #D3D3D3; border-radius:3px" class="radio">
          &nbsp&nbsp<label><input type="radio" name="rd_auxtransporte" id="rd_auxtransporte_sim" value="Sim">SIM</label><br>
          &nbsp&nbsp<label><input type="radio" name="rd_auxtransporte" id="rd_auxtransporte_nao" value="Não">NÃO</label>
        </div>
      </div>
      <div class="input-group">
        <span title="Informe se faz jus a auxílio alimentação" style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">25 - AUXÍLIO ALIMENTAÇÃO:</span>
        <div style="border: 1px solid #D3D3D3; border-radius:3px" class="radio">
          &nbsp&nbsp<label><input type="radio" name="rd_auxalimentacao" id="rd_auxalimentacao_sim" value="Sim">SIM</label><br>
          &nbsp&nbsp<label><input type="radio" name="rd_auxalimentacao" id="rd_auxalimentacao_nao" value="Não">NÃO</label>
        </div>
      </div>
    </div>
  </div>
  <p></p>
  <!-- nona linha da tabela-->
  <div class="row">
    <div title="JUSTIFICATIVA DA MISSÃO EM FINAL DE SEMANA / FERIADO: (§ 2º, Art. 5º, do Dec. 5.992/2006)" class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">26</span>
        <textarea id="fim_semana" name="fim_semana" class='form-control' placeholder='JUSTIFICATIVA DA MISSÃO EM FINAL DE SEMANA / FERIADO: (§ 2º, Art. 5º, do Dec. 5.992/2006)'></textarea>
      </div>
    </div>
  </div>
  <p></p>
  <!-- decima linha da tabela-->
  <div class="row">
    <div title="JUSTIFICATIVA DA CONVENIÊNCIA DO SERVIÇO: (Inciso 2.1.3, da ICA 177-42)" class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">27</span>
        <textarea id="conveniencia_servico" name="conveniencia_servico" class='form-control' placeholder='JUSTIFICATIVA DA CONVENIÊNCIA DO SERVIÇO: (Inciso 2.1.3, da ICA 177-42)'></textarea>
      </div>
    </div>
  </div>
  <p></p>
  <!-- decima primeira linha da tabela-->
  <div class="row">
    <div title="JUSTIFICATIVA: (Art 1º, da Portaria 1348/GC4/2015)" class="col-md-12">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">27</span>
        <textarea id="justificativa" name="justificativa" class='form-control' placeholder='JUSTIFICATIVA: (Art 1º, da Portaria 1348/GC4/2015)'></textarea>
      </div>
    </div>
  </div>
  <p></p>
@endsection
<!-- decima segunda linha da tabela- ASSINATURAS
Se SARAM do GAP-CG a assinatura é do CHEFE DIVISÃO e CHEFE GAP-CG e se ALA5 a assinatura
é do CMT ESQUADRÃO/CHEM e COMANDANTE DA BACG (NÚCLEO DE ALA 5)
-->
@section('assGAP')
<div class="row">
  <div class="col-md-6">
    <div class="input-group">
      <span style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">29 - PROPONHO:</span>
      <br><br> <center><p> ________________________________________ </p></center>
      <center><p>CHEFE DE DIVISÃO</p></center>
    </div>
  </div>
  <div class="col-md-6">
    <div class="input-group">
      <span style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">30 - AUTORIZO:</span>
      <br><br> <center><p> ________________________________________ </p></center>
      <center><p>CHEFE DO GAP-CG</p></center>
    </div>
  </div>
</div>
@endsection

@section('assALA')
  <div class="row">
    <div class="col-md-6">
      <div class="input-group">
        <span style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">29 - PROPONHO:</span>
        <br><br> <center><p> ________________________________________ </p></center>
        <center><p>CMT ESQUADRÃO/CHEM</p></center>
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group">
        <span style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">30 - AUTORIZO:</span>
        <br><br> <center><p> ________________________________________ </p></center>
        <center><p>COMANDANTE DA BACG (NÚCLEO DE ALA 5)</p></center>
      </div>
    </div>
  </div>
@endsection
<!-- ##########################  SEGUNDA SEÇÃO DA FICHA #############################################-->
@section('sec2')
  <!-- decima TERCEIRA linha da tabela-->
  <div class="row">
    <h5><b>II - <sup>31</sup>FICHA DE APRESENTAÇÃO DE CONCESSÃO DE DIÁRIAS (FACD):</b></h5>
  </div>
  <p></p>
@endsection
