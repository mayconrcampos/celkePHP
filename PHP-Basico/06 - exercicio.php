<?php

/**
 * 9 – Implemente um programa usando operadores de atribuição para somar a comissão de R$ 1.321,45 mais o salário de R$ 7.600,25, também subtrair R$608,45 de INSS, e subtrair R$ 1.364,65 de IRRF. No final do programa imprima na tela o valor total a receber. Também converta o valor para o formato do Real, imprima o valor formatado para o modelo do Real, usando a função“number_format”.
 */

 $salario = 7600.25;
 $comissao = 1321.45;
 $INSS = 608.45;
 $IRRF = 1364.65;

 // Calculando
 $salario += $comissao;
 $salario -= $INSS;
 $salario -= $IRRF;

 echo "Salário total: R$: ".number_format($salario, 2, ",", ".")."\n";


 /**
  * 10 – A cliente quer parcelar a compra de R$ 1.220,44 em 4 vezes sem juros. Implemente um programa usando operadores de atribuição para calcular o valor de cada parcela, no final do programa imprima na tela o valor de cada parcela. Também converta o valor para o formato do Real, imprima o valor formatado para o modelo do Real, usando a função “number_format”.
  */

  $compra = 1220.44;
  $parcelas = 4;
  $compra /= $parcelas;

  echo "4 Parcelas de: R$".number_format($compra, 2, ",", ".")."\n";

  /**
   * 11 – A empresa vendeu 58 unidades do produto “A” no valor de R$ 280,74 cada unidade no mes de Junho, qual é o valor total da venda no mês de Junho do produto “A”? Implemente um programa usando operadores de atribuição para calcular o valor, no final do programa imprima na tela o valor total. Também converta o valor para o formato do Real, imprima o valor formatado para o modelo do Real, usando a função “number_format”.
   */

   $produtoA = 280.74;
   $venda = 58;

   $produtoA *= $venda;

   echo "Total Vendas de Junho: Produto A: R$".number_format($produtoA, 2, ",", ".")."\n";

   