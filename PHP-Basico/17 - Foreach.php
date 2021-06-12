<?php

/**
 * Foreach - Comando de Repetição
 * 
 * O comando foreach fornece um modo fácil de navegar entre os elementos de um array.
 * 
 * foreach ($array as $elemento){
 *      <comandos>
 * }
 */

 $array = [1, 2, 3, 4, -5, 54, 8, 31, 85, 36];

 $maior = 0;
 $menor = 0;
 foreach($array as $elemento){
     if($elemento == $array[0]){
         $maior = $elemento;
         $menor = $elemento;
     }elseif($elemento > $maior){
         $maior = $elemento;
     }elseif($elemento < $menor){
         $menor = $elemento;
     }

 }

echo "Maior número do array: $maior\n";
echo "Menor número do array: $menor\n";


// métodos pra encontrar menor e maior valor de arrays, igualzinho ao python!
echo min($array);
echo max($array);

// Nas páginas web, vamos encontrar foreach onde possuir a função listar.