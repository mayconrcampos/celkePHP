<?php

/**
 * 5 – Implemente um programa para somar a comissão de R$ 2.320,29 mais o salário de R$ 7.600,25. No final do programa imprima na tela o valor da soma. Também converta o valor para o formato do Real, imprima o valor formatado para o modelo do Real, usando a função “number_format”.
 */

 $salario = 7600.25;
 $comissao = 2320.29;
 $soma = number_format($salario + $comissao, 2, ",", ".");
 echo "A Soma é: R$ ".$soma."\n";

/**
 * 6 – Implemente um programa para somar a comissão de R$ 1.321,45 mais o salário de R$ 7.600,25, também subtrair R$ 608,45 de INSS, e subtrair R$ 1.364,65 de IRRF. No final do programa imprima na tela o valor total a receber.Também converta o valor para o formato do Real, imprima o valor formatado para o modelo do Real, usando a função “number_format”.
 */

 $salario = 7600.25;
 $comissao = 1321.45;
 $inss = 608.45;
 $irrf = 1364.65;

 $calcula = ((($salario + $comissao) - $inss) - $irrf);
$valor_formatado = number_format($calcula, 2, ",", ".");
echo "Valor Total com impostos deduzidos: R$".$valor_formatado.".\n";

/**
 * 7 – A cliente quer parcelar a compra de R$ 1.220,44 em 4 vezes sem juros. Implemente um programa para calcular o valor de cada parcela, no final do programa imprima na tela o valor de cada parcela. Também converta o valor para o formato do Real, imprima o valor formatado para o modelo do Real, usando a função “number_format”.
 */
$Total = 1220.44;
$parcelado = number_format($Total / 4, 2, ",", ".");
echo "4 Parcelas de: R$".$parcelado." S/Juros. \n";

/**
 * 8 – A empresa vendeu 58 unidades do produto “A” no valor de R$ 280,74 cada unidade no mes de Junho, qual é o valor total da venda no mês de Junho do produto “A”? Implemente um programa para calcular o valor, no final do programa imprima na tela o valor total. Também converta o valor para o formato do Real, imprima o valor formatado para o modelo do Real, usando a função “number_format”.
 */

 $produtoA = 280.74;
 $venda_de_Junho = number_format(50 * $produtoA, 2, ",", ".");
 echo "Total de vendas do produto A em Junho: R$ ".$venda_de_Junho."\n";


