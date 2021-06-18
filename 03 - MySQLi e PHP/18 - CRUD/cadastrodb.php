<?php
session_start();
include_once("db.php");

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_SPECIAL_CHARS);
$nasc = filter_input(INPUT_POST, "nasc");
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

if($nome and $cpf and $nasc and $email){
    $insereCliente = mysqli_query($conn, "INSERT INTO clientes (nome, cpf, nasc, email) VALUES ('$nome', '$cpf', '$nasc', '$email')");

    if(mysqli_insert_id($conn)){
        header("Location: listar.php");
        $_SESSION['msg'] = "Cliente inserido com sucesso";
    }else{
        $_SESSION['msg'] = "Erro ao inserir cliente";
    }
}