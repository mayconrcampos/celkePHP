<?php
include_once("01 - conexao.php");
/**
 * Como utilizar a cláusula LIMIT junto com SELECT para limitar o número de resultados das nossas queries.
 */

// Criando query utilizando cláusula LIMIT.
$usuariosQuery = mysqli_query($conn, 
            "SELECT id, nome, email FROM usuarios LIMIT 2 OFFSET 2");

            // Traduzindo: SELECT id, nome, email de usuarios, limitando-se a 1 resultado a partir do segundo registro.

            // A Cláusula OFFSET é útil para utilizar em paginação.


// Visualizando dados do BD.
while($linha_usuarios = mysqli_fetch_assoc($usuariosQuery)){
    echo "<p ID:> ".$linha_usuarios['id']."</p>"
    ."<p Nome:> ".$linha_usuarios['nome']."</p>"
    ."<p Email:> ".$linha_usuarios['email']."</p><hr>";
        
}


