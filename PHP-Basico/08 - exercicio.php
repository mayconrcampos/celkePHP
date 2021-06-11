<?php

/**
 * 14 – Implemente um programa para receber quantos contêiner devem ser carregados no navio e quantos já foram carregados, utilize o operador de comparação para verificar o status do carregamento e imprima na tela a mensagem “Carregamento concluído” quando o carregamento for finalizado.
 */
$capacidadeMAX = 50;
$conteiner = 1;
while($conteiner <= $capacidadeMAX){
    echo "Conteiner". $conteiner++ ."\n";
    if($conteiner == $capacidadeMAX){
        echo "Navio alcançou a capacidade máxima de 50 conteineres!\n";
    }
}


 /**
  * 15 – Em uma determinada escola, um aluno é recomendado para obter bolsa de estudo somente se possuir média acima de 8,5. Implemente um programa que receba as informações do aluno e imprima se o mesmo pode ou não receber bolsa.
  */

  $aluno_notas = [1.0, 9.5, 8.9, 10];
$media = 0;
  for($i = 0; $i < 4; $i++){
    $media += $aluno_notas[$i];
  }
  $media /= 4;
  $media = number_format($media, 2);
  if($media < 5){
      echo "Reprovado\n";
  }else if($media >= 5 && $media < 7){
      echo "MEDIA $media ! Recuperação\n";
  }else if($media >= 7 && $media < 8.5){
      echo "MEDIA $media ! Aprovado! Mas não ganha bolsa!\n";
  }else{
      echo "MEDIA $media ! Aprovado com louvor! Ganha bolsa! \n";
  }

  /**
   * 16 – Um atleta precisa saber qual sua categoria ao disputar o campeonato. Implemente um programa para receber o peso, e imprima a categoria de acordo com a tabela:
   */

   $peso = 75;

   $categoria = $peso <= 60 ? "PESO: $peso Kg: Categoria: Novato!\n" : "PESO: $peso Kg: Categoria: Profissional!\n";

   echo $categoria;