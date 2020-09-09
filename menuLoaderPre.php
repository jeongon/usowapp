
		<form action="<?="menuLoader.php"?>" method="post">
			<br>
			<label for="passwd">Contraseña : </label>
			<input type="password" name="passwd" id="passwd" value="" style="border: 1px solid black;"><br>
			<br><br>
			<label for="content">Contenido</label><br>
			<textarea rows="20" cols="80" id="content" name="content">
<?php 
if( $DATA_MENU != "" ){
	echo $DATA_MENU;
} else {
?>
			
. Esto es un ejemplo......
{
  "menus": [
    {
      "fecha": "20190204",
      "Primero": {
        "Tradicional": [
          "Patatas a la riojana",
          "Calabacín relleno de carne"
        ],
        "Vegetariano": [
          "Espinacas con patata al vapor"
        ]
      },
      "Segundo": {
        "Tradicional": [
          "Fogonero a la bilbaína",
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
 ,  ... mas items ...
 ]}

<?php 
}
?>			

			</textarea>
			<br>
			<button class="botAction" type="submit" >Enviar</button>


		</form>
