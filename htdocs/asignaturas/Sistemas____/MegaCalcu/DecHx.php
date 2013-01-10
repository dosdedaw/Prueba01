<?php
	$deci=$_POST['numdec'];
	$array[]="";
	$cont=0;
	while ($deci >= 16){
		$divi=$deci/16;
		$res=$deci-(intval($divi)*16);
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
			
		$deci=intval($divi);
		$cont++;	
	}
	if($deci==10){
		$array[$cont]='A';
	}else if($deci==11){
		$array[$cont]='B';
	}else if($deci==12){
		$array[$cont]='C';
	}else if($deci==13){
		$array[$cont]='D';
	}else if($deci==14){
		$array[$cont]='E';
	}else if($deci==15){
		$array[$cont]='F';
	}else{
		$array[$cont]=$deci;
	}
	
	echo $_POST['numdec'].'<sub>10</sub> <----> ';
	if ($cont > 0){
		for ($i=$cont ; $i>=0 ; $i--){
			echo $array[$i];
		}
	}else{
		if($deci==10){
			echo 'A';
		}else if($deci==11){
			echo 'B';
		}else if($deci==12){
			echo 'C';
		}else if($deci==13){
			echo 'D';
		}else if($deci==14){
			echo 'E';
		}else if($deci==15){
			echo 'F';
		}else{
			echo $deci;
		}
	}
	echo '<sub>16</sub>';
?>