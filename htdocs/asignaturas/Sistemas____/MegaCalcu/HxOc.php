<?php
	$deci=$_POST['numdec'];
	$number = hexdec ( "$deci" );
	$array[]="";
	$cont=0;
	while ($number >= 8){
		$divi=$number/8;
		$bit=$number%8;
		$res=$number-(intval($divi)*8);
		$array[$cont]=$res;
		$number=intval($divi);
		$cont++;	
	}
	$array[$cont]=$number;
	echo $_POST['numdec'].'<sub>16</sub> <----> ';
	if ($cont > 0){
		for ($i=$cont ; $i>=0 ; $i--){
			echo $array[$i];
		}
	}else {
		echo $number;
	}
	echo '<sub>8</sub>';
?>
