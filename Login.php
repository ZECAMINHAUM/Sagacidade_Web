<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet"> 

    <!--CSS-->
    <link rel="stylesheet" href="estilos/style_login.css">

    <title>Sagacidade</title>
  </head>
  <body>
    <div class="container">
        <form action="" method="post" accept-charset="uft-8" class="form-login" action="auth.php">
            <img src="imagens/logo.png" class="center-block">
            <label for="text" class="sr-only">Usuário</label>
            <input type="text" id="inputUser" name = "user" class="form-control" placeholder="Usuário" required autofocus>
            <label for="inputPassword" class="sr-only">Usuário</label>
            <input type="password" id="inputPassword" name = "pass" class="form-control" placeholder="Senha" required autofocus>

            <div class="checkbox">
              <input type="checkbox" value="esqueci">
              Esqueci a Senha
            </div>
            <button id="bt-entrar" type="submit" class="btn btn-lg btn-primary btn-block ">Entrar</button>

        </form>
    </div>


    <?php
      include('auth.php');
    ?>
   
  </body>
</html>