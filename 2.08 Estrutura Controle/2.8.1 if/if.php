<?php


	$a = 1;
	if ($a == 5){
		echo "é igual";
	}else{
		echo "não é igual";
	}
	
	
	$a = "conteudo";
	if ($a){
		echo  '$a tem conteudo';
	}
	
	#$b = "conteudo";
	/*if ($b){
		echo  '$a tem conteudo';
	}*/
	
	
	$salario  = 1020;
	$tempo_servico = 12;
	$tem_reclamacoes = false;
	
	if ($salario > 1000){
		if ($tempo_servico >= 12){
				if($tem_reclamacoes != True){
					echo 'parabens, voce foi promovido';
				}
		}
	}
	
	if (($salario  >1000) and ($tempo_servico >=12) and ($tem_reclamacoes != true)){
		echo 'parabens, voce foi promovido' ;
	}
?>