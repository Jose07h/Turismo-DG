<?php
?>
     <div class="container-fluid">
      <div class="row">
        <main role="main" class="col-md-12">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Agregados</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a class="nav-link btn btn-sm btn-outline-secondary" href="<?php echo URL ?>user/agregar">
                  Agregar
                </a>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
          <div class="container">
            <div class="row">
                  <?php
                    require_once ("tabla.php");
                  ?>
            </div>
          </div>
          
        </main>

      </div>
    </div>
    <br>
    <br><br>

    
