<?php

session_start();
include_once("db.php");

$usuario = $_GET['usuario'];
$status = 1;
$updateUser = mysqli_query($conn, "UPDATE userlogin SET status='$status' WHERE usuario='$usuario'");

if(mysqli_affected_rows($conn)){
    $_SESSION['sucesso'] = "Cadastro ativado com sucesso!";
    header("Location: index.php");

}else{
    $_SESSION['sucesso'] = "Erro ao ativar conta.";
    header("Location: index.php");
}

