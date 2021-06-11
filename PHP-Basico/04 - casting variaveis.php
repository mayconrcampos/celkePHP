<?php

// Conversão implícita;
$stringue = "5";
$soma = $stringue + 5;

echo $soma."\n";


// Operações de casting é igual a linguagem C
// Conversão explícita
$numero = 10;
$numero_float = (float) $numero;

echo $numero_float."\n";

// Exibe tipo da variável e o valor.
var_dump($numero_float);

// Mais um exemplo de conversão implícita

$numero10 = "10.98";
$num10 = 10;
$somando = $numero10 + $num10;
echo "Somando: ".$numero10."+".$num10." = ".$somando ."\n";
var_dump($somando);
