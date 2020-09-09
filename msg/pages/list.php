
<script src="/lib/jquery.min.js"></script>




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

  
<?php for( $i = 0; $i < count($msgs); $i++) { ?>  

  <div class="d-flex mb-3">

    <div class="p-2 text-left">2020-09-01</div>

    <div class="p-2 flex-fill text-left">
      <A onclick='showMessage("<?= $msgs[$i] ?>","<?= include $msgs[$i] ?>")'><?= include $msgs[$i] ?></A>
    </div>

    <script>
      
      </script>

      <div class="p-2 text-left">+</div>
      <div class="p-2 text-left">-</div>
      

  </div>

    
<?php } ?>  
  

<script>

  $.ajaxSetup ({
      // Disable caching of AJAX responses
      cache: false
  });
    function showMessage(fileTit,titulo){
      fileTit=fileTit.replace(".tit",".txt");
      
          $("#contentTitle").text(titulo);
          $("#content").load("../"+fileTit);
          $("#contentParent").show()
    }

</script>

<div id="contentParent"style="background-color:lightblue;display: none;
  width: 80%;
  height: 50%;
  position: absolute;
  top: 30%;
  margin-left:-2%;
  margin-top: -70px;
">
        <table style="border: 1px solid black;background-color:red" width="100%">
        <tr><td width="100%">
              <div id ="contentButton" style="background-color:gray;">
                    <table width="100%" style="border: 2x solid black">
                    <tr>
                    <td width="90%" >
                        <span id="contentTitle"  style="font-size:80%;"></span>
                    </td>
                    <td width="10%" style="text-align:right">
                    <button onclick='$("#contentParent").hide()'  type="button" class="close" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </td>
                    </tr>
                    </table>
              </div>
        </td>     
        </tr><td width="100%">
              <div id ="content" style="background-color:green"> 
              </div>
        </td></tr>        
        </table>
</div>