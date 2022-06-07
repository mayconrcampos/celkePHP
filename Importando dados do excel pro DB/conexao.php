<?php

// Credenciais do DB
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomedb = "pessoas";

// Criando conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $nomedb);

if(!$conn){
    die("Falha na conexão!".mysqli_connect_error());
}else{
    echo "Conexão realizada com sucesso!";
}
