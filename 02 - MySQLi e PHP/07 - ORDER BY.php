<?php
include_once("01 - conexao.php");

/**
 * 
 * o ORDER BY é uma palavra chave em SQL que é usada para classificar o resultado por um ou mais colunas.
 */

 $usuariosQuery = mysqli_query($conn, "SELECT id, nome, email FROM usuarios ORDER BY nome ASC;");

 while($linhaUsuario = mysqli_fetch_assoc($usuariosQuery)){
     echo "<p>ID: ".$linhaUsuario["id"]."</p>"
        ."<p>ID: ".$linhaUsuario["nome"]."</p>"
        ."<p>ID: ".$linhaUsuario["email"]."</p><hr>";
 }echo "<p>Fim dos registros</p>";