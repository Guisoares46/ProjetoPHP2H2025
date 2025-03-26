<?php
	
	$n1 = 1;
	$n2 = 11;
	$n3 = 999;

	/*if (($n1 > $n2 )&&($n1 > $n3)&&($n2 > $n3)){
		echo "$n1 <br> $n2 <br> $n3";
	}elseif(($n2 > $n1)&&($n2 > $n3)){
		echo "$n2 <br> $n1 <br> $n3";
	}else{
		echo "$n3 <br> $n2 <br> $n1";
	}*/
	for($i = 0; $i < 4; $i++){
		if($n1 > $n2){
			echo "$n1 $n2<br>";
		}
		if($n1 > $n2 && $n2 > $n3){
			echo "oi";
		}
	}

?>