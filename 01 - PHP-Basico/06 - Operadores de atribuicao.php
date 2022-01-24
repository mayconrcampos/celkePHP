<?php

/**
 * Operadores de Atribuição
 * 
 * =    Atribuição simples
 * +=   Atribuição com adição
 * -=   Atribuição com subtração
 * *=   Atribuição com multiplicação
 * /=   Atribuição com divisão
 * %=   Atribuição com módulo
 * .=   Atribuição com concatenação
 */

 // Atribuição simples
 $num1 = 10;
 $num2 = 15;
 $num3 = 20;

 // Atribuição com adição
 $num1 += 10;
 echo $num1."\n";

 // Atribuição com subtração
 $num1 -= 10;
 echo $num1."\n";

 // Atribuição com multiplicação
 $num2 *= $num3;
 echo $num2."\n";

 // Atribuição com divisão
 $num2 /= $num3;
 echo $num2."\n";

 // Atribuição com módulo
 $num3 %= $num2;
 echo $num3."\n";

 // Atribuição com concatenação
 $num3 .= $num2;
 echo $num3."\n";

 $ola = "Olar! ";
 $bomdia = "Bom dia!!";
 $ola .= $bomdia;
 echo $ola."\n";

