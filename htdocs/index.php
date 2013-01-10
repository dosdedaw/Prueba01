<html lang="es">
<head>
	<title>Desarrollo de aplicaciones web</title>
	<meta name="description" content="Estructura basica"> <!--Aqui ponemos una pequeña descripcion para los buscadores-->
	<meta name="keywords" content="cabecera, cuerpo, documento"> <!--Palabras claves para los buscadores-->
	<meta name="language" content="es"> <!--Nos valdra para indicar el lenguage que vamos a usar-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Para que el navegador sepa que juego de caracteres usar. Cojeran los navegadores la ñ, acentos y demas carteres raros-->
	<meta http-equiv="Content-Type" content="application/xhtml+xml;charset=utf-8" /> <!--Para adaptar tamaño a movil-->
	<meta http-equiv="Cache-Control" content="max-age=86400"/> <!--Para controlar la cache en moviles-->
	<link rel=StyleSheet href="./recursos/css/general.css" type="text/css"></link>




	
</head>

<body>

	<div class="cabecera">
		<?php	   
			include("./cabecera.php");
		?>
	</div>

	<div class="menuchachi" >

	<?php	
		if ($_GET['pag']){

			@include($_GET['pag']);
		}else if($_GET['pags']){
			$ver = substr($_GET['pags'], 0, 27)."men.php";
			@include $ver;
		}
	?>	
	
	</div>
	
	<div class="porta">	
		
	<?php
		if ($_GET['pags']){
		
			@include ($_GET['pags']);
	
		}else if (!$_GET['pags']){

			@include("./portada.html");
	
		}
	?>			

	
	
	
	<div id="pie">
		<p class="ppie">
		Desarrollo de aplicaciones en entorno web v.02<br />
		I.Javier P&eacute;rez Meg&iacute;a<br />
		Oscar González Fern&aacute;ndez<br />

		</p>
	</div>
	</div>
</body>
</html>

