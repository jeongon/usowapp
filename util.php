<?php 

define("ARR_FECHA", "fecha");
define("ARR_P1", "p1");
define("ARR_P2", "p2");
define("ARR_PR", "pr");
define("ARR_PP", "pp");
 

function UMW_startsWith($string, $query) {
	if( strlen($query) > strlen($string) )
		return FALSE;
		
    return substr($string, 0, strlen($query)) === $query;
}

/**
 * Genera el nombre de fichero dónde estará el menu a partir de la fecha 
 *
 * @param fecha en formato YYYYMMDD
 */
function UMW_getFilenameFromDate( $date ) {
	
	$year=substr($date, 0, 4);
	$month=substr($date, 4, 2);
	$day=substr($date, 6, 2);
	
	return "./".DIR_MENU_REL."/".$year."/".$month."/".$day.".txt";
	
}


/**
 * Escribe el contenido de una entrada, no verifica el formato del objeto
 * 
 * 		$data = array("fecha"->""
 * 					,"p1"->array(string[])
 * 					,"p2"->array(string[])
 * 					,"pr"->array(string[])
 * 					,"pp"->array(string[])
 * 					);
 * 
 * @return TRUE si todo ha ido bien, FALSE si hay error
 */
function UMW_writeData( &$dataDia, $dateField ){

    $fileName = UMW_getFilenameFromDate($dataDia[$dateField]);

	if( ! file_exists(dirname($fileName)) ){
		mkdir( dirname($fileName), 0777, true);
	}
	
	$res = file_put_contents($fileName, serialize($dataDia));
	
	if( $res!=FALSE )
		$res = TRUE;
		
	return $res;
}

/**
 * Obtiene el contenido de una entrada en el formato indicado
 * 
 * 		$data = array("fecha"->""
 * 					,"p1"->array(string[])
 * 					,"p2"->array(string[])
 * 					,"pr"->array(string[])
 * 					,"pp"->array(string[])
 * 					);
 * 
 * @param string $date en formato YYYYMMDD
 */
function UMW_readData( $date ){

	$file = UMW_getFilenameFromDate($date);
	$data = unserialize( file_get_contents($file) );
	
	return $data;
}

/**
 * Genera la fecha en formato YYYYMMDD a partir del INT
 * 
 * @param int $time 
 */
function UMW_timeToStrYMD( $time ){
	
	return date("Ymd", $time);
}



/**
 * Genera la fecha de un dia contiguo en formato YYYYMMDD a partir
 * de una fecha en el mismo formato.
 * Si $forward=TRUE obtiene el siguiente dia de L-V
 * Si $forward=FALSE obtiene el anterior dia de L-V 
 */
function UMW_getDateContiguo( $date, $forward=TRUE ){

	$interval = new DateInterval('P1D');
	if( !$forward )
		$interval->invert = 1; //Make it negative. 
	
	$year=substr($date, 0, 4);
	$month=substr($date, 4, 2);
	$day=substr($date, 6, 2);

// 	$dt = new DateTime("now", new DateTimeZone("Europe/Madrid") );
	$dt = date_create();
	$dt->setDate($year,$month,$day);
	$dt->add($interval);
	
	$diaSemana = $dt->format('w');
	if( $diaSemana==0 || $diaSemana==6 ){
		return UMW_getDateContiguo( $dt->format("Ymd"), $forward );
	}
	
	return $dt->format("Ymd");
}

/**
 * Obtiene la fecha pasada en formato string tipo Miercoles, 25 de Sept de 2015
 * 
 * @param string $date en formato YYYYMMDD
 */
function UMW_getDateString( $date ){
	
	$year=substr($date, 0, 4);
	$month=substr($date, 4, 2);
	$day=substr($date, 6, 2);
	
// 	$dt = new DateTime("now", new DateTimeZone("Europe/Madrid") );
	$dt = date_create();
	$dt->setDate($year,$month,$day);
	
	$textDayWeek = $dt->format("D");
	$textDay = $dt->format("j");
	$textMonth = $dt->format("M");
	$textYear = $dt->format("Y");
	
	$textDayWeek = UMW_translateDay3letter( $textDayWeek );
	$textMonth = UMW_translateMonth3letter( $textMonth );
	
	$dayText = $textDayWeek.", ".$textDay." de ".$textMonth." de ".$textYear;
	
	return $dayText;
	
}

function UMW_translateDay3letter( $textDayWeek ){
	switch ($textDayWeek){
		case "Mon":
			return "Lunes";
		case "Tue":
			return "Martes";
		case "Wed":
			return "Miércoles";
		case "Thu":
			return "Jueves";
		case "Fri":
			return "Viernes";
		case "Sat":
			return "Sábado";
		case "Sun":
			return "Domingo";
		default:
			return $textDayWeek;
	}
}


function UMW_translateMonth3letter( $textMonth ){
	switch ($textMonth){
		case "Jan":
			return "Enero";
		case "Feb":
			return "Febrero";
		case "Mar":
			return "Marzo";
		case "Apr":
			return "Abril";
		case "May":
			return "Mayo";
		case "Jun":
			return "Junio";
		case "Jul":
			return "Julio";
		case "Aug":
			return "Agosto";
		case "Sep":
			return "Septiembre";
		case "Oct":
			return "Octubre";
		case "Nov":
			return "Noviembre";
		case "Dec":
			return "Diciembre";
		default:
			return $textMonth;
	}
}

?>