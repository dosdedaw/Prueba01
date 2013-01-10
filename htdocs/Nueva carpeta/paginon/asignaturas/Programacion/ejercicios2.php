<?php 
$peso=Array();
$presion=Array();
$altura=Array();
if($_POST){
 foreach($_POST as $indice => $valor){
 		$ux=substr($indice,0, strpos($indice,"_"));
 		switch ($ux) {
   			case "kg":
        		$peso[]=$valor;
        		break;
    		case "mm":
        		$presion[]=$valor;
       			break;
    		case "m":
        		$altura[]=$valor;
        		break;
		}
 }
 
}

?>
<html>
	<head>
		<title>Ejercicios2</title>
		<style>
			body {text-align:center;}
			.tabla{}
			td{text-align:center;}
			input{margin:auto;}
		</style>
		<script>
		contador=0;
		function crear_fila(n){
			tab=document.getElementById('tabla');
			fila="";
			for(x=0;x<n;x++){
			contador++;
			fila+='<tr>';
			fila+='<td><input maxlenght="5" size="6" type="text" name="kg_'+contador+'" id="kg_'+contador+'" /></td>';
			fila+='<td><input maxlenght="3" size="6" type="text" name="m_'+contador+'" id="m_'+contador+'"/></td>';
			fila+='<td><input maxlenght="3" size="6" type="text" name="mm_'+contador+'" id="mm_'+contador+'"/></td>';
			fila+='</tr>';
			
			}
			tab.innerHTML=tab.innerHTML+fila;
			
			}
		function resultado(){
			aux=contador;
			pesos=0;
			alturas=0;
			presion=0;
			for(aux;aux>0;aux--){
			pesos=pesos+parseInt(document.getElementById('kg_'+aux).value);
			alturas=alturas+parseInt(document.getElementById('m_'+aux).value);
			presion=presion+parseInt(document.getElementById('mm_'+aux).value);
			}
			alert('peso:'+(Math.round(100*(pesos/contador))/100)+' altura:'+(Math.round(100*(alturas/contador))/100)+' presion'+(Math.round(100*(presion/contador))/100));
		

		}
		</script>
	</head>
	
	<body ">

	
			<div class="tabla">
			<form action="ejercicios2.php" method="post" name="formulario">
			<table id="tabla" style="border:1px solid #FFF;color:#FFF">
				<tr>
					<th>Peso (kg)</th>
					<th>Talla (m)</th>
					<th title="Presion Arterial">P.A. (mm) </th>
				</tr>
			</table>
			
			<table>
				<tr>
					<td><input type="submit" value="a php"  /></td>
					<td><input type="button" value="a&ntilde;adir fila" 
onclick="crear_fila(1)"/></td>
					<td><input type="button" value="calcular" onclick="resultado()" /></td>
				</tr>
			</table>
			</form>
			<?php if(!$_POST){ ?>
			<script>cant=prompt('cuantas filas deseas?');crear_fila(cant);</script>
			<?php }else{ ?>
			<div>
			
				<h3>Resultados obtenidos con Php</h3>
			
				<p>
				<?php if(array_sum($peso)>0){ ?>El peso medio es <?php echo (array_sum($peso)/sizeOf($peso));?> 
				<?php }else{ ?> No existen datos para calcular la media de peso.
				<?php } ?>
				</p>
				<p>
				<?php if(array_sum($altura)>0){ ?>La altura media es <?php echo (array_sum($altura)/sizeOf($altura));?> 
				<?php }else{ ?> No existen datos para calcular la media de altura.
				<?php } ?>
				</p>
				<p>
				<?php if(array_sum($presion)>0){ ?>La presion arterial media es <?php echo (array_sum($presion)/sizeOf($presion));?> 
				<?php }else{ ?> No existen datos para calcular la presion arterial media.
				<?php } ?>
				</p>
			</div>
			</div>
			<?php } ?>
	</body>
</html>