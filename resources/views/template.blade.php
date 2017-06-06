<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/bst/css/bootstrap.min.css" rel="stylesheet">
  <script src="/bst/js/jquery.min.js"></script>
</head>
<body>
  <!--Nav Bar-->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <i class="navbar-brand">Solicitação de Diárias</i>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Procurar OS">
          </div>
          <button type="submit" class="btn btn-default">Procurar</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://10.152.16.203/gapcg">GAP-CG</a></li>
          <li><a href="http://10.152.16.203/ala5">ALA5</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container">
    <!-- TESTE DE UNIDADE PARA RETORNO DOS CAMPOS PARA ASSINATURA-->
    @php
    $unidade = "ALA5"
    @endphp

    @yield('topo')
    <hr>
    <form class="" action="index.html" method="post">
      @yield('sec1')
      @if ($unidade == "GAP-CG")
        @yield('assGAP')
      @else
        @yield('assALA')
      @endif
      <hr>
      @yield('sec2')
      <hr>
      @yield('sec3')
      <hr>
    </form>
  </div>
  <script type="text/javascript">
  $( document ).ready(function() {
    $('#camposExtras').hide();

    $("#alteracao_servico_s").click(function(){
      $('#camposExtras').show();
    });
    $("#alteracao_servico_n").click(function(){
      $('#camposExtras').hide();
    });
  });
  </script>
  <!-- CALCULA OS IPUTS DE VALOR E QUANTIDADE DA TABELA DE CÔMPUTO DE DIÁRIAS-->
  <!-- PRIMEIRA LINHA -->
  <script type="text/javascript">
  $(document).ready( function() {
    $('#a, #a1').blur(function(){
      var valor 		= $('#a').val();
      var qt = $('#a1').val();
      if(valor == "") valor = 0;
      if(qt == "") qt = 0;
      var resultado 	= parseFloat(valor) * parseFloat(qt);
      $('#resultado1').val(resultado);
    })
  });
  </script>
  <!-- SEGUNDA LINHA -->
  <script type="text/javascript">
  $(document).ready( function() {
    $('#b, #b1').blur(function(){
      var valor 		= $('#b').val();
      var qt = $('#b1').val();
      if(valor == "") valor = 0;
      if(qt == "") qt = 0;
      var resultado 	= parseFloat(valor) * parseFloat(qt);
      $('#resultado2').val(resultado);
    })
  });
  </script>
  <!-- TERCEIRA LINHA -->
  <script type="text/javascript">
  $(document).ready( function() {
    $('#c, #c1').blur(function(){
      var valor 		= $('#c').val();
      var qt = $('#c1').val();
      if(valor == "") valor = 0;
      if(qt == "") qt = 0;
      var resultado 	= parseFloat(valor) * parseFloat(qt);
      $('#resultado3').val(resultado);
    })
  });
  </script>
  <!-- QUARTA LINHA -->
  <script type="text/javascript">
  $(document).ready( function() {
    $('#d, #d1').blur(function(){
      var valor 		= $('#d').val();
      var qt = $('#d1').val();
      if(valor == "") valor = 0;
      if(qt == "") qt = 0;
      var resultado 	= parseFloat(valor) * parseFloat(qt);
      $('#resultado4').val(resultado);
    })
  });
  </script>
  <!--TERMINA CÁLCULO DA TABELA-->
  <script src="/bst/js/bootstrap.min.js"></script>
</body>
</html>
