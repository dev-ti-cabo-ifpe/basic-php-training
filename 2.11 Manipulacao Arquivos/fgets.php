<?php
	$fd = fopen("http://localhost/test/2.11%20Manipulacao%20de%20Arquivos", "r");
	
	while (!feof ($fd))
	{	
		$buffer = fgets($fd, 4096);
		
		echo $buffer;
	}
	fclose($fd);
?>