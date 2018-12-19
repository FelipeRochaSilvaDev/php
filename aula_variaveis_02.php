<?php 
// $ano_nascimento = 2000;
// $nome_completo = "Felipe Rocha";
$nome1 = "Felipe"; //numeros no inicio e qualquer outro caracter (a não ser o _) não funcionam
$sobre_nome = "Rocha";

$nome_completo = $nome1 ." ". $sobre_nome;

echo $nome_completo;

exit;

echo $nome1;

echo "<br>";

unset($nome1); //eliminar da memoria

if(isset($nome1)){
	echo $nome1;
}

		
?>