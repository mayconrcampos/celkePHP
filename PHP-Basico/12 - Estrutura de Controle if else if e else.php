<?php

/**
 * if, else if e else
 */

 $idade = 15;

 if($idade >= 16 and $idade < 18 ):
    echo "Voto facultativo!\n";
elseif ($idade >= 18 and $idade < 65):
    echo "Voto obrigatório!\n";
else:
    echo "Pode ficar em casa!\n";
endif;
