<?php

$server = "localhost";
$user = "root";
$senha = "";
$banco = "hospedagem";

$conn = mysqli_connect($server, $user, $senha, $banco);

if(!$conn){
    die("Conexão falhou: " . mysqli_connect_error());
}
?>