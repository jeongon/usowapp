<?php
/**
 * ¡¡OJO!! Antes de empezar una sesion o recuperarla, no se puede escribir nada al stream de salida
 * 
 */

session_start();


//------------------------------------------------------
# Variables de configuracion
define("USES_DEBUG", true);

define("USES_ROBOTS", false);
define("USES_SEGS_PAGE", 5);
define("USES_MAX_SLEEP", 10);
define("USES_MAX_ACCESOS", 1000);
define("USES_ERR_CODE_MAX_ACCESOS", 101);
define("USES_MAX_TIME_VALIDEZ_MSEG", 3600*12);


//------------------------------------------------------
# Variables de nombres
define("USES_STR_NAME","GSession");
define("USES_STR_ID","USES.id");
define("USES_STR_TIME_INI","USES.timeIni");
define("USES_STR_COUNTER","USES.counter");
define("USES_STR_TIME_LAST","USES.timeLast");
define("USES_STR_VELOCITY","USES.velocity");
define("USES_STR_ERR_CODE","USES.error.code");
define("USES_STR_ERR_NUM","USES.error.num");
define("USES_STR_URL_LAST","USES.url.last");
define("USES_STR_LOGGED","USES.logged");

/** Crea una sesion nueva */
function USES_newSession(){
    
	global $_SESSION;
	
	$_SESSION[USES_STR_NAME] = array( 
				  USES_STR_ID => session_id()
				, USES_STR_TIME_INI => time()-1
				, USES_STR_TIME_LAST => time()
				, USES_STR_COUNTER => 0
				, USES_STR_VELOCITY => 0
				);
}

/** Obtiene una variable de la sesion 
 * 
 * @return $def si no existe
 * */
function USES_getVar( $name, $def=NULL ){
	
	global $_SESSION;
	
	if( ! isset($_SESSION[USES_STR_NAME][$name]) ){
	    return $def;
	}
	$res = $_SESSION[USES_STR_NAME][$name];

	return $res;
}

/** Asigna una variable de la sesion */
function USES_setVar( $name, $value ){
	
	global $_SESSION;
	
	$_SESSION[USES_STR_NAME][$name]=$value;
}
	
/** Obtiene el ID de la sesion 
 * 
 * @return NULL si no hay sesion
 * */
function USES_getId(){
	return USES_getVar( USES_STR_ID );
}
	


/** Obtiene un string con una representacion de la sesion */
function USES_toString(){
	
    global $_SESSION;
	
	return print_r($_SESSION[USES_STR_NAME], true );
}

/** Borra toda la informacion de la sesion en curso */
function USES_reset(){
	USES_newSession();
}

/** Indica si existe sesion */
function USES_exists(){
	return "" != USES_getId() ;
}



/** Recupera la ultima URL memorizada 
 * 
 * @return NULL si no hay sesion
 * */
function USES_getLastUrl(){
	return USES_getVar(USES_STR_URL_LAST);
}



/** Una forma simple de gestionar un LOGIN
 * Esto es la activacion */
function USES_loginOn(){
    
    USES_setVar(USES_STR_LOGGED, true);
}


/** Una forma simple de gestionar un LOGIN
 * Esto es la DES-activacion */
function USES_loginOff(){
    
    USES_setVar(USES_STR_LOGGED, false);
}



/** Una forma simple de gestionar un LOGIN
 * Esto es la verificacion TRUE = Login activo */
function USES_loginIsOn(){
   return USES_getVar(USES_STR_LOGGED, false);
}



/** AÃ±ade un error */
function USES_errorAdd(){
    $numErr = USES_errorGetNum();
    USES_setVar(USES_STR_ERR_NUM,$numErr+1);
}

/** Obtiene el numero de errores 
 * 
 * @return int 0 si no hay valor previo
 * */
function USES_errorGetNum(){
	return USES_getVar(USES_STR_ERR_NUM, 0);
}

//--------------------------------------------------------
# control de Robots (INI)
/**
 * Registra una peticion dentro de la sesion
 * @return TRUE si va bien, FALSE si no se permite el acceso
 */
function USES_countOne(){

	$count = USES_getVar(USES_STR_COUNTER,0) + 1;
	
	if( $count>USES_MAX_ACCESOS ){
		USES_setVar(USES_STR_ERR_CODE,USES_ERR_CODE_MAX_ACCESOS);
		return FALSE;
	}
	
	USES_setVar(USES_STR_COUNTER, $count);

	$timeLast = time();
	USES_setVar(USES_STR_TIME_LAST, $timeLast);

	$deltaTime = $timeLast - USES_getVar(USES_STR_TIME_INI);

	if( $deltaTime<1 ){
		sleep(1);
		$deltaTime = $deltaTime + 1;
	}
		
	$velocity =  $deltaTime / $count;
	USES_setVar(USES_STR_VELOCITY, $velocity);

	if( $count<2 )
		return TRUE;
		
	// Como mucho una peticion cada USES_SEGS_PAGE segundos de media
	// No uso pÃ¡gina de sobrecarga, hago sleep 
	//		 $this->sobrecarga(1000);
	
	

		
		
	// Como mucho una peticion cada 2 segundos de media
	if( $velocity<USES_SEGS_PAGE && $count>4 ){
	
		$espera = ( USES_SEGS_PAGE * $count ) - $deltaTime;


		if( $espera > USES_MAX_SLEEP ){
			exit();
		}

		if( $espera > 0 )
			sleep($espera);
	}

	return TRUE;
}

# control de Robots (FIN)
//--------------------------------------------------------



//--------------------------------------------------------
# Codigo de gestion de la sesion

# Crear la sesion si procede
if( ! USES_exists() ){
	USES_newSession();
}


# Control robots
if( USES_ROBOTS ){
	if( ! USES_countOne() ){
		$txt="Error : CODE(".USES_getVar(USES_STR_ERR_CODE).")";
		echo $txt;
		exit();
	}
}

# Pongo limite al tiempo de validez de una sesion
{
	$sesionLength = time() - USES_getVar(USES_STR_TIME_INI);
	if( $sesionLength > USES_MAX_TIME_VALIDEZ_MSEG ){
		USES_reset();
	}
}

?>