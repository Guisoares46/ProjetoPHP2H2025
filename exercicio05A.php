<?php
	$altura1 = 1.80;
	$altura2 = 1.60;
	$maioraltura = 0;
	$menoraltura = 0;

	if($altura1 > $altura2){
		$maioraltura = $altura1;
	}else($altura2 > $altura1);
		$maioraltura = $altura2;
	{
	if($altura2 < $altura1){
		$menoraltura = $altura2;
	}else($altura1 < $altura2);
		$menoraltura = $altura1;

	}
		echo "A maior altura é: $altura1 <br>";
		echo "A menor altura é: $altura2 <br>";

?>