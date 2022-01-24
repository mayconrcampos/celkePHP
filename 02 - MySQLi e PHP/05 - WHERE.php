<?php
include_once("01 - conexao.php");

/**
 * A cláusula WHERE é usada para extrair somente os registros que satisfaçam um critério especificado.
 */

 $usuariosQuery = mysqli_query($conn, "SELECT id, nome, email, situacao_id FROM usuarios WHERE situacao_id='1'");

 // Muito útil para criar funções de filtrar dados

while($linhaUsuarios = mysqli_fetch_assoc($usuariosQuery)){
    echo "<p>ID :".$linhaUsuarios['id']."</p>"
    ."<p>Nome :".$linhaUsuarios['nome']."</p>"
    ."<p>Email :".$linhaUsuarios['email']."</p>"
    ."<p>Situação ID :".$linhaUsuarios['situacao_id']."</p><hr>";
}