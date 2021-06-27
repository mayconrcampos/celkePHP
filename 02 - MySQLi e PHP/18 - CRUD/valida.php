<?php
session_start();
include_once("db.php");

if(isset($_POST['usuario']) && isset($_POST['senha'])){

    // mysqli_real_escape_string - Escapar de caracteres especiais, como aspas, prevenindo ataques de SQL Injection.
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
     // Criptografando senha.
    $senha = md5(mysqli_real_escape_string($conn, $_POST['senha']));

    // Verificar se usuário existe no DB
    $existeUser = mysqli_query($conn, "SELECT usuario FROM userlogin WHERE usuario='$usuario'");
    $existeResultado = mysqli_fetch_assoc($existeUser);

    if(empty($existeResultado)){
        $_SESSION['naoexiste'] = "Usuário não cadastrado. Favor efetuar o cadastro.";
        header("Location: index.php");

    }else{
        $queryUserlogin = mysqli_query($conn, "SELECT usuario, senha FROM userlogin WHERE usuario='$usuario' AND senha='$senha'");
        $resultado = mysqli_fetch_assoc($queryUserlogin);
        
        if(empty($resultado)){
            $_SESSION['logado'] = false;
            $_SESSION['errologin'] = "Usuário ou senha incorretos.";
            header("Location: index.php");
        }else{
            $_SESSION['logado'] = true;
            $_SESSION['msgLogado'] = "Bem vindo! ".$usuario."";
            header("Location: cadastrar.php");
        }
    }
    
}else{
    $_SESSION['errologin'] = "Usuário ou Senha inválido";
    header("Location: index.php");
}
