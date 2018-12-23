<?php

$dia_semana = date("w");

//echo $dia_semana;
// No switch case, diferente do if, você já sabe o os casos que podem acontecer
switch ($dia_semana) {

    case 0:
    echo "Domingo";
    break;
    case 1:
    echo "Segunda-Feira";
    break;
    case 2:
    echo "Terça-Feira";
    break;
    case 3:
    echo "Quarta-Feira";
    break;
    case  4:
    echo "Quinta-Feira";
    break;
    case 5:
    echo "Sexta-Feira";
    case 6:
    echo "Dia do Mozâo";
    break;
    default:
    echo "Data Invalida";
    break;
}

?>