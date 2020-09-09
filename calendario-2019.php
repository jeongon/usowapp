<?php
	$headTitle="Calendario 2019";

	include 'head.php';
?>
<script type="text/javascript">

function showOption( option ){

	ocultar("div-horario");
	ocultar("div-horarioIntensivo");
	
	ocultar("div-sistemas");
	ocultar("div-espacio");
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
		<td ><a class="boton" href="javascript:showOption('sistemas');">Sistemas</a></td>
		<td ><a class="boton" href="javascript:showOption('espacio');">Espacio</a></td>
		</tr><tr>
		<td ><a class="boton" href="javascript:showOption('horario');">Horario Gnral.</a></td>
		<td ><a class="boton" href="javascript:showOption('horarioIntensivo');">Horario Intensivo</a></td>
<!-- 
		<td align="center"  colspan="2"><a class="boton" href="javascript:showOption('horario');">Horario</a></td>
		<td align="right" width="50%"><a class="boton" href="javascript:showOption('com-seguras');">Com. seguras</a></td>
 -->		
		</tr></table>
		
		<h3 style="text-align:center; background:#ff5050; padding:15px;">¡ATENCIÓN! éste no es el calendario del año actual.</h3>
		<br>Enlace a la web de indra con los calendarios oficiales 
		<a href="https://apps.indraweb.net/calendariosEmpresas/calendariosEmpresasFlex.jsp">&gt;&gt; aquí</a>
		
		<br><br>Volver a la version del año actual  
		<a href="calendario.php">&gt;&gt; aquí</a>
	
		
	<div id="div-horario" style="display:none;">
		<p class="subtitulo">Horario general del centro</p>
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
		<p>Ver cada uno de los calendarios para información sobre este tema.</p> 
	</div>
		
		
	<div id="div-horarioIntensivo" style="display:none;">
		<p class="subtitulo">Horario para jornada intensiva</p>
		<p>Este horario en general aplica a los empleados con jornada intensiva en verano aunque se recomienda verificar 
		cada caso concreto.</p>
		<br>
		<p class="subtitulo">Horario invierno</p>
		<p class="subtitulo" style="text-decoration: underline;">De lunes a jueves:<p>
		<b>Entrada</b> de 8:00 a 9:00<br>
		<b>Salida</b> de 17:15 a 18:45<br>

		<p class="subtitulo" style="text-decoration: underline;">Viernes:<p>
		<b>Entrada</b> 8:00<br>
		<b>Salida</b> 14:45<br>
		<br>
		<br>
		<i>La comida durará entre 45 y 90 minutos.</i><br>
		El tiempo que exceda de 45 minutos se deberá recuperar al final de la jornada.</p>
		
		<br>
		<p class="subtitulo">Horario verano (intensivo) </p>
		Desde el 1/Jul al 31/Ago<br>
		<p class="subtitulo" style="text-decoration: underline;">De lunes a jueves:<p>
		<b>Entrada</b> 8:00 <br>
		<b>Salida</b>  15:00 <br>

		<p class="subtitulo" style="text-decoration: underline;">Viernes:<p>
		<b>Entrada</b> 8:00<br>
		<b>Salida</b> 14:45<br>
		<br>
		
		
		<p class="subtitulo" style="font-weight: bold;">Vacaciones y horas de libre disposición:</p>
		<p>Ver cada uno de los calendarios para información sobre este tema.</p> 
	</div>
		
	<div id="div-sistemas" style="display:none;">
		<p class="subtitulo">Calendario laboral 2019 - Indra Sistemas</p>
		<p>Vacaciones: 22 dias laborables a coger preferiblemente en Julio y/o Agosto<br>
		14.5 horas de libre disposición<br>
		<br>
		Jornada anual 1742 horas.</p>
		<img src="files/cal-2019-sf-sistemas-1.jpg" width="100%">
		<img src="files/cal-2019-sf-sistemas-2.jpg" width="100%">
		<img src="files/cal-2019-sf-sistemas-3.jpg" width="100%">
		<img src="files/cal-2019-leyenda-color.gif" width="40%" >
	</div>
		
	<div id="div-espacio" style="display:none;">
		<p class="subtitulo">Calendario laboral 2019 - Indra Espacio</p>
		<p>Vacaciones: 22 dias laborables a coger preferiblemente en Julio y/o Agosto<br>
		2 horas de libre disposición<br>
<!-- 			No existen horas de libre disposición<br> -->
		<br>
		Jornada anual 1742 horas. Jornada intensiva de 1/Jul al 31/Ago</p>
		<img src="files/cal-2019-sf-espacio-1.jpg" width="100%">
		<img src="files/cal-2019-sf-espacio-2.jpg" width="100%">
		<img src="files/cal-2019-sf-espacio-3.jpg" width="100%">
		<img src="files/cal-2019-leyenda-color.gif" width="40%" >
	</div>
		
</div>
	
<script type="text/javascript">
	showOption('horario');
</script>

<?php
	include 'foot.php';
?>