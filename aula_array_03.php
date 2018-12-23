<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Felipe',
    'idade'=> '18 anos'
));
array_push($pessoas, array(
    'nome' => 'Beatriz',
    'idade'=> '19 anos'
));
array_push($pessoas, array(
    'nome' => 'Silmara',
    'idade'=> '39 anos'
));

print_r($pessoas[1]['nome']);

?>