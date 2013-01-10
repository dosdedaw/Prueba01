<html lang="es">
<head>
	<title>PasHxBi</title>
	<meta name="language" content="es"> <!--Nos valdra para indicar el lenguage que vamos a usar-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Para que el navegador sepa que juego de caracteres usar. Cojeran los navegadores la ñ, acentos y demas carteres raros-->
</head>

<body bgcolor="#D3D3D3">


	<form  action="PasHxBi.php" method="post">
		 <table border="2" bgcolor="grey" align="center">
				<caption>De Hex a Bi</caption> 
			<tr>	
				<td align="center" bgcolor="silver"><input style="text-align:center" type="text" name="numdec" id="numdec" value="0" /></td>
				<td align="center" bgcolor="silver"><input type="submit" value="Enviar" /><input type="submit" value="Borrar" /></td>
			</tr>

			<tr>
				<td align="center" bgcolor="silver"><?php echo $_POST['numdec'];?><sub>16</sub></td> 
				<td align="center" bgcolor="silver">
				<?php
					$deci=$_POST['numdec'];
					$number = hexdec ( "$deci" );
					$array[]="";
					$cont=0;
					while ($number >= 2){
						$divi=$number/2;
						$bit=$number%2;
						if ($bit == 1){
							$array[$cont]="1";
							$number=$divi-0.5;
						}else{
							$array[$cont]="0";
							$number=$divi;
							}						
						$cont++;	
					}
					$array[$cont]="1";
					if ($number > 0){
						for ($i=$cont ; $i>=0 ; $i--){
							echo $array[$i];
						}
					}else if ($number==0){
						echo '0';
					}

					
				?><sub>2</sub> </td>
			</tr>
		</table>
	</form>
	</body>
</html>
