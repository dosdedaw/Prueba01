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
	while ($acum >= 16){
		$divi=$acum/16;
		$res=$acum-(intval($divi)*16);
		if($res==10){
		$array[$cont]='A';
		}else if($res==11){
			$array[$cont]='B';
		}else if($res==12){
			$array[$cont]='C';
		}else if($res==13){
			$array[$cont]='D';
		}else if($res==14){
			$array[$cont]='E';
		}else if($res==15){
			$array[$cont]='F';
		}else{
			$array[$cont]=$res;
		}
			
		$acum=intval($divi);
		$cont++;	
	}
	if($acum==10){
		$array[$cont]='A';
	}else if($acum==11){
		$array[$cont]='B';
	}else if($acum==12){
		$array[$cont]='C';
	}else if($acum==13){
		$array[$cont]='D';
	}else if($acum==14){
		$array[$cont]='E';
	}else if($acum==15){
		$array[$cont]='F';
	}else{
		$array[$cont]=$acum;
	}
	
	echo $_POST['numdec'].'<sub>2</sub> <----> ';
	if ($cont > 0){
	for ($i=$cont ; $i>=0 ; $i--){
		echo $array[$i];
	}
	}else{
		if($acum==10){
			echo 'A';
		}else if($acum==11){
			echo 'B';
		}else if($acum==12){
			echo 'C';
		}else if($acum==13){
			echo 'D';
		}else if($acum==14){
			echo 'E';
		}else if($acum==15){
			echo 'F';
		}else{
			echo $acum;
		}
	echo '<sub>16</sub>';
	}
?>
