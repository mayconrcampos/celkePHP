<?php

/**
 * 12 – No estoque tem 115 unidades do produto “A”. Implemente um programa para imprimir na tela o nome do produto, a quantidade de produto que há no estoque em seguida retirar do estoque 1 unidade do produto “A” usando o pré decremento, imprima na tela a quantidade de produto que está sendo retirado do estoque. No final do programa imprima na tela a quantidade de produtos que restaram no estoque. */

 $produtoA = "A";
 $estoque = 115;

echo "Produto: $produtoA - Qtde: $estoque \n";

$estoque--;

echo "Produto: $produtoA - Qtde: $estoque \n";

 /**
  * 13 – No pedágio passaram no total 1529 veículos. Implemente um programa para somar 1 veículo na quantidade total usando o pré incremento. No final do programa imprima na tela a quantidade total de veículo que passaram pelo pedágio.
  */

  $qtde = 1529;

  echo "Quantidade total: ".++$qtde."\n";