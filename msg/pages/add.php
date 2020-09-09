


<div class="container text-left">
<br>
<p>Añadiendo un mensaje nuevo.</p>

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
		
		<input type="text" id="op" name="op" hidden value="add-post">
		
		<div class="form-group">
			<label for="title">Título</label>
			<input type="text" class="form-control" id="title" name="title" placeholder="Título del mensaje ..."  required>
		</div>
		
		<div class="form-group">
			<label for="content">Contenido del mensaje :</label>
			<textarea type="text" class="form-control" rows="10" id="content" name="content"  placeholder="Contenido del mensaje..." required></textarea>

		</div>

	<br>

    <div class="container text-center">
    		<button type="submit" class="btn btn-primary" >Aceptar</button>
    </div>
	</form>
</div>


