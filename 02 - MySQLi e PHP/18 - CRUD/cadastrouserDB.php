<?php
session_start();
include("email.php");
include_once("db.php");


if(isset($_POST['useremail']) and isset($_POST['usersenha']) and isset($_POST['repitausersenha'])){
    if($_POST['usersenha'] == $_POST['repitausersenha']){
        // Proteção contra caracteres de escape para evitar SQL Injection.
        $usuario = mysqli_real_escape_string($conn, $_POST['useremail']);
        
        // Verificar se usuário já existe na base de dados
        $queryUser = mysqli_query($conn, "SELECT usuario FROM userlogin WHERE usuario='$usuario'");
        $linha = mysqli_fetch_assoc($queryUser);
        
        if(empty($linha)){ // Se usuário não existir na base de dados.

            // Tratando usuario 
            $usuario = mysqli_real_escape_string($conn, $_POST['useremail']);
            $senha = md5(mysqli_real_escape_string($conn, $_POST['usersenha']));
            $status = 0;
         
            $insertUsers = mysqli_query($conn, "INSERT INTO userlogin (usuario, senha, status) VALUES ('$usuario', '$senha', '$status')");

            //sendEmail($usuario);
            if(mysqli_affected_rows($conn)){
                sendEmail($usuario);

                $_SESSION['sucesso'] = "Usuário cadastrado com Sucesso!";
                header("Location: index.php");
            }else{
                $_SESSION['sucesso'] = "Erro ao cadastrar usuário.";
                header("Location: cadastrouser.php");
            }

        }else{ // Se usuário existir na base de dados.

            $_SESSION['existe'] = "Usuário já existe no banco de dados.";
            header("Location: cadastrouser.php");
        }

    }else{
        $_SESSION['confere'] = "Senha não confere entre os dois campos.";
        header("Location: cadastrouser.php");
    }
    
}else{
    $_SESSION['preencher'] = "É necessário preencher todos os campos para cadastrar.";
}
