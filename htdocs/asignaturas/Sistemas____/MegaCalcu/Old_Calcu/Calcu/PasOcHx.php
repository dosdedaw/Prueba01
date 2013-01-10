<html lang="es">
<head>
	<title>PasOcHx</title>
	<meta name="language" content="es"> <!--Nos valdra para indicar el lenguage que vamos a usar-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Para que el navegador sepa que juego de caracteres usar. Cojeran los navegadores la ñ, acentos y demas carteres raros-->
</head>

<body bgcolor="#D3D3D3">
	<form  action="PasOcHx.php" method="post">
		 <table border="2" bgcolor="grey" align="center">
				<caption>De Oc a Hexadecimal</caption> 
			<tr>	
				<td align="center" bgcolor="silver"><input style="text-align:center" type="text" name="numdec" id="numdec" value="0" /></td>
				<td align="center" bgcolor="silver"><input type="submit" value="Enviar" /><input type="submit" value="Borrar" /></td>
			</tr>

			<tr>
				<td align="center" bgcolor="silver"><?php echo $_POST['numdec'];?><sub>8</sub></td> 
				<td align="center" bgcolor="silver">
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
					}

		
				?><sub>16</sub> </td>
			</tr>
		</table>
	</form>
	</body>
</html>
