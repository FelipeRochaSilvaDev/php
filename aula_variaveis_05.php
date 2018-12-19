<?php 
$nome = "Beatriz";

function teste(){
	global $nome;
	echo $nome;
}
function teste2(){
	$nome = "Felipe";
	echo $nome."agora no teste2";
}
teste();
teste2();
?>