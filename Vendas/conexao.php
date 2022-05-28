<?php 
//dados para acesso ao banco de dados
    $servidor= "localhost";
    $banco = "bdVenda";
    $usuario = "root";
    $senha = "SIM";

    $pdo = new PDO("mysql:host = $servidor; dbname= $banco", $usuario, $senha);
?>