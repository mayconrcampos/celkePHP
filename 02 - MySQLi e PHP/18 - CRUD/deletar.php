<?php
session_start();
include_once("db.php");

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);


$deletaCliente = mysqli_query($conn, "DELETE FROM clientes WHERE id='$id'");

if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "Cliente com ID $id excluído com sucesso.";
    header("Location: listar.php");
}else{
    $_SESSION['msg'] = "Erro ao excluir registro.";
}


?>