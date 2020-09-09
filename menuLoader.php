<?php
/**
 * Version del cargador V-02
 *
 * Esta version es una vez hecha la reforma del comedor que tiene
 *
 * 1� TRAD.
 * 2� TRAD.
 * BUFFET ENSALADA
 * ENSALADA
 * 1� VEG.
 * 2� VEG.
 * PLANCHAS
 * TENDENCIA
 * POSTRE
 *
 * Se basa en un JSON como esto
 *
 *  {
  "menus": [
    {
      "fecha": "20190204",
      "Primero": {
        "Tradicional": [
          "Patatas a la riojana",
          "Calabac�n relleno de carne"
        ],
        "Vegetariano": [
          "Espinacas con patata al vapor"
        ]
      },
      "Segundo": {
        "Tradicional": [
          "Fogonero a la bilba�na",
          "Carne de pincho estilo moruno"
        ],
        "Vegetariano": [
          "Hamburguesa de legumbres con huevo, mahonesa y pepinillo"
        ]
      },
      "Ensalada": [
        "Buffet de ensalada",
        "Ensalada italiana"
      ],
      "Plancha": [
        "Pollo plancha",
        "Filete de ternera",
        "Fogonero a la plancha"
      ],
      "Tendencia": "Hamburguesa de ternera con cebolla caramelizada",
      "Postre": "Variedad de postres"
    },
 ,......
 ]}
 
 */


	$headTitle="Menu Loader";

	include 'head.php';

	$USO_ERROR="";
	$DATA_MENU="";
	$isPost = isset($_POST["passwd"]);
	
	if( $isPost ){
		$DATA_MENU = $_POST["content"];
		if( PASSWD_LOADER != $_POST["passwd"] ){
			$USO_ERROR="Contrase�a err�nea";
			$isPost = false;
		} else {
			$USO_ERROR = UMW_processLoad($DATA_MENU);
			if( strlen($USO_ERROR) > 0 )
				$isPost=false;
		}
			
	}
	
	if( "" != $USO_ERROR ){
?>
		<p class="avisoERROR">ERROR: <?=$USO_ERROR?></p>
<?php 		
	}
	
	if( $isPost )
		include 'menuLoaderPost.php';
	else
		include 'menuLoaderPre.php';


function UMW_processLoad( $data ){
    
//     $data='{"menus": [{"fecha": "20190204","Primero": {"Tradicional":["Patatas a la riojana","Calabac�n relleno de carne"],"Vegetariano":["Espinacas con patata al vapor"]},"Segundo":{"Tradicional": ["Fogonero a la bilba�na","Carne de pincho estilo moruno"],"Vegetariano": ["Hamburguesa de legumbres con huevo, mahonesa y pepinillo"]},"Ensalada": ["Variedad de ingredientes naturales","Ensalada italiana"],"Plancha": ["Pollo plancha","Filete de ternera","Fogonero a la plancha"],"Tendencia": "Hamburguesa de ternera con cebolla caramelizada","Postre": "Variedad de postres"},{"fecha": "20190205","Primero": {"Tradicional":["Crema de guisantes con virutas de jam�n","Fideu� de marisco"],"Vegetariano":["Coliflor a la gallega"]},"Segundo":{"Tradicional": ["Filete de merluza con ajos tiernos","Meloso de ternera en su jugo con verduras"],"Vegetariano": ["Rag� de tomate pera con alubias"]},"Ensalada": ["Variedad de ingredientes naturales","Ensalada mixta"],"Plancha": ["Salchichas ","Filete de ternera","Filete de merluza con ajos tiernos"],"Tendencia": "Wok de fideos chinos, salm�n y salsa de ostras","Postre": "Variedad de postres"},{"fecha": "20190206","Primero": {"Tradicional":["Sopa de olla","Pimientos de piquillo con carne"],"Vegetariano":["Acelgas salteadas con cebolla, ajo y piment�n"]},"Segundo":{"Tradicional": ["Pescado fresco seg�n lonja","Cocido completo"],"Vegetariano": ["Timbal de verduras con crema de espinacas y queso"]},"Ensalada": ["Variedad de ingredientes naturales","Ensalada campera"],"Plancha": ["Lomo a la plancha","Filete de ternera","Pescado fresco"],"Tendencia": "Hamburguesa de ternera con bac�n, idiaz�bal y mostaza de albahaca","Postre": "Variedad de postres"},{"fecha": "20190207","Primero": {"Tradicional":["Crema de verduras","Arroz con bacalao"],"Vegetariano":["Hummus de alubias rojas con crudit�s "]},"Segundo":{"Tradicional": ["Pescado fresco seg�n lonja","Cuarto trasero de pollo asado"],"Vegetariano": ["Bocaditos de cabrales"]},"Ensalada": ["Variedad de ingredientes naturales","Ensalada Lorens"],"Plancha": ["Solomillo de cerdo","Filete de ternera","Pescado fresco"],"Tendencia": "Wok de fideos chinos, salm�n y salsa de ostras","Postre": "Variedad de postres"},{"fecha": "20190208","Primero": {"Tradicional":["Sopa de ajo con queso al grat�n","Tortellini con salsa charcutera"],"Vegetariano":["Br�coli con patatas al vapor"]},"Segundo":{"Tradicional": ["Caz�n en adobo frito","Alb�ndigas con salsa de setas"],"Vegetariano": ["Lasa�a vegetariana con bechamel verde"]},"Ensalada": ["Variedad de ingredientes naturales","Ensalada de alubias con bacalao, at�n y huevo duro"],"Plancha": ["Pechuga de pavo","Filete de ternera","Caz�n a la plancha"],"Tendencia": "Hamburguesa de pollo crujiente con coles y queso azul","Postre": "Variedad de postres"}]}';
    
	$data = str_replace("\r", "", $data);
	$data = str_replace("\n", "", $data);
	
	
	
	$data = json_decode( utf8_encode($data), true);
	
	
	
	if( ! isset($data["menus"]) )
	    return "No existe el objeto principal 'menus'";
	    
	$data = $data["menus"];
	
	
	$menuAllDays = array();

	for ($i = 0; $i < sizeof($data); $i++) {
	    
	    $menuDia = $data[$i];
	    
	    //--------------------------- verifico FECHA
	    $vv = $menuDia["fecha"];
	    
	    if( ! isset($vv) ){
	        return "Dia:".$i." - No existe el objeto 'fecha'";
	    }
	        
	    if( strlen($vv)!=8 ){
	        return "Dia:".$i." - Fecha longitud no valida >".$vv."<";
        }
            
        if( ($vv*2)/2 != $vv ){
            return "Dia:".$i." - Fecha contenido no valido >".$vv."<";
        }
        
        //--------------------------- verifico Primero
        $vv = $menuDia["Primero"];
        if( ! isset($vv) ){
            return "Dia:".$i." - No existe el objeto 'Primero'";
        }
        
        //--------------------------- verifico Primero/Tradicional
        $vv = $menuDia["Primero"]["Tradicional"];
        if( ! isset($vv) ){
            return "Dia:".$i." - No existe el objeto 'Primero/Tradicional'";
        }
        
        //--------------------------- verifico Primero/Vegetariano
        $vv = $menuDia["Primero"]["Vegetariano"];
        if( ! isset($vv) ){
            return "Dia:".$i." - No existe el objeto 'Primero/Vegetariano'";
        }
        
        
        //------------------------------
        
        
        
        //--------------------------- verifico Segundo
        $vv = $menuDia["Segundo"];
        if( ! isset($vv) ){
            return "Dia:".$i." - No existe el objeto 'Segundo'";
        }
        
        //--------------------------- verifico Segundo/Tradicional
        $vv = $menuDia["Segundo"]["Tradicional"];
        if( ! isset($vv) ){
            return "Dia:".$i." - No existe el objeto 'Segundo/Tradicional'";
        }
        
        //--------------------------- verifico Segundo/Vegetariano
        $vv = $menuDia["Segundo"]["Vegetariano"];
        if( ! isset($vv) ){
            return "Dia:".$i." - No existe el objeto 'Segundo/Vegetariano'";
        }
        
        
        
        //------------------------------
        
        
        
        
        //--------------------------- verifico Ensalada
        $vv = $menuDia["Ensalada"];
        
        if( ! isset($vv) ){
            return "Dia:".$i." - No existe el objeto 'Ensalada'";
        }
        
   
        
     
        
        //--------------------------- verifico Plancha
        $vv = $menuDia["Plancha"];
        
        if( ! isset($vv) ){
            return "Dia:".$i." - No existe el objeto 'Plancha'";
        }
        
        //--------------------------- verifico Tendencia
        $vv = $menuDia["Tendencia"];
        
        if( ! isset($vv) ){
            return "Dia:".$i." - No existe el objeto 'Tendencia'";
        }
        
        //--------------------------- verifico Postre
        $vv = $menuDia["Postre"];
        
        if( ! isset($vv) ){
            return "Dia:".$i." - No existe el objeto 'Postre'";
        }
            
        
	    
	    UMW_utf8_to_iso( $menuDia );
	    
	  
	    array_push( $menuAllDays, $menuDia );
		
	}

	// Descargo todo a fichero
	$res = UMW_saveAllDays( $menuAllDays );
// 	$res ="ERROR -de desarrollo";
	
	return $res; 
}

// Cambia todas las cadenas de UTF8 a ISO-8859-1
function UMW_utf8_to_iso( & $data ){

    if( ! is_array($data) ){
        if( is_string($data) ){
            $data = utf8_decode($data);
        }
        return;
    }
    $keys = array_keys($data);
    foreach ( $keys as $k ){
        UMW_utf8_to_iso( $data[$k] );
    }
}

function UMW_saveAllDays( &$dataAllDays ){

	global $dataSaved;
	
	for ($i = 0; $i < sizeof($dataAllDays); $i++) {
		
		if( ! UMW_writeData( $dataAllDays[$i], "fecha" ) ){
			return "Error al salvar datos de menu para (".print_r($dataDia,true).")";
		}
	}

	$dataSaved = $dataAllDays;
	
	return "";
}


function UMW_procesarGrupo( &$data, &$i, &$dataDia, $tipo, $tipoNombre ){

	while( true && $i<sizeof($data) ){
		
		$v = trim($data[$i]);
		
		if( "" != $v ){
			if( UMW_startsWith($v, "#") )
				break;
				
			array_push($dataDia[$tipo], $v);
		}
		$i++;
	}
	if( sizeof($dataDia[$tipo]) == 0 ){
		return "A la altura de la linea ".$i." no se encontro $tipoNombre plato (".$v.")";
	}
	return "";
}

include 'foot.php';

?>
