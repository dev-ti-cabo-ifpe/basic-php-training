<?php


$carros = array('Palio' => array('cor'=>'azul', 'potencia' => '1.0', 'opcionais' => 'Ar. Condi'),
							'Corsa' => array('cor'=>'cinza', 'potencia' => '1.3', 'opcionais' => 'MP3'),
							'Gol' => array('cor'=>'branco', 'potencia' => '1.0', 'opcionais' => 'Metalica'));

var_dump($carros);

foreach ($carros as $modelo => $caracteristicas){
	echo "=> modelo $modelo \n";
	foreach($caracteristicas as $caracteristica =>  $valor){
		echo "$caracteristica => $valor \n";
	}
	
}