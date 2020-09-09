<?php 
/*
 *  charSet ISO-8859-1
 */


/**
 * Obtiene un valor de un array indexado por nombres
 */
function puGetFromArray($varArray, $key, $default=""){
    if( isset($varArray[$key])){
        return $varArray[$key];
    }else{
        return $default;
    }
}


/** Filtrado de los campos de texto de todo el portal
 * 
 * Cambia los caracteres proporcionados por otro sustitutivo
 * 
 * @param string $text valor a filtrar
 * @param string $subst cadena de sustitucion
 * @param string $Chars caracteres a reemplazar en el texto original
 * @return string Cadena modificada
 */
function puFiltraInput( $text ){
    
    
    // Estos siempre los primeros
    // '&' no se procesa pues si se hace el ; es incompatible con este
    //      y viceversa
    $text = str_replace( ";", "&semi;", $text );
    $text = str_replace( "#", "&num;", $text );
    
    $text = str_replace( "'", "&apos;", $text );
    $text = str_replace( "\"", "&quot;", $text );
    
    $text = str_replace( "$", "&dollar;;", $text );
    $text = str_replace( "%", "&percnt;", $text );
    $text = str_replace( "/", "&sol;", $text );
    $text = str_replace( "\\", "&bsol;", $text );
    $text = str_replace( "?", "&quest;", $text );
    $text = str_replace( "¿", "&iquest;", $text );
    $text = str_replace( "!", "&excl;", $text );
    $text = str_replace( "¡", "&iexcl;", $text );
    $text = str_replace( "(", "&lpar;", $text );
    $text = str_replace( ")", "&rpar;", $text );
    $text = str_replace( "[", "&lsqb;", $text );
    $text = str_replace( "]", "&rsqb;", $text );
    $text = str_replace( "{", "&lcub;", $text );
    $text = str_replace( "}", "&rcub;", $text );
    $text = str_replace( "*", "&ast;", $text );
    $text = str_replace( "+", "&plus;", $text );
    $text = str_replace( ",", "&comma;", $text );
    $text = str_replace( ".", "&period;", $text );
    $text = str_replace( ":", "&colon;", $text );
    $text = str_replace( "<", "&lt;", $text );
    $text = str_replace( ">", "&gt;", $text );
    $text = str_replace( "=", "&equals;", $text );
    $text = str_replace( "@", "&commat;", $text );
    $text = str_replace( "^", "&Hat;", $text );
    $text = str_replace( "|", "&verbar;", $text );
    $text = str_replace( "|", "&brvbar;", $text ); // &#166;
    
    // Esto al final siempre
    $text = str_replace( "\n", "<br>", $text );
    $text = str_replace( "\r", "", $text );
    
    return $text;
 
}



function pulistDir( $dirName, $includeDir, $includeFile, $withPath, $recursive ){
    
    $res = array();
    
    $d = dir($dirName);
    
    $preffix="";
    
    if( $withPath )
        $preffix = $dirName."/";
        
    while (false !== ($name = $d->read())) {
        
        if( "."==$name || ".."==$name ){
            continue;
        }
        
        if( is_dir($dirName."/".$name) ){
            if( $includeDir )
                array_push($res, $preffix.$name);
            
                if( $recursive ){
                    $dirFiles =  pulistDir( $dirName."/".$name, $includeDir, $includeFile, $withPath, $recursive );
                    $res = array_merge($res, $dirFiles);
                }
                
        } else if( is_file($dirName."/".$name) ){
            if( $includeFile )
                array_push($res, $preffix.$name);
        }
    }
    
    $d->close();
    
    return $res;
}



function pUEndsWith( $string, $endStr )
{
    $length = strlen( $endStr );
    if( !$length ) {
        return true;
    }
    return substr( $string, -$length ) === $endStr;
}



?>