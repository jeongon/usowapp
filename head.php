<?php

ini_set("default_charset", "ISO-8859-1");

/*
 * Ya que todos las paginas hacen referencia a este fichero, aprovecho para poner aqui
 * las constantes
 */
define("PASSWD_LOADER", "usoforever");

define("DIR_MENU_REL", "files/menu");

/** ---------------  FIN constantes -------------------------- */

include("util.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">


<meta name="expires" content="<?php  echo date("D, d M Y H:i:s", time()+(60*60*24) );  ?>"> <!-- 1 dia de caducidad -->


<link rel="shortcut icon" href="img/logo-ico.ico"/>
<title><?=$headTitle=="" ? "" : $headTitle." - "?>USO Indra SF # Movil</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php  if( defined("USE_BOOTSTRAP") ){  ?>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php  } ?>


<link rel="stylesheet" href="_styles.css?20200901">

</head>
<body>
	<div id="container">
<?php

	include("headBar.php");
	
?>