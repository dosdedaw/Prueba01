<?php
	$men=0;
	function leerDirectorio($ruta,$n=0){
		global $men;
		$n++;
		if ($handle = @opendir($ruta)) {
			$salida="";
			$index="index";
			while (false !== ($entry = readdir($handle))) {
				
				if	($entry=='.' || $entry=='..' || $entry=='img' || 					$entry=='recursos' || $entry=='.DS_Store' || $entry==strpos($entry, $index))continue;
				
				if(!is_dir($ruta.$entry)){
					$aux=substr($entry,0, strpos($entry,"."));
					$html="";
					
					
				}else{
					$aux=$entry;
					$html="/index.html";
				}
			
				$men++;
				$salida.= "<div class='nivel".$n."'  id='men_".$men."' onmouseover='muestrahijos(\"hijos_".$men."\")' onmouseout='ocultahijos(\"hijos_".$men."\")'>";
				$salida.="<a id='enl_".$men."' onmouseover='capitalizar_texto(this.id)' onmouseout='minimizar_texto(this.id)' href='?pag=".$ruta.$entry.$html."'>".$aux."</a>";
				$salida.="<div id='hijos_".$men."' class='hijos_menu'>";
				if(!is_file($ruta.$entry)){
					$salida.=leerDirectorio($ruta.$entry."/",$n);
				}
				$salida.= "</div>";
				$salida.= "</div>";
			}		
			
			closedir($handle);
			return $salida;
		}
	}
	

?>
<html>
<head>
	<!--<script src="recursos/js/general.js" type="text/javascript"></script>-->
	<link rel=StyleSheet href="recursos/css/general.css" type="text/css"></link>
</head>
<body>
	<div id="contenedor">
		<div id="cabecera"></div>
		<div id="menu">
	<!--		<div  class="formNav">
				<form>
					<input type="hidden" id="pagina" name="pagina">
				</form>
			</div>  -->
		<?php
			echo leerDirectorio("./asignaturas/Sistemas");
		?>
		</div>
		<div id="contenido">
		<?php
	    if ($_GET && $_GET["pag"]){
		@include("./".$_GET["pag"]);
		}else{
		 include("./portada.html");
		}
		?>
		</div>
		<div id="pie">
			<p class="ppie">
			Desarrollo de aplicaciones en entorno web v.02<br />
			I.Javier P&eacute;rez Meg&iacute;a<br />
			Oscar Gonzlez Fern&aacute;ndez<br />
			</p>
		</div>
	</div>
</body>
</html>