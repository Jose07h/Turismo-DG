<?php
$dato=$datos[0];
while($row=mysqli_fetch_array($dato))
{
	echo "
		<div class='col-sm'>
			<div class='card' style='width: 18rem;'>"
				?>
					<img class='card-img-top' alt='Card image cap' src='data:image/jpg; base64, <?php echo base64_encode($row[3]); ?>'/>
				<?php 
				echo"
	            <div class='card-body'>
	              <h5 class='card-title'>{$row[1]}</h5>
	              <p class='card-text'>{$row[4]}</p>
		              <div>
		                <label for=''>{$row[2]}</label>  
		              </div>		             
		              <div class='text-center'>
		              
		              <button type='button' class='btn btn-primary' data-toggle='modal' id='ver'  data-id='{$row[0]}'>
                  [ ]</button>
                  </div>
	            </div>
	         </div>
        </div>";	
}
?>
<div class="modal fade bd-example-modal-lg" id="mimodal" tabindex="-1" role="dialog" aria-labelledby="mimodal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container justify-content-md-center col-md-12 order-md-1">                       
          <div class="salida">            
          </div>
          <div class="text-center">
     	     <h5 id="titulo" for=""></h5>
	          <h5 id="fecha" for=""></h5>
	          <h5 id="ubi" for=""></h5>
	          <h5 id="tipos" for=""></h5>
	          <h5 id="descripcion" for=""></h5>	
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
      </div>
    </div>
  </div>                
</div>

<script type="text/javascript">
    $(document).ready(function(){
      $("#ver").click(function(){
        var datos=$(this).data("id");         

        $.post("<?php echo URL?>inicio/datos/",{datos:datos},function(res){              
          var datos=JSON.parse(res);
          $("#titulo").html(datos["titulo"]);
          $("#fecha").html(datos["fecha"]);
          $("#ubi").html(datos["ubicacion"]);                
          $("#tipos").html(datos["tipo_id"]);
          $("#descripcion").html(datos["descr"]);
        });
        $.post("<?php echo URL?>inicio/getimg/",{img:datos},function(res){ 
          $(".salida").html(res);
        });
        $("#mimodal").modal("show");
      });        
    })
  </script>
