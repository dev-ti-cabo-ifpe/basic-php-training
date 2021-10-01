<?php
	
	$origem = "C:/xampp/htdocs/test/2.11 Manipulacao de Arquivos/test.txt";
	$destino = "C:/xampp/htdocs/test/2.11 Manipulacao de Arquivos/test2.txt";
	
	if(copy($origem, $destino)){
		echo "Copia Efetuada";
	}else{
		echo "Copia Não Efetuada";
	}

?>