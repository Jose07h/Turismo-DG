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
                        <img class="d-block w-100" src="<?php echo URL?>Public/img/mira.jpg" alt="Fourth slide" width="90px" height="650">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo URL?>Public/img/casca.jpg" alt="Five slide" width="90px" height="650">
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
    <div class="container pie">
      <div class="row" id="lista">
        <?php
          require_once ("tabla.php");
       ?>
      </div>                        
    </div>          
  </div>
  <br>
  <br>
  <br>