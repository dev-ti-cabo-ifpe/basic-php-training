<?php

	$texto = "The Beatles";
	echo str_pad($texto, 20) ."\n";
	echo str_pad($texto, 20,   "*", STR_PAD_LEFT) ."\n";
	echo str_pad($texto, 20,   "*", STR_PAD_BOTH) ."\n";
	echo str_pad($texto, 20,   "*", STR_PAD_RIGHT) ."\n";
	echo str_pad($texto, 20) ."\n";
	
?>
