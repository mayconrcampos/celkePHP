<?php

session_start();
include_once("db.php");

$usuario = $_GET['usuario'];
$status = 1;
$statusINATIVO = 0;

$ativaUser = mysqli_query($conn, "SELECT * FROM userlogin WHERE usuario='$usuario' AND status='$statusINATIVO'");
$resultAtivaUser = mysqli_fetch_assoc($ativaUser);

if(empty($resultAtivaUser)){
    // se cair aqui, já foi ativada
    $_SESSION['ativada'] = "Conta já está ativada! Favor somente faça o login!";
    header("Location: index.php");
}else{
    $updateUser = mysqli_query($conn, "UPDATE userlogin SET status='$status' WHERE usuario='$usuario'");

    if(mysqli_affected_rows($conn)){
        $_SESSION['sucesso'] = "Cadastro ativado com sucesso!";
        header("Location: index.php");

    }else{
        $_SESSION['sucesso'] = "Erro ao ativar conta.";
        header("Location: index.php");
    }

}// esqueci de puxar a variavel session['ativada'] pro index....

 

