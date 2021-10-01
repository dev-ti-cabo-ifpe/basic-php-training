<?php
	
	$origem = "C:/xampp/htdocs/test/2.11 Manipulacao de Arquivos/test2.txt";
	$destino = "C:/xampp/htdocs/test/2.11 Manipulacao de Arquivos/test3.txt";
	
	if(rename($origem, $destino)){
		echo "Renomeacao Efetuada";
	}else{
		echo "Renomeacao Não Efetuada";
	}

?>