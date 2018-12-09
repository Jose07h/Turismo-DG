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
            <div class="text-center">
              <h1>Donato Guerra  </h1>
              <h2>Municipio en México</h2>

            </div>
            <div class="text-center">
              <h3>Descripción</h3>
              <h5>Donato Guerra es uno de los 125 municipios del Estado de México, se encuentra dentro del Valle de Quencio. Limita al norte con Villa de Allende, al oeste con Zitácuaro, al sur con Ixtapan del Oro y Valle de Bravo y al este con Amanalco de Becerra</h5>              
              <br>
              <h6>Elevación: 2.200 m</h6>
              <h6>Superficie: 192.189 km²</h6>
              <h6>Hoteles: Precio promedio: $1,235 en hotel tres estrellas, $4,393 en hotel cinco estrellas</h6>
              <h6>Población: 29.621 (2005)</h6>
              <h6>Tiempo: 16 °C, viento del S a 2 km/h, humedad del 69 %  </h6>                                    
            </div>            

          </div>
    <div class="container">
      <div class="row cont body_table">
        <?php
          require_once ("tabla.php");
       ?>
      </div>                        
    </div>          
  </div>
  <br>
  <br>
  <br>
  <script type="text/javascript">
    $(document).ready(function(){
    })
  </script>