<?php
//VERY IMPORTANTE
//Strlen Retorna o tamanho de uma string
//Strpos Encontra a posição da primeira ocorrência de uma string
//Substr Retorna uma parte de uma string
$frase = "Tecnologia 2U, melhor empresa";

$palavra = "2U";

$q = strpos($frase, $palavra);// realiza uma pesquisa na frase e procura onde está 2U

$texto = substr($frase, 0, $q); // realiza uma pesquisa na frase começando do 0 (inicio)

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); // realiza uma pesquisa de maneira dinamica utilizando a manipulação de string

echo "<br>";

var_dump($texto2);
?>