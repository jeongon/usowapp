<?php
	$headTitle="Salas de reunión y locales";

	include 'head.php';
?>

	<br>
	Al final de los mapas tienes un listado de las salas que indica el tipo y su capacidad.
	<br><br>
	<img id="img-leyenda" src="img/salas-leyenda.png" >
	

	<div id="containerSalasList">

	<select id="salasList" onchange="salaChanged();" >
		<option value="" selected="selected">Selecciona sala a mostrar</option>
		
<!-- 		<option value="xxx">xxx</option> -->
<!-- 		<option value="yyy">yyy</option> -->
		
		<option value="7 Picos">7 Picos</option>
		<option value="Aliendre">Aliendre</option>
		<option value="Almanzor">Almanzor</option>
		<option value="Almenara">Almenara</option>
		<option value="Aneto">Aneto</option>
		<option value="El Yelmo">El Yelmo</option>
		<option value="Formación">Formación</option>
		<option value="Guadalix">Guadalix</option>
		<option value="Henares">Henares</option>
		<option value="Jarama">Jarama</option>
		<option value="Jaramilla">Jaramilla</option>
		<option value="Lozoya">Lozoya</option>
		<option value="Mulhacén">Mulhacén</option>
		<option value="Peñalara">Peñalara</option>
		<option value="Sala 4">Sala 4</option>
		<option value="Sala 5">Sala 5</option>
		<option value="Sala 13">Sala 13</option>
		<option value="Sala 14">Sala 14</option>
		<option value="Sala 15">Sala 15</option>
		<option value="Sala 16">Sala 16</option>
		<option value="Sala 17">Sala 17</option>
		<option value="Sala 18">Sala 18</option>
		<option value="Sala 22">Sala 22</option>
		<option value="Tajo">Tajo</option>
		<option value="Tajuña">Tajuña</option>
		<option value="Veleta">Veleta</option>
	</select>
</div> <!-- END containerSalasList -->

<div id="containerSalaImg">

	
<!-- 	<img src="img/sala-dot.jpg" id="imgDot" > -->
	<img src="img/salas-dot.gif" id="imgDot" >
	<p id="imgLabel0" class="subtitulo underline-red">Planta baja</p>
	<div id="imgSalaDiv0" class="imgSalaDiv">
		<img src="img/salas-0-H.jpg" id="imgSala0H" class="imgSala imgSalaH">
		<img src="img/salas-0-V.jpg" id="imgSala0V" class="imgSala imgSalaV">
	</div>
	<p id="imgLabel1" class="subtitulo underline-red">Planta 1</p>
	<div id="imgSalaDiv1" class="imgSalaDiv">
		<img src="img/salas-1-H.jpg" id="imgSala1H" class="imgSala imgSalaH">
		<img src="img/salas-1-V.jpg" id="imgSala1V" class="imgSala imgSalaV">
	</div>


</div> <!-- END containerSalaImg -->

<br>
<br>

<table class="tblDatos" >
	<thead>
		<tr><td>Nombre</td><td>Planta</td><td>Tipo</td><td>Capacidad</td></tr>
	</thead>
	<tr><td>7 Picos</td><td>1</td><td>Reuniones</td><td>4</td></tr>
	<tr><td>Aliendre</td><td>0</td><td>Presentaciones</td><td>6</td></tr>
	<tr><td>Almanzor</td><td>1</td><td>Reuniones</td><td>8</td></tr>
	<tr><td>Almenara</td><td>1</td><td>Reuniones</td><td>4</td></tr>
	<tr><td>Aneto</td><td>1</td><td>Presentaciones</td><td>10</td></tr>
	<tr><td>El Yelmo</td><td>1</td><td>Reuniones</td><td>10</td></tr>
	<tr><td>Formación</td><td>0</td><td>Formación</td><td>30</td></tr>
	<tr><td>Guadalix</td><td>0</td><td>Reuniones</td><td>5</td></tr>
	<tr><td>Henares</td><td>0</td><td>Presentaciones</td><td>8</td></tr>
	<tr><td>Jarama</td><td>0</td><td>Presentaciones</td><td>10</td></tr>
	<tr><td>Jaramilla</td><td>0</td><td>Reuniones</td><td>5</td></tr>
	<tr><td>Lozoya</td><td>0</td><td>Reuniones</td><td>5</td></tr>
	<tr><td>Mulhacén</td><td>1</td><td>Presentaciones</td><td>10</td></tr>
	<tr><td>Peñalara</td><td>1</td><td>Videoconferencia</td><td>12</td></tr>
	<tr><td>Sala 4</td><td>0</td><td>Videoconferencia</td><td>10</td></tr>
	<tr><td>Sala 5</td><td>0</td><td>Presentaciones</td><td>8</td></tr>
	<tr><td>Sala 13</td><td>0</td><td>Reuniones</td><td>6</td></tr>
	<tr><td>Sala 14</td><td>0</td><td>Reuniones</td><td>6</td></tr>
	<tr><td>Sala 15</td><td>0</td><td>Reuniones</td><td>6</td></tr>
	<tr><td>Sala 16</td><td>0</td><td>Presentaciones</td><td>10</td></tr>
	<tr><td>Sala 17</td><td>0</td><td>Videoconferencia</td><td>10</td></tr>
	<tr><td>Sala 18</td><td>0</td><td>Reuniones</td><td>10</td></tr>
	<tr><td>Sala 22</td><td>0</td><td>Reuniones</td><td>6</td></tr>
	<tr><td>Tajo</td><td>0</td><td>Presentaciones</td><td>14</td></tr>
	<tr><td>Tajuña</td><td>0</td><td>Reuniones</td><td>5</td></tr>
	<tr><td>Veleta</td><td>1</td><td>Presentaciones</td><td>10</td></tr>
</table>



<style>

#containerSalasList {
 	text-align: center;
}

#containerSalaImg {
/* 	border: 1px solid blue; */
 	overflow: visible; 
  	position: relative; 
 	width: 70%;
 	margin: auto;
}

.imgSalaDiv {
	display: block;
/* 	border: 1px solid red; */
 	position: relative;
 	padding: 0px;
 	margin: 0px;
 	width: 100%;
 	margin: auto;
}

.imgSala {
/* 	border: 2px solid red; */
 	position: absolute;
 	left: 0px;
 	top: 0px;
 	width: 100%;
 	padding: 0px;
 	margin: 0px;
}

.imgSalaP0 {
	display: block;
}
.imgSalaP1 {
	display: block;
}

#imgDot {
	position: absolute;
 	left: 0px;
 	top: 0px;
 	width: 0px;
 	height: 0px;
	z-index: 999;
}

/* ============================          Móviles en vertical
   ---------------------------------------------------------- */
@media only screen and ( max-width : 480pt ) {

#containerSalaImg {
 	width: 90%;
}

}

</style>


<script src="lib/jquery.min.js"></script>

<script>


var imgSalaSizeOrig = {};
imgSalaSizeOrig['0']={width:'1101', height:'432'};
imgSalaSizeOrig['1']={width:'724', height:'466'};


var offsetX = 0;
var offsetY = 0;

var salas = {};
var i= -1;



salas['Aliendre']={name:'Aliendre', planta:"0", x1:'1040', y1:'375', x2:'1062', y2:'413' };
/*
// old salas['Formación']={name:'Formación', planta:"0", x1:'223', y1:'269', x2:'271', y2:'307' };
*/
salas['Formación']={name:'Formación', planta:"0", x1:'795', y1:'204', x2:'764', y2:'156' };
salas['Guadalix']={name:'Guadalix', planta:"0", x1:'1028', y1:'35', x2:'1055', y2:'63' };
salas['Henares']={name:'Henares', planta:"0", x1:'1016', y1:'374', x2:'1038', y2:'414' };
salas['Jarama']={name:'Jarama', planta:"0", x1:'993', y1:'373', x2:'1015', y2:'417' };
salas['Jaramilla']={name:'Jaramilla', planta:"0", x1:'999', y1:'12', x2:'1028', y2:'35' };
salas['Lozoya']={name:'Lozoya', planta:"0", x1:'1028', y1:'12', x2:'1054', y2:'39' };
salas['Sala 13']={name:'Sala 13', planta:"0", x1:'920', y1:'68', x2:'946', y2:'98' };
salas['Sala 14']={name:'Sala 14', planta:"0", x1:'328', y1:'211', x2:'351', y2:'235' };
salas['Sala 15']={name:'Sala 15', planta:"0", x1:'351', y1:'260', x2:'327', y2:'235' };
salas['Sala 16']={name:'Sala 16', planta:"0", x1:'306', y1:'211', x2:'327', y2:'257' };
salas['Sala 17']={name:'Sala 17', planta:"0", x1:'203', y1:'269', x2:'224', y2:'308' };
salas['Sala 18']={name:'Sala 18', planta:"0", x1:'44', y1:'295', x2:'67', y2:'325' };
salas['Sala 22']={name:'Sala 22', planta:"0", x1:'44', y1:'348', x2:'67', y2:'326' };
salas['Sala 4']={name:'Sala 4', planta:"0", x1:'763', y1:'227', x2:'795', y2:'269' };
salas['Sala 5']={name:'Sala 5', planta:"0", x1:'794', y1:'225', x2:'820', y2:'263' };
salas['Tajo']={name:'Tajo', planta:"0", x1:'1058', y1:'359', x2:'1090', y2:'417' };
salas['Tajuña']={name:'Tajuña', planta:"0", x1:'1001', y1:'35', x2:'1027', y2:'63' };

salas['El Yelmo']={name:'El Yelmo', planta:"1" , x1:'517', y1:'233', x2:'571', y2:'267' };
salas['Almanzor']={name:'Almanzor', planta:"1" , x1:'517', y1:'199', x2:'571', y2:'233' };
salas['Mulhacén']={name:'Mulhacén', planta:"1" , x1:'458', y1:'5', x2:'504', y2:'59' };
salas['Aneto']={name:'Aneto', planta:"1" , x1:'411', y1:'5', x2:'458', y2:'59' };
salas['Veleta']={name:'Veleta', planta:"1" , x1:'365', y1:'5', x2:'410', y2:'62' };
salas['7 Picos']={name:'7 Picos', planta:"1" , x1:'321', y1:'199', x2:'366', y2:'233' };
salas['Almenara']={name:'Almenara', planta:"1" , x1:'278', y1:'199', x2:'323', y2:'233' };
salas['Peñalara']={name:'Peñalara', planta:"1" , x1:'4', y1:'155', x2:'64', y2:'195' };


salas["xxx"]={name:"xxx", planta:"0", x1:"0", y1:"0", x2:"50", y2:"50" };
salas["yyy"]={name:"yyy", planta:"1", x1:"0", y1:"0", x2:"50", y2:"50" };



function initToAllFloors(){

	$('#imgDot').hide();
	showAllFloors();
	resizeImgDivs();
}

function showAllFloors(){
	
// 	if( isHorizontal() ){
		$('#imgSalaDiv0').show();
		$('#imgSalaDiv1').show();
// 	} else {
// 		$('#imgSalaDiv0').show();
// 		$('#imgSalaDiv1').show();
// 	}

	console.log("..... mostradas ambas plantas");
}



function resizeImgDivs(){

	/*
	Los DIV de las imagenes no se dimensionan bien, por tanto, hay que
	ajustar el tamaño a mano
	*/

	if( isHorizontal() ){
		$('#imgSalaDiv0').height(  $('#imgSala0H').height()   );
		$('#imgSalaDiv1').height(  $('#imgSala1H').height()   );
	} else {
		$('#imgSalaDiv0').height(  $('#imgSala0V').height()   );
		$('#imgSalaDiv1').height(  $('#imgSala1V').height()   );
	}

	console.log("..... divs redimensionado");
}


function windowResized(){

// 	console.log(".....");
	
// 	imgSalaDiv = document.getElementById("imgSalaDiv");
// 	imgSala = document.getElementById("imgSala");

// 	imgSalaDiv.style.width = imgSala.style.width ;
// 	imgSalaDiv.style.height = imgSala.style.height ;

	salaChanged();
}


function salaChanged(){


	salaId = document.getElementById("salasList").value;

// 	alert(salaId);

	show(salaId);
}



/**
 * Indica si la vista de las imagenes esta en horizontal = modo pantalla grande
 * en modo movil está en vertical
 */
function isHorizontal(){

	var res = $(".imgSalaH").css("display");
	
	return res == "block" ;
}


function show(idSala){	

// 	console.log("-------------------------------------");
// 	console.log("----- sala objetivo : ("+idSala+")");


	// Cojo los datos de posicion de la sala
	var sala = salas[idSala];
	if( ! sala ){
		console.log("La sala no está definida : ("+idSala+")");
		initToAllFloors();
		return;
	}
	
	var dot = document.getElementById("imgDot");
	
	// Oculto el panel de imagen no valido
	$('#imgSalaDiv0').hide();
	$('#imgSalaDiv1').hide();
	$('#imgLabel0').hide();
	$('#imgLabel1').hide();
	// Muestro lo valido
	$('#imgSalaDiv'+sala.planta).show();
	$('#imgLabel'+sala.planta).show();
	

	var w = 0;
	var h = 0;
	var x = 0;
	var y = 0;
	
	if( isHorizontal() ){
		
		fx = $("#imgSala"+sala.planta+"H").width() / imgSalaSizeOrig[sala.planta].width ;
		fy = $("#imgSala"+sala.planta+"H").height() / imgSalaSizeOrig[sala.planta].height ;
		
		
		w = Math.abs(sala.x2 - sala.x1) * fx;
		h = Math.abs(sala.y2 - sala.y1) * fy;
		x = Math.min(sala.x1 , sala.x2) * fx + offsetX;
		y = Math.min(sala.y1 , sala.y2) * fy + offsetY;
		
	} else {
		/* Debido al giro de la imagen en modo vertical (moviles), hay que hacer
		   unos ajustes diferentes */
		
		fx = $("#imgSala"+sala.planta+"V").width() / imgSalaSizeOrig[sala.planta].height ;
		fy = $("#imgSala"+sala.planta+"V").height() / imgSalaSizeOrig[sala.planta].width ;
		
		var offsetHV = $("#imgSala"+sala.planta+"V").width() ;
		var signHV = -1;

		w = Math.abs(sala.y2 - sala.y1) * fx;
		h = Math.abs(sala.x2 - sala.x1) * fy;
		x = offsetHV - w + signHV * Math.min(sala.y1 , sala.y2) * fx + offsetY;
		y = Math.min(sala.x1 , sala.x2) * fy + offsetX ;
		
	}
	

// 	console.log("imgSala  x:"+x+" y:"+y);
// 	console.log("imgSala  W:"+w+" H:"+h);

	
	$('#imgDot').css({ 
		left: x, top: y
	}).appendTo('#imgSalaDiv'+sala.planta); //IMPORTANTE
	
	$('#imgDot').width(w).height(h);
	$('#imgDot').show();
	
	resizeImgDivs();

	
}


window.addEventListener("load", function(){

// 	alert("onload");
	initToAllFloors();
    window.addEventListener("resize", windowResized);

});

		

</script>

		
<?php
	include 'foot.php';
?>
