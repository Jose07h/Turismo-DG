<?php
?>

  <div class="container-fluid md-12" id="" >
          <div class="row" >
            <div class="col-md-12">
                <div  id="carouselExampleIndicators" class="carousel slide bg-light" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100"  src="<?php echo URL?>Public/img/mari.jpg" alt="First slide" width="90px" height="650">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo URL?>Public/img/entra.jpg" alt="Second slide" width="90px" height="650">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo URL?>Public/img/elcapulin.jpg" alt="Fourth slide" width="90px" height="650">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo URL?>Public/img/cascadaasuncion.jpg" alt="Five slide" width="90px" height="650">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo URL?>Public/img/fondo.jpg" alt="Six slide" width="90px" height="650">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>    
              </div>
          </div>
          <br>
          <br>
          <br>
    <div class="container">
      <div class="row cont">
        <?php
          require_once ("tabla.php");
       ?>
      </div>                        
    </div>          
  </div>
  <br>
  <br>
  <br>
<div id="cargaexterna">Aquí se cargará el HTML externo</div>


  <script type="text/javascript">
    /*$(document).ready(function(){
        $(".btn_ver").click(function(){
            var i=$(this).data("id");
            i=JSON.stringify(i);
            window.location("<?php echo URL?>inicio/show/?datos="+i);

            //$.post("<?php //echo URL?>inicio/show", {coche:i}, function(res){
              // $("#cargaexterna").html(res);

            //});
        });
    })*/
  </script>