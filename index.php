<?php

session_start();
require './rotinas/conexao.php';

if (isset($_SESSION['logado']['email']) and isset($_SESSION['logado']['senha'])) {

  header('Location: ./dash/index.php');
  exit;
}
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Login | Senha Robusta </title>
  <link rel="stylesheet" href="./_css/bootstrap.min.css" />
  <link rel="stylesheet" href="./_css/style.css" />
</head>

<body class="bg-light">
  <div class="row"  style="margin-top: 100px;">
    <div class="col"></div>

    <div class="col-5">
      <div class="card">
        <div class="card-body p-5">
          <form action="./rotinas/autenticacao.php" method="POST">
            
           <div class="mb-3">
              <label for="email" class="form-label"> E-mail </label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
              <label for="senha" class="form-label"> Senha </label>
              <input type="password" class="form-control" id="senha" name="senha" onkeyup="validarSenha()" required>
            </div>

            <div class="mb-3">
              <input type="submit" class="btn btn-primary" value="Logar">
            </div>

            <label class="form-check-label"> Não possui uma conta? <a href="./cadastrar.php"> Cadastre-se. </a> </label>
          </form>
        </div>
      </div>
    </div>

    <div class="col"></div>
  </div>

  <script src="./_js/bootstrap.min.js"></script>
  <script src="./_js/script.js"></script>
</body>

</html>