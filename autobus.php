<?php
	$headTitle="Autobuses";

	include 'head.php';
?>
<script type="text/javascript">

function showRuta( $option ){

	ocultar("div-4caminos");
	ocultar("div-atocha");
	ocultar("div-alcala");
	ocultar("div-av-america");
	ocultar("div-prointec");
	

	$elem = document.getElementById("div-"+$option);
	$elem.style.display="block";
	showSentido($option,'entrada');
}

function ocultar( $elemId ){
	$e = document.getElementById( $elemId );
	$e.style.display="none";
}


function showSentido( $bus, $sentido ){

	ocultar("div-"+$bus+"-entrada");
	ocultar("div-"+$bus+"-salida");

	$elem = document.getElementById("div-"+$bus+"-"+$sentido);
	$elem.style.display="block";
}

</script>
	<br>
	<div class="texto">

		<table style="border: 0px; width: 100%;"><tr>
		<td class="botonTd" align="center" width="20%"><a class="boton" href="javascript:showRuta('atocha');">Atocha / Moratalaz</a></td>
		<td class="botonTd" align="left" width="20%"><a class="boton" href="javascript:showRuta('4caminos');">4 Caminos</a></td>
		<td class="botonTd" align="center" width="20%"><a class="boton" href="javascript:showRuta('av-america');">Avda. América</a></td>
		<td class="botonTd" align="right" width="20%"><a class="boton" href="javascript:showRuta('alcala');">Alcalá</a></td>
		<td class="botonTd" align="right" width="20%"><a class="boton" href="javascript:showRuta('prointec');">Prointec</a></td>
		</tr><tr>
		<td align="left" colspan="5"><br>NOTA: <br><br>
				<b><u>Mar Egeo :</u></b> Los viernes, la ruta de <u>salida</u> es a las 14:45 para todos los autobuses. En Semana
								Santa y cierre de Navidad no hay servicio <br>
				<b><u>Prointec :</u></b> Los viernes, Semana Santa, verano (15-Jun/15-Sep) y semana Navidad, la ruta 
								de <u>salida</u> es a las 15:00</td>
		</tr>
		</table>
		
		
		
		<div id="div-atocha" style="display:none; text-align:center;">
<!-- 		<p class="subtitulo">Autobús Atocha / Moratalaz</p> -->
		<table style="border: 0px; width: 60%; margin: 0 auto;"><tr>
		<td align="left" width="30%"><a class="boton azul" href="javascript:showSentido('atocha','entrada');">Entrada</a></td>
		<td align="right" width="30%"><a class="boton azul" href="javascript:showSentido('atocha','salida');">Salida</a></td>
		</tr></table>
			<div id="div-atocha-entrada" style="display:none;">
				<img class="img-ruta" src="files/ruta-atocha-entrada.jpg" width="100%">
			</div>
			<div id="div-atocha-salida" style="display:none;">
				<img class="img-ruta" src="files/ruta-atocha-salida.jpg" width="100%">
			</div>
		</div>
		
		
		<div id="div-4caminos" style="display:none; text-align:center;">
<!-- 		<p class="subtitulo">Autobús Cuatro Caminos</p> -->
		<table style="border: 0px; width: 60%; margin: 0 auto;"><tr>
		<td align="left" width="30%"><a class="boton azul" href="javascript:showSentido('4caminos','entrada');">Entrada</a></td>
		<td align="right" width="30%"><a class="boton azul" href="javascript:showSentido('4caminos','salida');">Salida</a></td>
		</tr></table>
			<div id="div-4caminos-entrada" style="display:none;">
				<img class="img-ruta" src="files/ruta-4caminos-entrada.jpg" width="100%">
			</div>
			<div id="div-4caminos-salida" style="display:none;">
				<img class="img-ruta" src="files/ruta-4caminos-salida.jpg" width="100%">
			</div>
		</div>
		
		
		
		<div id="div-alcala" style="display:none; text-align:center;">
<!-- 		<p class="subtitulo">Autobús Alcalá</p> -->
		<table style="border: 0px; width: 60%; margin: 0 auto;"><tr><tr>
		<td align="left" width="30%"><a class="boton azul" href="javascript:showSentido('alcala','entrada');">Entrada</a></td>
		<td align="right" width="30%"><a class="boton azul" href="javascript:showSentido('alcala','salida');">Salida</a></td>
		</tr></table>
			<div id="div-alcala-entrada" style="display:none;">
				<img class="img-ruta" src="files/ruta-alcala-entrada.jpg" width="100%">
			</div>
			<div id="div-alcala-salida" style="display:none;">
				<img class="img-ruta" src="files/ruta-alcala-salida.jpg" width="100%">
			</div>
		</div>
		
		
		
		<div id="div-av-america" style="display:none; text-align:center;">
<!-- 		<p class="subtitulo">Autobús Av. América</p> -->
		<table style="border: 0px; width: 60%; margin: 0 auto;"><tr><tr>
		<td align="left" width="30%"><a class="boton azul" href="javascript:showSentido('av-america','entrada');">Entrada</a></td>
		<td align="right" width="30%"><a class="boton azul" href="javascript:showSentido('av-america','salida');">Salida</a></td>
		</tr></table>
			<div id="div-av-america-entrada" style="display:none;">
				<img class="img-ruta" src="files/ruta-av-america-entrada.jpg" width="100%">
			</div>
			<div id="div-av-america-salida" style="display:none;">
				<img class="img-ruta" src="files/ruta-av-america-salida.jpg" width="100%">
			</div>
		</div>
		
		
		
		<div id="div-prointec" style="display:none; text-align:center;">
<!-- 		<p class="subtitulo">Autobús Prointec - Plaza de Castilla</p> -->
		<table style="border: 0px; width: 60%; margin: 0 auto;"><tr><tr>
		<td align="left" width="30%"><a class="boton azul" href="javascript:showSentido('prointec','entrada');">Entrada</a></td>
		<td align="right" width="30%"><a class="boton azul" href="javascript:showSentido('prointec','salida');">Salida</a></td>
		</tr></table>
			<div id="div-prointec-entrada" style="display:none;">
				<img class="img-ruta" src="files/ruta-prointec-entrada.jpg" width="100%">
			</div>
			<div id="div-prointec-salida" style="display:none;">
				<img class="img-ruta" src="files/ruta-prointec-salida.jpg" width="100%">
			</div>
		</div>
		
		
	</div>
<?php
	include 'foot.php';
?>