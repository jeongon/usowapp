<?php

/**
 * Construye una variable con los datos de configuracion para la parte superior
 * de la pagina y los metatags del inicio 
 */
function pAre_makeDataHead( $titleWin, $keys, $desc, $titleDoc, $subMenuToOpen, $menuItemToActivate ){
   
    $res = [];
    $res[ARE_CTE_ID_TITLE_WIN] = "Arevalillo - ".$titleWin;
    $res[ARE_CTE_ID_TITLE_DOC] = $titleDoc;
    $res[ARE_CTE_ID_HEAD_KEYS] = "arevalillo,".$keys;
    $res[ARE_CTE_ID_HEAD_DESC] = $desc;
    $res[ARE_CTE_ID_SUBMENU_TO_OPEN] = $subMenuToOpen;
    $res[ARE_CTE_ID_MENUITEM_TO_ACTIVATE] = $menuItemToActivate;
    

    
    return $res;
}






// Genera las fotos a poner en el panel superior
function pAre_fotoTopBar(){
    
    // lastPhoto -> es para que no salgan dos seguidas iguales
    
    $fotoList=array("basic","antiguas","objetos","plantas","potro","puertas","ventanas");
    
    $idx = rand(0, count($fotoList)-1);
    
    $fotoList=GUTL_listDir( ARE_CTE_DIR_FOTOS.$fotoList[$idx], false, true, true );
    $idx = rand(0, count($fotoList)-1);
    
    
    $foto = $fotoList[$idx];
    
    
    $notValid = [ "/artesa.jpg", "/clase_del_74.jpg","/v_panoramica_total.jpg","/potro_arco_trasero.jpg" ];
    foreach ($notValid as $v) {
        
        if( GUTL_endsWith( $foto, $v ) ){
            $foto = pAre_fotoTopBar();
        }
    }
    
    return $foto;
}


function pAre_getFromArray($varArray, $key, $default=""){
    if( isset($varArray[$key])){
        return $varArray[$key];
    }else{
        return $default;
    }
}


/**
 * Filtrado de los campos de texto de todo el portal
 */
function pAre_filtraInput( $text ){
    
    return GUTL_strScapeHTMLChars($text);
    
}



//   <?php pFrLeft_IconNew(); ? >

function pAre_iconNew(){
    echo "<img src='".APP_HOME_REL."/img/are-new.gif' width='10' alt='[N]' border='0'>";
}



?>