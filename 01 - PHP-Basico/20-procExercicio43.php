<?php

$cod = $_GET["codigo"];

switch ($cod) {
    case 1:
        $aumento = 900 + (900 * 0.5);
        echo "<h1>COD: 1 - Escriturário<h1><hr>";
        echo "<h2>Salário Atual: R$900,00</h2><hr>";
        echo "SALÁRIO Com aumento de 50%: R$".number_format($aumento, 2, ",", ".")." <br><br>";
        echo "<a href='20 - Exercicios43.php'>Voltar</a>";
        break;
    case 2:
        $aumento = 1200 + (1200 * 0.35);
        echo "<h1>COD: 2 - Secretário<h1><hr>";
        echo "<h2>Salário Atual: R$1200,00</h2><hr>";
        echo "SALÁRIO Com aumento de 35%: R$".number_format($aumento, 2, ",", ".")." <br><br>";
        echo "<a href='20 - Exercicios43.php'>Voltar</a>";
        break;
    case 3:
        $aumento = 1500 + (1500 * 0.20);
        echo "<h1>COD: 3 - Caixa<h1><hr>";
        echo "<h2>Salário Atual: R$1500,00</h2><hr>";
        echo "SALÁRIO Com aumento de 20%: R$".number_format($aumento, 2, ",", ".")." <br><br>";
        echo "<a href='20 - Exercicios43.php'>Voltar</a>";
        break;
    case 4:
        $aumento = 2500 + (2500 * 0.10);
        echo "<h1>COD: 4 - Secretário<h1><hr>";
        echo "<h2>Salário Atual: R$2500,00</h2><hr>";
        echo "SALÁRIO Com aumento de 10%: R$".number_format($aumento, 2, ",", ".")." <br><br>";
        echo "<a href='20 - Exercicios43.php'>Voltar</a>";
        break;
    case 5:
        $aumento = 9500 + (9500 * 0.05);
        echo "<h1>COD: 5 - Secretário<h1><hr>";
        echo "<h2>Salário Atual: R$9500,00</h2><hr>";
        echo "SALÁRIO Com aumento de 05%: R$".number_format($aumento, 2, ",", ".")." <br><br>";
        echo "<a href='20 - Exercicios43.php'>Voltar</a>";
        break;
    default:
        echo "Código Inválido! <br>";

        echo "<a href='20 - Exercicios43.php'>Voltar</a>";
        break;
}