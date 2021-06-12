<?php

$num = 1;
$num2 = 1;

while($num <= 10){
    echo "Tabuada de $num \n";
    while($num2 <= 10){
        echo $num." x ".$num2." = ".$num*$num2++."\n";
    }
    $num2 = 1;
    $num++;
}
