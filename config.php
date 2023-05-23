<?php

    $usuario = 'root';
    $senha = '1234';
    $database = 'db_tech';
    $host = 'localhost';

    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->error) {
        die("Falha ao conectar ao banco de dados: " . $mysqli->error);
    }

?>