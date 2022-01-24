<?php
include_once("01 - conexao.php");

// Criando a string da Query com o comando SELECT;
$selectUsuarios = "SELECT id, nome, email, situacao_id, niveis_acesso, criado, modificado FROM usuarios";

// Fazendo a Query de fato usando mysqli_query;
$resultadoUsuarios = mysqli_query($conn, $selectUsuarios);

// Criando laço para iterar o DB. Cada coluna uma chave.
while($linha_usuario = mysqli_fetch_assoc($resultadoUsuarios)){
    echo "<p> ID: ".$linha_usuario["id"]."</p>"
        ."<p> NOME: ".$linha_usuario["nome"]."</p>"
        ."<p> Email: ".$linha_usuario["email"]."</p>"
        ."<p> Situação: ".$linha_usuario["situacao"]."</p>"
        ."<p> Nível de Acesso: ".$linha_usuario["niveis_acesso"]."</p>"
        ."<p> Criado em: ".$linha_usuario["criado"]."</p>"
        ."<p> Modificado: ".$linha_usuario["modificado"]."</p><hr>";
}