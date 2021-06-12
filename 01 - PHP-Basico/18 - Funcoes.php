<?php

/**
 * Funções com passagem de parâmetros por valor e por referência.
 * 
 * A passagem de parâmetros por valor, caso o conteúdo da variável seja modificado, essa modificação não afeta a variável original.
 * 
 * A passagem por referência o valor é alterado.
 * 
 */

 // Função por valor
 $salario = 1000;
 $aumento = 15;

 function salario($valor, $aumento){
     $valor =  $valor + (($valor / 100) * $aumento);
     echo "Salário com aumento: $valor \n";
 }
 echo "Salário sem aumento: R$ ".number_format($salario, 2, ",", ".")."\n";
 
 salario($salario, $aumento);


 echo "Salário com aumento: R$ ".number_format($salario, 2, ",", ".")."\n";




// Passagem de valor por referência
$salario = 2000;
$aumento = 10;
function salarioA(&$valor, $aumento){
    $valor =  $valor + (($valor / 100) * $aumento);
    echo "Salário com aumento: $valor \n";
}
echo "Salário sem aumento: R$ ".number_format($salario, 2, ",", ".")."\n";

salarioA($salario, $aumento);

echo "Salário com aumento: R$ ".number_format($salario, 2, ",", ".");

// Função detecta primo
function primo($num){
    $c = 0;
    echo "Divisíveis por $num -> ";
    for($i = 1; $i <= $num; $i++){
        if($num % $i == 0){
            echo "$i - ";
            $c++;
        }
    }echo " <- ";
    if($c == 2){
        echo "\n$num é Primo!\n";
    }else{
        echo "\n$num não é Primo!\n";
    }
}
       
primo(997);
primo(1050);
primo(125);
primo(337);
primo(102);
primo(85);
primo(199);
