<?php

/**
 * Operadores Lógicos em PHP
 * 
 * and, or, xor
 * ! , && e ||
 * 
 */

 $num = 1;
 $num2 = 2;

 if($num < 5 and $num2 > $num){
     echo "Sério isso? True!\n";
 }else{
     echo "Será mesmo? Sim! False!\n";
 }

 if($num < $num2 or $num2 < $num ){
     echo "True!\n";
 }else{
     echo "False!\n";
 }

 $num = 0;

 // empty verifica se uma variável é vazia.
 // Ela retorna 1 (true) se for vazia
 // Retorna false se não for vazia.
 echo empty($num);

 if($num):
     echo "True!\n";
 else:
     echo "Falso!\n";
 endif;