<?php
	
	$dir = "C:/xampp/htdocs/test/2.11 Manipulacao de Arquivos/diretorio";
	
	if(rmdir($dir)){
		echo "Apagado com sucesso";
	}else{
		echo "Apagado não sucesso";
	}
	
?>