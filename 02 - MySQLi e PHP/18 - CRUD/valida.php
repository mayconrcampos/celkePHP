<?php
session_start();
include_once("db.php");

if(isset($_POST['usuario']) && isset($_POST['senha'])){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $queryUserlogin = mysqli_query($conn, "SELECT usuario, senha FROM userlogin");

    $log = false;
    while($login = mysqli_fetch_assoc($queryUserlogin)){
        if($usuario == $login['usuario'] and $senha == $login['senha']){
            $log = true;
            break;  
        }
    }
    if($log){
        $_SESSION['logado'] = true;
        $_SESSION['msgLogado'] = "Bem vindo! ".$usuario."";
        header("Location: cadastrar.php");
    }
    else{
        $_SESSION['logado'] = false;
        $_SESSION['errologin'] = "Usuário ou senha incorretos.";
        header("Location: index.php");
    }
}else{
    $_SESSION['errologin'] = "Usuário ou Senha inválido";
    header("Location: index.php");
}
