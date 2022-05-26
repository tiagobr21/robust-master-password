<?php

function getConn()
{
    try {
        $usuario = "root";
        $senha = "";

        $conn = new PDO('mysql:host=localhost:3306;dbname=senharobusta', $usuario, $senha);

        $conn->query("SET character_set_connection=utf8");
        $conn->query("SET character_set_client=utf8");
        $conn->query("SET character_set_results=utf8");
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    return $conn;
}
