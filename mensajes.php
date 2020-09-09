<?php
	$headTitle="Mensajes";
	
	include 'lib/uso-session.php'; // Gestion de sesion
	include 'lib/utils.php';
	
	define("USE_BOOTSTRAP",true); // Para indicar a head.php que incluya librerias BOOTSTRAP
	include 'head.php';
	

// Miro si es un POST
$op = puFiltraInput( puGetFromArray($_POST, "op", null) );
if( $op != null ){
    $VARS = $_POST;
} else {
    $op = puFiltraInput( puGetFromArray($_GET, "op", null) );
    // Miro si es un GET
    if( $op != null ){
        $VARS = $_GET;
    } else {
        $op = "list";
    }
}

if( USES_loginIsOn() ){
?>    
<div class="container text-right" >
    <button class="btn btn-secondary m-2" onclick="goToAddMsg();">Añadir Msg</button>
    <button class="btn btn-secondary m-2" onclick="logout();">Cerrar sesión</button>
</div>
	<script>
	function goToAddMsg(){
		window.location = "<?= $_SERVER['PHP_SELF'] ?>?op=add";
	}
	function logout(){
		var answer = confirm("¿ Cerrar sesión ?")
		if (answer){
			window.location = "?op=logout";
		}
	}
			
	</script>    
<?php
}
?>

<a style="color:red; position:absolute; bottom:0px; left:0px;" href="?op=login">O</a>

<?php
// Procesamos las distintas operaciones
switch ($op) {
    
    case "list":
        include 'msg/pages/list.php';
        break;
        
    case "show":
        include 'msg/pages/show.php';
        break;
        
    case "add":
        include 'msg/pages/add.php';
        break;
        
    case "edit":
        include 'msg/pages/list.php';
        break;
                
    case "del":
        include 'msg/pages/list.php';
        break;
        
    case "hide":
        include 'msg/pages/list.php';
        break;
        
    case "hideOff":
        include 'msg/pages/list.php';
        break;
        
    case "login":
        include 'msg/pages/login.php';
        break;
        
    case "login-post":
        $usr = puFiltraInput( puGetFromArray($VARS, "user", "") );
        $passwd = puFiltraInput( puGetFromArray($VARS, "passwd", "") );
        
        if( $usr!="uso" && $passwd!="uso" ){
            $ERR_STR = "¡¡ Usuario y/o contraseña erróneos !!";
            include 'msg/pages/login.php';
            break;
        }
        USES_loginOn();
        ?>
        <script>
          window.location = "<?= $_SERVER['PHP_SELF'] ?>";
        </script>
        <?php     
        break;
        
    case "logout":
        USES_loginOff();
        ?>
        <script>
        window.location = "<?= $_SERVER['PHP_SELF'] ?>";
        </script>
        <?php     
        break;
        
    default:
        ;
    break;
}
?>

		
<?php
	include 'foot.php';
?>