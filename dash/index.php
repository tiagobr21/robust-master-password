<?php

session_start();
require './rotinas/conexao.php';

if (!isset($_SESSION['logado']['email']) and !isset($_SESSION['logado']['senha'])) {
    unset($_SESSION['logado']['email']);
    unset($_SESSION['logado']['password']);

    header('Location: ./../index.php');
    exit;
}
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Dash | Home </title>
    </head>

    <body>
        <h1> Logado </h1>
        <a href="./rotinas/logout.php"> Sair </a>

        <script src="./_js/bootstrap.min.js"></script>
        <script src="./_js/script.js"></script>
    </body>
</html>