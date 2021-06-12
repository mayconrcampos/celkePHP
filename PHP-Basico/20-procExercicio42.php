<?php

$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];
$nota3 = $_GET["nota3"];
$nota4 = $_GET["nota4"];

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo "<h1>Calculando Média</h1>";

echo "<h2>MÉDIA: $media</h2><hr>";

if($media >= 8 and $media <=10){
    echo "CONCEITO: A.<br>";
}elseif($media >= 7 and $media <= 7.9){
    echo "CONCEITO: B.<br>";
}elseif($media >= 6 and $media <= 6.9){
    echo "CONCEITO: C. <br>";
}elseif($media >= 5 and $media <= 5.9){
    echo "CONCEITO: D. <br>";
}else{
    echo "CONCEITO: E.<br>";
}
