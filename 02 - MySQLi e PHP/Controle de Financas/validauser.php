<?php
session_start();
include_once("db.php");

if(isset($_POST['usuario']) and isset($_POST['senha'])){
    // Recebendo usuario e senha: tratando o usuario contra caracteres de escape e a senha recebendo criptografia.
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $senha = md5(mysqli_real_escape_string($conn, $_POST['senha']));

    // Verificando existência do usuário
    $existeUser = mysqli_query($conn, "SELECT usuario FROM userlogin WHERE usuario='$usuario'");
    $existeResultado = mysqli_fetch_assoc($existeUser);

    if(empty($existeResultado)){
        $_SESSION['naoexiste'] = "Usuário não cadastrado.";
        header("Location: index.php");
    }else{
        // Fazendo query no banco de dados.
        $loginUser = mysqli_query($conn, "SELECT id, usuario, senha FROM userlogin WHERE usuario='$usuario' and senha='$senha'");
        $loginResultado = mysqli_fetch_assoc($loginUser);

        if(empty($loginResultado)){
            $_SESSION['errologin'] = "Senha Incorreta";
            header("Location: index.php");
        }else{
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = $usuario;
            $_SESSION['id'] = $loginResultado['id'];
            header("Location: index1.php");
        }
    }

}else{
    $_SESSION['errologin'] = "Erro ao fazer login.";
    header("Location: index.php");
}