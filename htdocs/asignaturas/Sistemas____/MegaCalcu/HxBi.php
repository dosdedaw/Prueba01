<?php
	$deci=$_POST['numdec'];
	$number = hexdec ( "$deci" );
	$array[]="";
	$cont=0;
	while ($number >= 2){
		$divi=$number/2;
		$bit=$number%2;
		if ($bit == 1){
			$array[$cont]="1";
			$number=$divi-0.5;
		}else{
			$array[$cont]="0";
			$number=$divi;
			}						
		$cont++;	
	}
	$array[$cont]="1";
	echo $_POST['numdec'].'<sub>16</sub> <----> ';
	if ($number > 0){
		for ($i=$cont ; $i>=0 ; $i--){
			echo $array[$i];
		}
	}else if ($number==0){
		echo '0';
	}
	echo '<sub>2</sub>';
?>

