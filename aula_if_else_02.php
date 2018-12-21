<?php
$salario = 1500;
$ganha_pouco = 600;
$ganha_mediano = 1500;
$ganha_bem = 2500;

if ($salario <= $ganha_pouco){
    echo "Recebe pouco";
    } else if ($salario <= $ganha_mediano){
        echo "Recebe Normal";
    } else if ($salario <= $ganha_bem){
        echo "Recebe Bem";
    } else {
        echo "RECEBE MUITO BEM";
    }
?>