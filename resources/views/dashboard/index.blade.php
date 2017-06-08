<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Meu Dashboard</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/bst/css/bootstrap.min.css" rel="stylesheet">
  <script src="/bst/js/jquery.min.js"></script>
</head>
<body>
  <div class="jumbotron">
    <div class="col-md-offset-2">
      <h2>Meu dashboard</h2>
      <p>Todas as opções do sistema de Ordens de Serviço para solicitação de diárias você encontrará aqui!</p>
      <p><a data-toggle="collapse" data-target="#options" class="btn btn-default" role="button">Minhas Opções</a></p>
    </div>
  </div>
  <div class="collapse" id="options">
    <div class="col-xs-offset-1">
      <button type="button" name="ver" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Ver
      </button>
      <button type="button" name="criar" class="btn btn-success btn-lg">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Criar
      </button>
      <button type="button" name="editar" class="btn btn-primary btn-lg">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar
      </button>
      <button type="button" name="excluir" class="btn btn-danger btn-lg">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Excluir
      </button>
    </div>
  </div>
  <hr>
  <div class="container">
    <center><img src="/bst/brasao.png" class="img-responsive" alt="" height="150em" width="150em" /></center>
    <center><h2>@TIC</h2></center>
  </div>
  <script src="/bst/js/bootstrap.min.js"></script>
</body>
</html>
