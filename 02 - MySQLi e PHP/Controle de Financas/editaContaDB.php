<?php
session_start();
include_once("db.php");

function valida_float($num){
    if(is_int($num)){
        $num = (double) $num;
        return $num;
    }else{
        $num = str_replace(",", ".", $num);
        return (double) $num;
    }
}

$id = $_POST['id'];


$descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_STRING);
$valor = filter_input(INPUT_POST, "valor");
$valor = valida_float($valor);
$data = $_POST['data'];
$categoria = filter_input(INPUT_POST, "categoria", FILTER_SANITIZE_STRING);
$comentario = filter_input(INPUT_POST, "comentario", FILTER_SANITIZE_STRING);
$filtro = filter_input(INPUT_POST, "filtro", FILTER_SANITIZE_NUMBER_INT);

if($descricao and $valor and $data and $categoria){
    $insereConta = mysqli_query($conn, "UPDATE controle SET descricao='$descricao', valor='$valor', data='$data', categoria='$categoria', comentario='$comentario' WHERE id='$id'");

    if(mysqli_affected_rows($conn)){
        echo $_SESSION['msg'] = "Conta inserida com sucesso.";
        header("Location: listaContas.php");
    }else{
        echo $_SESSION['msg'] = "Erro ao inserir conta.";
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
    $_SESSION['msg'] = "ERRO! É necessário preencher todos os campos do formulário.";
    
}