<?php

	function Ola(){
		$argumentos = func_get_args();
		$quantidade = func_num_args();
	
		for($n=0;  $n < $quantidade;  $n++){
			echo 'Ola ' . $argumentos[$n] . "\n";
		}
	}
	
	Ola('Joao', 'Maria', 'Jose', 'Pedro');
	
?>
