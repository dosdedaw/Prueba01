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
	echo $_POST['numdec'].'<sub>2</sub> <----> '.$acum.'<sub>10</sub>';			
?> </td>

