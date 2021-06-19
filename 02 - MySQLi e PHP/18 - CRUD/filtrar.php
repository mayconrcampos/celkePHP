<?php
session_start();
include_once("db.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nasc = $_POST['nasc'];
$email = $_POST['email'];

if($nome){
    $queryClientes = mysqli_query($conn, "SELECT * FROM clientes WHERE nome LIKE '%$nome%'");
}
// Parei aqui pra pensar em uma solução
?>


