<?php
	
	
	$arquivo = "C:/xampp/htdocs/test/2.11 Manipulacao de Arquivos/test3.txt";
	
	if(unlink($arquivo)){
		echo "Arquivo Apagado";
	}else{
		echo "Arquivo Não Apagado";
	}

?>