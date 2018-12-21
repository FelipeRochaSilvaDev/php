<?php
$q = 30;

$idade_crianca  = 12 ;
$maior_idade  = 18;
$idade_idoso  = 65;


if ($q < $idade_crianca) {

echo "criança";

}else if ( $q < $maior_idade ){

    echo "Adolecente";

}else if ($q < $idade_idoso){
    
    echo "Adulto"; 

}else{
    echo "Idoso";
}

echo "<br>";

echo ($q < $maior_idade)?"Menor de idade":"Maior de idade";// sempre usar quando tiver funções simpes




?>