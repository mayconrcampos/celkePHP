<?php

$servidor = "localhost";
$usuario = "root";
$senha = "5DaJ10.,Xw,8";
$nomedb = "nomes";

// Criando conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $nomedb);

if(!$conn){
    die("Falha na conexão!".mysqli_connect_error());
}else{
    echo "Conexão realizada com sucesso!";
}
