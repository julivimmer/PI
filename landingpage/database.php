<?php
    $servidor = "localhost";
    $database = "planilha";
    $user = "root";
    $senha = "";

    $conexao = mysqli_connect($servidor, $user, $senha, $database);

    if(!$conexao){
        die("Conexão falhou" .mysqli_connect_error());
    }
?>