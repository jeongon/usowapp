


<div class="container text-left">
<br>
<p>Introduce tus credenciales.</p>

<?php 
if( isset($ERR_STR) ){
?>
  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Error: </strong> <?= $ERR_STR ?>
  </div>
<?php     
}

?>
<br>

	<form action="mensajes.php" method="post">
		
		<input type="text" id="op" name="op" hidden value="login-post">
		
		<div class="form-group">
			<label for="user">Usuario :</label> <input type="text" class="form-control" id="user" name="user" placeholder="Tu nombre de usuario ..."  required>
		</div>
		
		<div class="form-group">
			<label for="passwd">Contraseña :</label> <input type="password" class="form-control" id="passwd" name="passwd"  placeholder="Tu contraseña..." required>

		</div>

	<br>

    <div class="container text-center">
    		<button type="submit" class="btn btn-primary" >Aceptar</button>
    </div>
	</form>
</div>


