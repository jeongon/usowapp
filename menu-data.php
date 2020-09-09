
<?php 


$fechaTexto=UMW_getDateString($menuData["fecha"]);

// Concateno los vegetarianos a los tradicionales
foreach ($menuData["Primero"]["Vegetariano"] as &$valor) {
    array_push( $menuData["Primero"]["Tradicional"], "(Veg.) ".$valor);
}

foreach ($menuData["Segundo"]["Vegetariano"] as &$valor) {
    array_push( $menuData["Segundo"]["Tradicional"], "(Veg.) ".$valor);
}

$primeros = $menuData["Primero"]["Tradicional"];
$segundos = $menuData["Segundo"]["Tradicional"];

?>
<table class="tblMenu" >
	<thead>
		<tr>
			<td colspan="4"><?=$fechaTexto?></td>
		</tr>
	</thead>
	<tr>
		<td class="tblSubtitle td-50">Primeros</td>
		<td class="tblSubtitle td-50">Segundos</td>
	</tr>

<?php
	$maxP1 = sizeof($primeros);
	$maxP2 = sizeof($segundos);
	$vMax = max($maxP1,$maxP2);
	for ($j = 0; $j < $vMax; $j++) {
	    $p1=""; if( $maxP1>$j ) $p1=$primeros[$j];
		$p2=""; if( $maxP2>$j ) $p2=$segundos[$j];
?>
	<tr>
		<td class="td-50"><?=$p1?></td>
		<td class="td-50"><?=$p2?></td>
	</tr>
<?php
	}
	
	// -------------- ENSALADAS y PLANCHA----------------
?>
	
	<tr>
		<td class="tblSubtitle td-50">Ensaladas</td>
		<td class="tblSubtitle td-50">Plancha</td>
	</tr>

<?php

    $ensaladas = $menuData["Ensalada"];
    $plancha   = $menuData["Plancha"];

    $maxP1 = sizeof($ensaladas);
    $maxP2 = sizeof($plancha);
	$vMax = max($maxP1,$maxP2);
	for ($j = 0; $j < $vMax; $j++) {
	    $p1=""; if( $maxP1>$j ) $p1=$ensaladas[$j];
	    $p2=""; if( $maxP2>$j ) $p2=$plancha[$j];
?>
	<tr>
		<td class="td-50"><?=$p1?></td>
		<td class="td-50"><?=$p2?></td>
	</tr>
<?php
	}



	
	// -------------- TENDENCIA ----------------
?>
	
	<tr>
		<td colspan="2" class="tblSubtitle">Tendencia</td>
	</tr>
<?php
    if(! is_array( $menuData["Tendencia"] ) ){
        $menuData["Tendencia"] = array( $menuData["Tendencia"] );
    }
    $vMax = sizeof($menuData["Tendencia"]);
	for ($j = 0; $j < $vMax; $j++) {
	    $pp=$menuData["Tendencia"][$j];
?>
	<tr>
		<td colspan="2"><?=$pp?></td>
	</tr>
<?php
	}

	

	
	// -------------- POSTRES ----------------
?>
	
	<tr>
		<td colspan="2" class="tblSubtitle">Postres</td>
	</tr>
<?php
    if(! is_array( $menuData["Postre"] ) ){
        $menuData["Postre"] = array( $menuData["Postre"] );
    }
    $vMax = sizeof($menuData["Postre"]);
	for ($j = 0; $j < $vMax; $j++) {
	    $pp=$menuData["Postre"][$j];
?>
	<tr>
		<td colspan="2"><?=$pp?></td>
	</tr>
<?php
	}
?>

</table>