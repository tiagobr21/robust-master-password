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
  <title> Cadastrar | Senha Robusta </title>
  <link rel="stylesheet" href="./_css/bootstrap.min.css" />
  <link rel="stylesheet" href="./_css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>

<body class="bg-light">
  <div class="row" style="margin-top: 100px;">
    <div class="col"></div>

    <div class="col-5">
      <div class="card">
        <div class="card-body p-5">
          <form action="./rotinas/cadastrar-usuario.php" method="POST">
            <div class="mb-3">
              <label for="nome" class="form-label"> Nome </label>
              <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label"> E-mail </label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
              <label for="senha" class="form-label"> Senha </label>
              <input type="password" class="form-control" id="senha" name="senha" minlength="8" maxlength="8" onkeyup="validarSenha()" required>
            </div>

            <div class="mb-3">
              <input type="submit" class="btn btn-primary" id="btnCadastrar" value="Cadastrar">
            </div>

            <label class="form-check-label"> Possui uma conta? <a href="./index.php"> Faça login. </a> </label>
          </form>
        </div>
      </div>

      <div style="margin-top: 30px;">
        <div class="mb-1" id="minimo"></div>
        <div class="mb-1" id="maximo"></div>
        <div class="mb-1" id="minusculo"></div>
        <div class="mb-1" id="maiusculo"></div>
      </div>
    </div>

    <div class="col"></div>
  </div>

  <script src="./_js/bootstrap.min.js"></script>
  <script src="./_js/script.js"></script>
</body>

</html>