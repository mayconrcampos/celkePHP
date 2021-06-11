<?php

/**
 * Operadores de Comparação
 * 
 * ==   Igual a
 * !=   Diferente de
 * <    menor que
 * >    maior que
 * <=   menor ou igual a
 * >=   maior ou igual a
 */

 // Praticamente PHP é igual a C ou Python e sem aquelas frescuras de comparação estrita do javascript.

 $num1 = 2;
 $num2 = 5;
 $num3 = 7;

$teste1 = ($num1 < $num2) ? "Verdade": "Falso";
// 1 true

 $teste2 = ($num2 > $num3) ? "Verdade": "Falso";

 $teste3 = (($num1 + $num2) == $num3) ? "Verdade": "Falso";
 // 1 true

 echo "Teste 1: $teste1 \n";
 echo "Teste 2: $teste2 \n";
 echo "Teste 3: $teste3 \n";
