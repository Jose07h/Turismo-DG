<?php
?>
     <div class="container">
        <div class="card card-container">            
            <img id="profile-img" class="profile-img-card" src="<?php echo URL ?>Public/img/u.jpg"/>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" id="save_tarea">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="Email" class="form-control" placeholder="Email " required autofocus>
                <input type="password" id="Password" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> recordarme
                    </label>
                </div>
                <button  class="btn btn-lg btn-primary btn-block btn-signin" id="ok" >Iniciaar </button> 
                <a href="#!" id="eliminar" class="modal-close green white-text waves-effect waves-green btn-flat">prueba</a>
            </form>
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div>
    </div>
<script>
        $(document).on('ready',function(){
            $('#ok').on('click',function(){
                alert("aaaaaaaaaaaaaaaaaa");
            var s='Hola Mundo';
            console.log(s);        
            });
        });
        
        
    </script>   