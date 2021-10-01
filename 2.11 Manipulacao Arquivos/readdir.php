<?php
	
	$diretorio = "C:/xampp/htdocs/test/2.11 Manipulacao de Arquivos";
	if (is_dir($diretorio)){
		$ident = opendir($diretorio);
		while($arquivo = readdir($ident)){
			echo $arquivo . "\n";
		}
	}
	closedir($ident) ;
	
?>