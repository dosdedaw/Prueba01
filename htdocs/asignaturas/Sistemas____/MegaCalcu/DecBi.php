<?php
	$deci=$_POST['numdec'];
	$array[]="";
	$cont=0;
	while ($deci >= 2){
		$divi=$deci/2;
		$bit=$deci%2;
		if ($bit == 1){
			$array[$cont]="1";
			$deci=$divi-0.5;
		}else{
			$array[$cont]="0";
			$deci=$divi;
			}						
		$cont++;	
	}
	$array[$cont]="1";
	echo $_POST['numdec'].'<sub>10</sub> <----> ';
	if ($deci > 0){
		for ($i=$cont ; $i>=0 ; $i--){
			echo $array[$i];
		}
	}else if ($deci==0){
		echo '0';
	}
	echo '<sub>2</sub>';
?> 
