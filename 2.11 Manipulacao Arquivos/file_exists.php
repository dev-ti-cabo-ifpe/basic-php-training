<?php
	
	$arquivo= "C:/xampp/htdocs/test/2.11 Manipulacao de Arquivos/test.txt";
	
	if(file_exists($arquivo)){
		echo "Arquivo Existente";
	}else{
		echo "Arquivo Não Existente";
	}

?>