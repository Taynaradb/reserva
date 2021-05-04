<?php

$server = "sql204.epizy.com";
$user = "epiz_28517942";
$senha = "sQl93mdqKpU3S";
$banco = "epiz_28517942_hospedagem";

$conn = mysqli_connect($server, $user, $senha, $banco);

if(!$conn){
    die("Conexão falhou: " . mysqli_connect_error());
}
?>