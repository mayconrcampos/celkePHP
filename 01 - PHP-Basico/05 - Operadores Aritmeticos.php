<?php

/**
 * Operadores Aritméticos em PHP
 * 
 * +    - Adição
 * -    - Subtração
 * *    - Multiplicação
 * /    - Divisão
 * %    - Módulo - resto da divisão
 */

$num1 = 2;
$num2 = 4;
$num3 = 7;

$soma = $num1 + $num2 + $num3;
echo "Soma: ".$soma."\n";

$sutracao = $num3 - $num2 - $num1;
echo "Subtração: ".$sutracao."\n";

$multiplicacao = $num1 * $num2 * $num3;
echo "Multiplicação: ".$multiplicacao."\n";

$divisao = $num3 / $num2 / $num1;
echo "Divisão: ".$divisao."\n";

$modulo = $num3 % $num2;
echo "Módulo: ".$modulo."\n";

// Limitando as casas decimais de um número float
// Utilizamos o método number_format(numero float, numero de casas decimais desejado, "virgula", "ponto");
$nota1 = 9.6;
$nota2 = 8.5;
$nota3 = 9.0;
$nota4 = 7.8;
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
echo "Média: ".number_format($media, 2, ",", "."). "\n";
// Podemos usar somente com os dois primeiros parâmetros sem problemas.


