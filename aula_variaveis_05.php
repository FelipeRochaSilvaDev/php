<?php 
$nome = "Beatriz";

function teste(){
	global $nome;
	echo $nome;
}
function teste1(){
	$nome = "Felipe";
	echo $nome."agora no teste1";
}
teste();
teste1();
?>
