<?php
require_once("01 - conexao.php");
// Select Distinct - É usado apenas para retornar valores diferentes.
// Jamais vai retornar valores iguais.

$usuariosQuery = "SELECT DISTINCT email FROM usuarios";
$selectUsuarios = mysqli_query($conn, $usuariosQuery);

while($linhaUsuario = mysqli_fetch_assoc($selectUsuarios)){
    echo "<p>Email: ".$linhaUsuario["email"]."</p><hr>";
}

// Foi inserido no DB mais uma linha cujo campo email já se encontra cadastrado em outra linha, mas ao imprimir os emails nesta query, ele deixa de fora tudo aquilo que for repetido.

// Se removermos a palavra reservada DISTINCT de dentro da query, então ele irá listar todos os emails que estão cadastrados, também os repetidos.

