<?php
        session_start();
        include_once("18 - CRUD - db.php");
        include_once("18 - Funcoes.php");

        
        if(isset($_POST['cadastra'])){
            $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
            $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
            $nasc = filter_input(INPUT_POST, "nasc");
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

            if($nome and $cpf and $nasc and $email){
                $insertClientes = mysqli_query($conn, "INSERT INTO clientes (nome, cpf, nasc, email) VALUES ('$nome', '$cpf', '$nasc', '$email')");

                header("Location: 18 - CRUD - cadastro.php");
            }else{
                header("Location: 18 - CRUD - cadastro.php");
                $_SESSION['msg'] = "ERRO! É preciso preencher todos os campos.";
            }
            
        }

        if(isset($_POST['apaga'])){
            header("Location: 18 - CRUD - cadastro.php");
            apaga();
        }
?>

