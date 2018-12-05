<?php
?>
     <div class="container">
        <div>
            <h5 class="">
                <?php echo isset($_SESSION["error_login"])?$_SESSION["error_login"]:""?>
            </h5>
        </div>
        <div class="card card-container">            
            <img id="profile-img" class="profile-img-card" src="<?php echo URL ?>Public/img/u.jpg"/>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="needs-validation"  method="POST" action="<?php echo URL?>login/verify" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">
                <div class="mb-3">
                  <label for="nombre">Usuario</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="nombre" name="nombre" placeholder="Usuario" required>
                    <div class="invalid-feedback" style="width: 100%;">
                      Nombre requerido
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="pass">Contraseña</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
                    <div class="invalid-feedback" style="width: 100%;">
                      Contraseña requerida
                    </div>
                  </div>
                </div>  
                <div class="">
                    <button href="#!" class="btn btn-primary" id="enviar" data-id="" type="submit">Enviar</button>    
                </div>            
            </form>
            <a href="#" class="forgot-password">
                Ha olvidado la contraseña?
            </a>
        </div>
    </div>