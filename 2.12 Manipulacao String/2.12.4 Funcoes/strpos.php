<?php

	$texto = "O Rato roeu a roupa do rei de roma";
	$encontrar = 'roupa';
	$posicao = strpos($texto, $encontrar);
	if ($posicao){
		echo "String encontrada na posicao $posicao";
	}else{
		echo "String nao encontrada ";
	}
	
?>
