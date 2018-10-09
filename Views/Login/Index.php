<?php
?>
     <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
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
                <a href="#!" class="btn btn-lg btn-primary btn-block btn-signin" id="save_tarea_ok" >Iniciar</a>
            </form>
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div>
    </div>
    <script>
      $(document).on("ready",function(){
        console.log('ok');
         $("#save_tarea_ok").click(function() {
          console.log('ok');
            $("#save_tarea").submit();
            $.post("<?php echo URL?>login/verify",$("#save_tarea").serialize(),function(res){

              alert("enviados");
            })
        });

      })
    </script>
    
