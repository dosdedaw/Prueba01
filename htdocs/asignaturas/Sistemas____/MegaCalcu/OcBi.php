<?php
	$deci=$_POST['numdec'];
	$long=strlen($deci);
	$invdeci=strrev($deci);
	$lim=$long-1;
	$acum="0";
	for($i=$lim;$i>=0;$i--){
		$exp=pow(8,$i);		
		$alg=$invdeci{$i};
		$algmu=$alg*$exp;						
			$acum=$acum+$algmu;
		}
		
	$array[]="";
	$cont=0;
	while ($acum >= 2){
		$divi=$acum/2;
		$bit=$acum%2;
		if ($bit == 1){
			$array[$cont]="1";
			$acum=$divi-0.5;
		}else{
			$array[$cont]="0";
			$acum=$divi;
			}						
		$cont++;	
	}
	$array[$cont]="1";
	echo $_POST['numdec'].'<sub>8</sub> <----> ';
	if ($acum > 0){
		for ($i=$cont ; $i>=0 ; $i--){
			echo $array[$i];
		}
	}else if ($acum==0){
		echo '0';
	}
	echo '<sub>2</sub>';
?> 
