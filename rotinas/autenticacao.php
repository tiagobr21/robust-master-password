<?php

session_start();
require './../rotinas/conexao.php';

if (isset($_SESSION['logado']['email']) and isset($_SESSION['logado']['senha'])) {
    header('Location: ./../dash/index.php');
    exit;
}

$email = $_POST['email'];
$senha = $_POST['senha'];

if (empty($email) || empty($senha)) {
    echo "<script> alert('Preencha todos os campos!'); window.location.href='./../index.htmlp'; </script>";
    exit();
} else {
    $tentativaLogin = getConn()->prepare("SELECT * FROM usuarios WHERE email='{$email}' AND senha='{$senha}'");
    $tentativaLogin->execute();
    $busca = $tentativaLogin->rowCount();
    $linha = $tentativaLogin->fetchObject();

    if ($busca > 0) {
        $logado = array('id' => $linha->id, 'nome' => $linha->nome, 'email' => $linha->email, 'senha' => $linha->senha);
        $_SESSION['logado'] = $logado;

        header('Location: ./../dash/index.php');
        exit;
    } else {
        echo "<script> alert('E-mail e/ou senha incorretos!'); window.location.href='./../index.php'; </script>";
        exit();
    }
}
