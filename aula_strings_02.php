<?php
$nome = "felipe rocha";
                        // strtoupper para deixar todas as letras maiusculas
$nome =  strtoupper($nome); // ao declarar uma função deve-se colocar o nome dela, logo em seguida abrir aspas para chama-lá, e declarar os valores, variaveis ou strings

echo $nome;

$nome = strtolower($nome);

echo "<br>";

echo $nome;

$nome = ucwords($nome);

echo "<br>";

echo $nome;

$nome = ucfirst($nome);

echo "<br>";

echo $nome;
?>