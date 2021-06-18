<?php
    session_start();
    include_once("db.php");
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
    $nasc = filter_input(INPUT_POST, "nasc", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    if($nome and $cpf and $nasc and $email):

        $atualizaCliente = mysqli_query($conn, 
        "UPDATE clientes SET 
        nome='$nome', 
        cpf='$cpf', 
        nasc='$nasc', 
        email='$email' 
        WHERE
        id='$id'");
    endif;

    if(mysqli_affected_rows($conn)):
        $_SESSION['msg'] = "Registro atualizado com Sucesso!";
        header("Location: listar.php");
    else:
        $_SESSION['msg'] = "Erro ao atualizar registro";
        header("Location: atualizar.php");
    endif;
?>