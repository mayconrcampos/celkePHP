<?php

for($i = 0; $i < 12; $i++){
    if($i % 3 == 0){
        continue;
    }elseif($i % 5 == 0){
        break;
    }elseif($i % 7 == 0){
        continue;
    }

    echo $i." ";
}