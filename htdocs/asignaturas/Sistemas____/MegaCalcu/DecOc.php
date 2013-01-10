<?php
	$deci=$_POST['numdec'];
	$array[]="";
	$cont=0;
	while ($deci >= 8){
		$divi=$deci/8;
		$bit=$deci%8;
		$res=$deci-(intval($divi)*8);
		$array[$cont]=$res;
		$deci=intval($divi);
		$cont++;	
	}
	$array[$cont]=$deci;
	echo $_POST['numdec'].'<sub>10</sub> <----> ';
	if ($cont > 0){
		for ($i=$cont ; $i>=0 ; $i--){
			echo $array[$i];
		}
	}else {
		echo $deci;
	}
	echo '<sub>8</sub>';
?> 