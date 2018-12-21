<?php
//Include tenta executar mesmo que o arquivo esteja faltando ou não funcionando,
//existindo também um diretorio chamado includepath quee traz todos os includes quue estao lá, recomendado para projetos internos (intranet)
//Require obriga que o arquivo exista, que esteja funcionando corretamente e gera um erro fatal 
// include "include/aula_include_01.php";
//A variação onde traz o arquivo somente uma vez 
require_once "include/aula_include_01.php";

$resultado = somar(10, 25);

echo $resultado;

?>