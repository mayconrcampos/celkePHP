<?php

/**
 * Recursividade em PHP
 */

 function exibe($num){
     echo "valor passado para a função: $num \n";
     if($num > 0){
        exibe($num - 1);
     }
 }

 exibe(10);


 // Fibo não recursiva

 function fibo($num){
    $p = 1;
    $s = 1;
    $t = $p + $s;
    echo "Fibonacci => ";
    for($i = 0; $i < $num; $i++){
        echo "$p ";
        $p = $s;
        $s = $t;
        $t = $p + $s;
    }
 }

 fibo(12);

 // Fibo Recursiva
echo "\n";

 function FiboRecursiva($num){
     if($num == 0 or $num == 1){
         return 1;
     }else{
         return FiboRecursiva($num - 1) + FiboRecursiva($num - 2);
     }
 }

echo FiboRecursiva(11);