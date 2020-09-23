




<div class="d-flex flex-column mt-3 text-left">

<div class="p-2 ">Listado de los mensajes publicados.</div>






<?php 



// Recojo los ficheros
$files = pulistDir( "msg/data", false, true, true, true );

// Filtrado de los ficheros indice (los titulos)

$msgs = [];
$idx=0;
for ($i = 0; $i < count($files); $i++) {
    $f = $files[$i];
    if( pUEndsWith( $f, ".tit" ) ){
        $msgs[$idx] = $f;
        $idx++;
    }
}

?>

------------- hay que paginar esto ----------------- <br>

<div class="container mt-3">

  
<?php for( $i = 0; $i < count($msgs); $i++)  { 
    
    $name = basename( $msgs[$i] );
    
    
    ?>

  <div class="d-flex mb-3">

    <div class="p-2 text-left"><?= $name ?></div>
    <div id="msg-<?= $name ?>"class="p-2 text-left">???</div>

    <div class="p-2 flex-fill text-left">

          <!-- onclick='showMessage("<?= $msgs[$i] ?>","<?= include $msgs[$i] ?>")'     -->

      
      <A data-msg-title="<?= include $msgs[$i] ?>"
         data-msg-filetit="<?= $msgs[$i] ?>"
          

          data-toggle="modal" data-target="#contentParent"

      ><?= include $msgs[$i] ?></A>
      

    </div>

    <script>
      
      </script>

      <div class="p-2 text-left">+</div>
      <div class="p-2 text-left">-</div>
      

  </div>

    
<?php } ?>  
  


<!-- The Modal 
<div class="modal" id="contentParent">
-->

<div class="modal fade" id="contentParent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 id="contentTitle" class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
        >&times;</button>
      </div>

      <!-- Modal body -->
      <div id ="content" class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button  type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<script>

  
  //onclick='closeDiv()'

  $.ajaxSetup ({
      // Disable caching of AJAX responses
      cache: false
  });


    function showMessage(fileTit,titulo){
      fileTit=fileTit.replace(".tit",".txt");
          $("#contentTitle").text(titulo);
          $("#content").load("../"+fileTit);
          openDiv();
    }






    DIV_CONTENT='#contentParent';
    function closeDiv(){
      // $(DIV_CONTENT).hide();
      $(DIV_CONTENT).modal('hide')
    }

    function openDiv(){
      
      // $(DIV_CONTENT).show();
      $(DIV_CONTENT).modal('show')
    }




    // console.log($(DIV_CONTENT))
    $(DIV_CONTENT).on('show.bs.modal', function (e) {
      fromElement=$(e.relatedTarget);
      //title
      title=fromElement.data('msg-title');
      
      //body (recibimos nombre fichero titulo)
      fileTit=fromElement.data('msg-filetit');
      fileBody=fileTit.replace(".tit",".txt");

      //actualizamos
      $("#contentTitle").text(title);
      $("#content").load("../"+fileBody);

    })

    $(DIV_CONTENT).on('shown.bs.modal', function(){
      // alert("tras mostrarse");
    });

    $(DIV_CONTENT).on('hide.bs.modal', function(){
      // alert("antes de hide");
    });

    $(DIV_CONTENT).on('hidden.bs.modal', function(){
      // alert("tras  hide");
    });
</script>


<!-- Verificacion de leido o no --> 
<script>

function checkCookies(){
<?php for( $i = 0; $i < count($msgs); $i++) {

	$name = basename( $msgs[$i] );
?>  
	checkLeido("msg-<?= $name ?>");
    
<?php } ?>
}

function checkLeido( id ){
	visto = isViewed(id);
	
	obj = document.getElementById(id);
	
	if( visto ){
		obj.innerHTML = "Leido";
	} else {
		obj.innerHTML = "Pendiente";
	}
	 
}

/* Indica si un mensaje esta leido */ 
function isViewed(id) {
    
    var res = GCookieGet(id);
    if( res == null ){
    	return false;
    }

	return res=="true";

}

/* Asigna que un mensaje esta leido */ 
function setViewed(id) {

	GCookieSet(id, "true");

}

window.addEventListener( "load", checkCookies );

</script>


