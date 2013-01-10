<?php
	$deci=$_POST['numdec'];
	$number = hexdec ( "$deci" );	
	echo $_POST['numdec'].'<sub>16</sub> <----> '.$number.'<sub>10</sub>';		
?>