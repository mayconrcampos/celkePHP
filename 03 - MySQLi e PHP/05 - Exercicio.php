<?php
include_once("01 - conexao.php");

/**
 * Criar um programa que leia a tabela situacaos e que liste os registros da tabela quando o valor da coluna id seja igual a 2 e imprima no documento html as informações retornadas do banco de dados.
 */

 $usuariosQuery = mysqli_query($conn, "SELECT id, nome, criado, modificado FROM situacaos WHERE id='1'");

 while($linhaUsuarios = mysqli_fetch_assoc($usuariosQuery)){
     echo "<p>ID: ".$linhaUsuarios['id']."</p>"
        ."<p>Nome: ".$linhaUsuarios['nome']."</p>"
        ."<p>Criado: ".$linhaUsuarios['criado']."</p>"
        ."<p>Modificado: ".$linhaUsuarios['modificado']."</p><hr>";
 }