<?php
	$headTitle="Calendario 2020";

	include 'head.php';
?>
<script type="text/javascript">

function showOption( option ){

	ocultar("div-horario");
	ocultar("div-sistemas");
// 	ocultar("div-espacio");
// 	ocultar("div-com-seguras");

	elem = document.getElementById("div-"+option);
	elem.style.display="block";
	//goToElement( "pScroll" );
}

function ocultar( elemId ){
	e = document.getElementById( elemId );
	e.style.display="none";
}


</script>
	<br>
	<div class="texto">

		<table style="border: 0px; width: 100%;"><tr>
		<td align="left" style="width: 50%;"><a class="boton" href="javascript:showOption('sistemas');">Calendario</a></td>
		<td align="right" style="width: 50%;"><a class="boton" href="javascript:showOption('horario');">Horario</a></td>
		</tr><tr>
<!-- 
		<td ><a class="boton" href="javascript:showOption('espacio');">Espacio</a></td>
		<td align="right" width="50%"><a class="boton" href="javascript:showOption('com-seguras');">Com. seguras</a></td>
 -->		
		</tr></table>
		<br>Enlace a la web de indra con los calendarios oficiales 
		<a href="https://apps.indraweb.net/calendariosEmpresas/calendariosEmpresasFlex.jsp">&gt;&gt; aquí</a>
			
		<br><br>Tienes disponibles los calendarios : <br>
		<ul>
		<li> del año 2018 <a href="calendario-2018.php">&gt;&gt; aquí</a><br>
		<li> del año 2019 <a href="calendario-2019.php">&gt;&gt; aquí</a><br>
		</ul>
		
		<div id="div-horario" style="display:none;">
		<p class="subtitulo">Horario del centro</p>
		<p>Debido a la variedad de horarios que tenemos en el centro, incluso con soporte 24h, estos horarios son orientativos y habrá que consultar
		cada uno de los calendarios para una información más detallada.</p>
		<p class="subtitulo" style="text-decoration: underline;">De lunes a jueves:<p>
		<b>Entrada</b> de 7:45 a 8:15<br>
		<b>Salida</b> de 17:00 a 17:30<br>
		<b>Flexibilidad adicional voluntaria:</b> entrada hasta las 9:00 y salida, hasta las 19:00<br></p>

		<p class="subtitulo" style="text-decoration: underline;">Viernes:<p>
		<b>Entrada</b> de 7:45 a 8:15<br>
		<b>Salida</b> de 14:00 a 14:30<br>
		<b>Flexibilidad adicional voluntaria:</b> entrada hasta las 9:00 y salida, hasta las 15:15<br>
		<br>
		<br>
		<i>La comida durará entre 45 y 90 minutos.</i><br>
		El tiempo que exceda de 45 minutos se deberá recuperar al final de la jornada.</p>
		<p class="subtitulo" style="font-weight: bold;">Vacaciones y horas de libre disposición:</p>
		<p>Ver el calendario para información sobre este tema.</p> 
		</div>
		
		<div id="div-sistemas" style="display:none;">
			<p class="subtitulo">Calendario laboral 2020 - Indra Sistemas</p>
			<p>Vacaciones: 22 dias laborables a coger preferiblemente en Julio y/o Agosto<br>
			22 horas y 30 minutos de libre disposición<br>
			<br>
			Jornada anual 1742 horas.</p>
			<img src="files/cal-2020-sf-sistemas-1.jpg" width="100%">
			<img src="files/cal-2020-sf-sistemas-2.jpg" width="100%">
			<img src="files/cal-2020-sf-sistemas-3.jpg" width="100%">
			<img src="files/cal-2020-leyenda-color.gif" width="40%" >
		</div>
		
	</div>
	
<script type="text/javascript">
	showOption('horario');
</script>

<?php
	include 'foot.php';
?>