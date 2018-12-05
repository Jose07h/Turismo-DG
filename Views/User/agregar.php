<?php    
?>
    <div class="container justify-content-md-center">
      <div class="py-5 text-center">
        <h2>Agregar</h2>
        <p class="lead">Agrega nuevas historias de dentro de las areas registradas</p>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-8 order-md-1">
           <form class="was-validated"  method="POST" action="<?php echo URL?>User/agregar" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">

            <div class="mb-3">
              <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo" required>
                <div class="invalid-feedback" style="width: 100%;">
                  El titulo es requerido
                </div>
            </div>
            <div class="mb-3">
              <label for="fecha">Fecha</label>
              <div class="input-group">
                <input type="date" class="form-control" id="fecha" name="fecha"placeholder="fecha" required>
                <div class="invalid-feedback" style="width: 100%;">
                  la fecha es requerida
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="imagen">Selecionar imagen</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="imagen" name="imagen"required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback" style="width: 100%;">Es nesesario selecionar una imagen</div>
              </div>
            </div>          
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="ubi">Ubicacion</label>
                <select id="ubi" class="custom-select" name="ubi" required>
                  <option disabled selected>Selecionar...</option>
                  <?php
                      $result1=$datos[0];
                      while ($row=mysqli_fetch_array($result1))
                      {
                        echo "<option value='{$row[0]}'> {$row[1]}</option>";
                      }
                  ?>
                </select>
                <div class="invalid-feedback">Es nesesario selecionar una ubicacion</div>
            </div>

              <div class="form-group col-md-6">
                <label for="inputState">Tipos</label>
                <select id="tipos" class="custom-select" name="tipos" required="">
                  <option disabled selected>Selecionar...</option>
                  <?php
                      $result1=$datos[1];
                      while ($row=mysqli_fetch_array($result1))
                      {
                        echo "<option value='{$row[0]}'>{$row[2]}</option>";
                      }
                  ?>
                </select>
              <div class="invalid-feedback">Es nesesario selecionar un tipo</div>
              </div>
            </div>
            <div class="mb-5">
              <label for="descripcion">Descripcion</label>
              <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
              <div class="invalid-feedback" style="width: 100%;">
                  descripcion requerida
                </div>
            </div>
            <div class="row justify-content-md-center">
              <button  class="btn btn-primary " id="enviar"  type="submit">Enviar</button>
            </div>                      
          </form>  
          </div>

        </div>
      </div>

      <br>
      <br>
      <br>

