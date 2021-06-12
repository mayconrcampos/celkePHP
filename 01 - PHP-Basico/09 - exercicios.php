<?php

/**
 * 17 – Um atleta precisa saber qual sua categoria ao disputar o campeonato. Implemente um programa para receber o peso e a altura, e imprima a categoria de acordo com a tabela Peso Altura Categoria >= 50 e < 60 < 1,70 Novato >= 60 e <= 80 >= 1,70 e < 1,90 Profissional
 */

 $peso = 70;
 $altura = 1.82;

 if($peso >= 50 and $peso < 60 and $altura < 1.70){
    echo "NOVATO!\n";
 }else if($peso >= 60 and $peso <= 80 and $altura >= 1.70 and $altura < 1.90){
    echo "Profissional!\n";
 }

 /**
  * 18 – Em uma determinada escola, um aluno é recomendado para obter bolsa de estudo somente se possuir média acima de 8,5 e ter frequência maior que 70%. Implemente um programa que receba as informações do aluno e imprima se o mesmo pode ou não receber bolsa.
  */

  // Já fiz essa.

  /**
   * 19 –Implemente um programa que receba dois números e imprima o maior ou apresente que são iguais.
   */

   $num1 = 15;
   $num2 = 10;

   if($num1 > $num2){
       echo $num1." é maior que ".$num2."\n";
   }else if($num1 == $num2){
       echo $num1." é Igual a ".$num2."\n";
   }else{
       echo $num1." é menor que ".$num2."\n";
   }