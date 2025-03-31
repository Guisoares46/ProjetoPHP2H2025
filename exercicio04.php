<?php
	
	$n1 = 46;
	$n2 = 10;
	$n3 = 4;

	if ($n1 > $n3 && $n1 > $n2){
		if ($n2 > $n3){
		echo "$n1 <br> $n2 <br> $n3";
	}else{
		echo "$n1 <br> $n3 <br> $n2";
		}
	}else{
	if ($n2 > $n1 && $n2 > $n3){
		if($n1 > $n3){
			echo "$n2 <br> $n1 <br> $n3";
		}else{
			echo "$n2 <br> $n3 <br> $n1";
	}
	}
	if($n3 > $n1 && $n3 > $n2){
		if($n2 > $n1){
		}else{
			echo "$n3 <br> $n1 <br> $n3";
		}
	}

	}

?>