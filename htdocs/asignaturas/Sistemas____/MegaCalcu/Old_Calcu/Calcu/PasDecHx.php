<html lang="es">
<head>
	<title>PasDecHx</title>
	<meta name="language" content="es"> <!--Nos valdra para indicar el lenguage que vamos a usar-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Para que el navegador sepa que juego de caracteres usar. Cojeran los navegadores la ñ, acentos y demas carteres raros-->
	
</head>

<body bgcolor="#D3D3D3">
	<form  action="PasDecHx.php" method="post">
		 <table border="2" bgcolor="grey" align="center">
				<caption>Calculadora de Hexadecimal:</caption> 
			<tr>	
				<td align="center" bgcolor="silver"><input style="text-align:center" type="text" name="numdec" id="numdec" value="0" /></td>
				<td align="center" bgcolor="silver"><input type="submit" value="Enviar" /><input type="submit" value="Borrar" /></td>
			</tr>
			<tr>
				<td align="center" bgcolor="silver"><?php echo $_POST['numdec'];?><sub>10<sub></td> 
				<td align="center" bgcolor="silver">
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
				?><sub>16<sub> </td>
			</tr>
		</table>
	</form>
	</body>
</html>