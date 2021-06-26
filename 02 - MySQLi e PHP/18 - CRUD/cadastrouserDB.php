<?php
session_start();

include_once("db.php");


if(isset($_POST['useremail']) and isset($_POST['usersenha']) and isset($_POST['repitausersenha'])){
    if($_POST['usersenha'] == $_POST['repitausersenha']){
        
        $queryUser = mysqli_query($conn, "SELECT usuario FROM userlogin");
        $existe = false;
        while($linha = mysqli_fetch_assoc($queryUser)){
            if($linha['usuario'] == $_POST['useremail']){
                $existe = true;
                break;
            }
        }
        if($existe){
            $_SESSION['existe'] = "Usuário já existe no banco de dados.";
            header("Location: cadastrouser.php");

        }else{
            $usuario = $_POST['useremail'];
            $senha = $_POST['usersenha'];
            $insertUsers = mysqli_query($conn, "INSERT INTO userlogin (usuario, senha) VALUES ('$usuario', '$senha')");

            if(mysqli_affected_rows($conn)){
                $_SESSION['sucesso'] = "Usuário cadastrado com Sucesso!";
                header("Location: index.php");
            }else{
                $_SESSION['sucesso'] = "Erro ao cadastrar usuário.";
                header("Location: cadastrouser.php");
            }
        }
        

    }else{
        $_SESSION['confere'] = "Senha não confere entre os dois campos.";
        header("Location: cadastrouser.php");
    }
    
}else{
    $_SESSION['preencher'] = "É necessário preencher todos os campos para cadastrar.";
}
