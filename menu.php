<?php

	$headTitle="Menú comedor";

	include 'head.php';

	$USO_ERROR="";
	

	if( isset($_GET["fecha"]) ){
		$fecha=$_GET["fecha"];
	
	} else {
		
		$fecha = UMW_timeToStrYMD( time() );
		
		// Avanzo uno atras y otro adelante para que por defecto 
		// si estamos en fin de semana ponga el menu del lunes
		$fecha = UMW_getDateContiguo($fecha, FALSE);
		$fecha = UMW_getDateContiguo($fecha, TRUE);
		
	}
	
	$dayPrev = UMW_getDateContiguo($fecha, FALSE);
	$dayNext = UMW_getDateContiguo($fecha, TRUE);
	
?>
	<p style="white-space: nowrap;">
	<a  href="<?=basename(__FILE__)?>?fecha=<?=$dayPrev?>"><img class="flecha" src="img/flecha-i.png" alt="&lt;&lt;"></a>
	<img class="flechaEspacio" src="img/cristal.png">
	<a  href="<?=basename(__FILE__)?>?fecha=<?=$dayNext?>"><img class="flecha"  src="img/flecha-d.png" alt="&gt;&gt;"></a>
	</p>
	
<?php	

	$fileName = UMW_getFilenameFromDate($fecha);
	if( ! file_exists($fileName) ){		
		$fechaTexto=UMW_getDateString($fecha);
		$USO_ERROR="No hay menú para el día:<br><br> $fechaTexto";		
	}

	if( "" != $USO_ERROR ){
?>
		<p class="avisoERROR"><?=$USO_ERROR?></p>
<?php
	} else {

		$menuData = UMW_readData($fecha);
		include 'menu-data.php';
	}
	
?>
	<br>
	<div style="font-size: smaller; text-align: justify;">
	<b>NOTA : </b><br> Los menús mostrados aqui son los planificados para cada uno de los días y los publicamos tan pronto
	como nos son comunicados. No se contemplan los posibles cambios que puedan surgir, aunque siempre que se tenga 
	constancia de algún cambio y dé tiempo a publicarlo se realizará dicha modificación.
	
	</div>
<?php

	include 'foot.php';
	
?>