<?php 
if( !isset($icons) )
	$icons=true;
?>

<?php if( $icons ){ ?>
<table id="headBox" ><tr>
<td id="headLeft"><img id="headLogo" src="img/logo.png"></td>
<td id="headCenter"><span id="headTitle"><?=$headTitle?></span></td>
<td id="headRight" nowrap>
<a class="headLink" href="sos.php"><img class="headLinkImg" src="img/ico-sos.jpg"></a>
<a class="headLink" href="."><img class="headLinkImg" src="img/ico-home.png"></a>
</td>
</tr></table>
<?php } else { ?>
<img id="headLogoBig" src="img/logo.png" >
<a class="headLink" style="float: right;" href="sos.php"><img class="headLinkImg" src="img/ico-sos.jpg"></a>
<?php } ?>

	
