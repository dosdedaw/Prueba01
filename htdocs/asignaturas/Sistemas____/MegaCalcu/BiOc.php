<?php
	$deci=$_POST['numdec'];
	$long=strlen($deci);
	$invdeci=strrev($deci);
	$lim=$long-1;
	$acum="0";
	for($i=$lim;$i>=0;$i--){
		$exp=pow(2,$i);		
		$alg=$invdeci{$i};
		$algmu=$alg*$exp;						
		$acum=$acum+$algmu;
	}
					
	$array[]="";
	$cont=0;
	while ($acum >= 8){
		$divi=$acum/8;
		$bit=$acum%8;
		$res=$acum-(intval($divi)*8);
		$array[$cont]=$res;
		$acum=intval($divi);
		$cont++;	
	}
	$array[$cont]=$acum;
	echo $_POST['numdec'].'<sub>2</sub> <----> ';
	if ($cont > 0){
		for ($i=$cont ; $i>=0 ; $i--){
			echo $array[$i];
		}
		}else {
		echo $acum;
	}
	echo '<sub>8</sub>';
?> 
