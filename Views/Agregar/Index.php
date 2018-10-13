<?php
?>
 <form class="needs-validation" novalidate>
    <div class="container justify-content-md-center">
      <div class="py-5 text-center">
        <h2>Agregar</h2>
        <p class="lead">Agrega nuevas historias de dentro de las areas registradas</p>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" placeholder="Titulo" required>
                <div class="invalid-feedback" style="width: 100%;">
                  El titulo es requerido
                </div>
            </div>
            <div class="mb-3">
              <label for="fecha">Fecha</label>
              <div class="input-group">
                <input type="text" class="form-control" id="fecha" placeholder="fecha" required>
                <div class="invalid-feedback" style="width: 100%;">
                  la fecha es requerida
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="imagen">Selecionar imagen</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="imagen" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback" style="width: 100%;">Es nesesario selecionar una imagen</div>
              </div>
            </div>          
            <div class="mb-5">
              <label for="descripcion">Descripcion</label>
              <textarea class="form-control" id="descripcion" rows="3" required></textarea>
              <div class="invalid-feedback" style="width: 100%;">
                  descripcion requerida
                </div>
            </div>
            <br>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <button class="btn btn-primary " type="submit">Submit form</button>
      </div>
    
            <br>  
            <br>  
            <br>  
            <br>  
            <br>  
            <br>  
  </form>
    <script>
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  