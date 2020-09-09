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
	<div >
	
	<div class="texto">
	<b>Nota:</b> Las rutas de los autobuses han cambiado de
	<u>forma unilateral por parte de la empresa</u> y estamos en un período
	de revisión. Las nuevas rutas que ha publicado la empresa son las
	indicadas a continuación en cuanto sea definitivo lo pondremos en un
	formato mas claro:
	</div>
	<br>
	<img classx="img-ruta" src="files/rutas-201911-1.jpg" width="100%">
	<br>
	<img classx="img-ruta" src="files/rutas-201911-2.jpg" width="70%">
	<br>
	<img classx="img-ruta" src="files/rutas-201911-3.jpg" width="90%">


</div>
<?php
	include 'foot.php';
?>