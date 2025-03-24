<?php

	$nota = 10;

	if ($nota <0 || $nota> 10) {
		echo "Nota inválida";
	}

	elseif($nota >= 7){
		echo "Sua nota foi $nota, então você foi Aprovado";
	}

	else{

		echo "Sua nota foi $nota, então você foi Reprovado";
	}


?>
