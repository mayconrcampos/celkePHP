<?php

// Credenciais do banco
$servidor = "localhost";
$usuario = "root";
$senha = "5DaJ10.,Xw,8";
$dbnome = "cadastro";

// Criando a conexao
$conn = mysqli_connect($servidor,$usuario, $senha, $dbnome);

if($conn){
    echo "Conectado ao banco de dados";

}else{
    die("Erro ao conectar no banco de dados".mysqli_connect_error());
}