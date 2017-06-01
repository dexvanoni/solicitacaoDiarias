<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/login.css">
  <link href="/bst/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row" id="pwd-container">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <section class="login-form">
          <form method="post" action="#" role="login">
            <center><h3>Ordem de Serviço de Solicitação de Diárias</h1></center>
            <img src="/bst/brasao.png" class="img-responsive" alt="" height="90em" width="90em" />
            <input type="login" name="email" placeholder="Login" required class="form-control input-lg" value="" />
            <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
            <div class="pwstrength_viewport_progress"></div>
            <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Entrar</button>
          </form>
        </section>
      </div>
  </div>
  <script src="/js/login.js" charset="utf-8"></script>
  <script src="/bst/js/jquery.min.js"></script>
  <script src="/bst/js/bootstrap.min.js"></script>
</body>
</html>
