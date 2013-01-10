<html lang="es">
<head>
	<title>PasOcBi</title>
	<meta name="language" content="es"> <!--Nos valdra para indicar el lenguage que vamos a usar-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Para que el navegador sepa que juego de caracteres usar. Cojeran los navegadores la ñ, acentos y demas carteres raros-->
</head>

<body bgcolor="#D3D3D3">
	<form  action="PasOcBi.php" method="post">
		 <table border="2" bgcolor="grey" align="center">
				<caption>De Oc a Binario</caption> 
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
					if ($acum > 0){
						for ($i=$cont ; $i>=0 ; $i--){
							echo $array[$i];
						}
					}else if ($acum==0){
						echo '0';
					}
		
				?> <sub>2</sub></td>
			</tr>
		</table>
	</form>
	</body>
</html>
