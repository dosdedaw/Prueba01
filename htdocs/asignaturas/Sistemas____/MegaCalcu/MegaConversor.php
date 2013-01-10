<html lang="es">
<head>
	<title>MegaConversor</title>
		<meta name="description" content="Estructura basica"> <!--Aqui ponemos una pequeña descripcion para los buscadores-->
	<meta name="keywords" content="cabecera, cuerpo, documento"> <!--Palabras claves para los buscadores-->
	<meta name="language" content="es"> <!--Nos valdra para indicar el lenguage que vamos a usar-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Para que el navegador sepa que juego de caracteres usar. Cojeran los navegadores la ñ, acentos y demas carteres raros-->
	<meta http-equiv="Content-Type" content="application/xhtml+xml;charset=utf-8" /> <!--Para adaptar tamaño a movil-->
	<meta http-equiv="Cache-Control" content="max-age=86400"/> <!--Para controlar la cache en moviles-->
	<link rel=StyleSheet href="../../../recursos/css/general.css" type="text/css"></link>
</head>

<body >
	<form  action="MegaConversor.php" method="post">
		<table border="2" bgcolor="#D3D3D3" align="center" " id="megacalcu"cellspacing="0" cellpadding="4">
			<caption><h4>Conversor</h4></caption>
			<tr>
				<td align="center"><input style="text-align:center" type="text" name="numdec" id="numdec" value="0" /></td>
				<td align="center"><input type="submit" value="Convertir" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><strong> De:</strong> 
						<input type="radio" name="DE" id="BiD" value="Bi" />Bin
						<input type="radio" name="DE" id="OcD" value="Oc" />Oct
						<input type="radio" name="DE" id="DecD" value="Dec" checked="checked"/>Dec
						<input type="radio" name="DE" id="HxD" value="Hx" />Hex				
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><strong>A: </strong> 
						<input type="radio" name="A" id="BiA" value="Bi" checked="checked"/>Bin
						<input type="radio" name="A" id="OcA" value="Oc" />Oct
						<input type="radio" name="A" id="DecA" value="Dec" />Dec
						<input type="radio" name="A" id="HxA" value="Hx" />Hex			
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2">
				<?php 
					$selec=$_POST['DE'].$_POST['A']; 
					if ($_POST['DE']==$_POST['A']){
						echo $_POST['numdec'];
					}else{
						include($selec.'.php');
					}
				?></td>
			</tr>

		</table>
	</form>
	</body>
</html>
