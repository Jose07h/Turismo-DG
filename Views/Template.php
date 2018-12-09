<?php

namespace Views;
new Template();
ob_start();
class Template
{
    public static function header()
    {
?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta charset="utf-8">
            <title>Principal</title>
            <link href="<?php echo URL ?>Public/css/blog.css" rel="stylesheet">
            <link href="<?php echo URL ?>Public/css/style.css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL ?>Public/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo URL ?>Public/css/sweet-alert.min.css">

            <script type="text/javascript" src="<?php echo URL ?>Public/js/sweet-alert.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/assets/js/vendor/jquery-slim.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/assets/js/vendor/popper.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/assets/js/vendor/holder.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/js/bootstrap.min.js" ></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/highcharts.js"></script>
            <!--<script type="text/javascript" src="<?php //echo URL ?>Public/js/feather.min.js"></script>-->
            <script type="text/javascript" src="<?php echo URL?>Public/js/jquery.validate.min.js"></script>
        </head>

        <body>   
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
        </script>
            
            <?php if(!isset($_SESSION["nombre"])) { ?>
       
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
                <img src="<?php echo URL?>Public/img/logo_trans.png" width="150px" alt="Thumbnail Image" class="img-raised  img-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo URL?>inicio">
                                Conociendo Donato Guerra 
                            </a>
                        </li>
                        
                            <li class="nav-item">
                                <a class="nav-link"  href="<?php echo URL?>Acerca">
                                Acerca de DONATO GUERRA
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="http://donatoguerra.gob.mx/turistico/inicio.php">
                                    Pagina official Donato guerra
                                </a>
                            </li>                                                    
                    </ul>
                        <div class="row  align-self-start ">
                            <div class="col align-self-center">
                                <a href="<?php echo URL  ?>Login" >
                                    <img src="<?php echo URL?>Public/svg/user.svg" alt="ok" width="40" heigh="40" class="img-raised  img-fluid">  
                                </a>
                            </div> 
                        </div>                                                                    
                </div>
            </nav>
            <?php } if (isset($_SESSION["nombre"])){ ?>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
                <img src="<?php echo URL?>Public/img/logo_trans.png" width="150px" alt="Thumbnail Image" class="img-raised  img-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL ?>user">
                                    Principal
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL ?>tipos">
                                Tipos
                                </a>
                            </li>                                                              
                    </ul>
                    <div class="btn-group dropleft" style="margin-right:12%;">
                      <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo URL ?>Public/svg/usuario.svg" width="30" heigh="30">
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo URL ?>login/logout">Salir</a>
                        <a class="dropdown-item" href="#"> <?php echo $_SESSION["nombre"] ?></a>
                      </div>
                    </div>
                </div>
            </nav>
            <?php } ?>
            <main class="container-fluid">
            <br>
            <br>
            <br>

    <?php
    }

    public static function footer()
    {
    ?>
            </main>
            <footer class="page-footer font-small mdb-color pt-4 badge-dark">
                <div class="container-fluid text-center text-md-left">
                    <div class="row text-center text-md-left mt-3 pb-3">
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h5 class="text-uppercase mb-4 font-weight-bold">Contáctanos</h5>
                            <label>New York, NY 10012, US</label>
                            <label>info@gmail.com</label>
                            <label>+ 01 234 567 88</label>
                            <label>+ 01 234 567 89</label>
                        </div>
                            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h5 class="text-uppercase mb-4 font-weight-bold">Ubicación</h5>
                                    <a class="nav-link" href="<?php echo URL?>ubicacion">
                                    Mapa
                                </a>
                            </div>
                        </div>
                            
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h5 class="text-uppercase mb-4 font-weight-bold">Quejas y sugerencias</h5>
                        </div>                    
                    </div>            
                    <div class="row d-flex align-items-center">
                        <div class="col-md-7 col-lg-8">
                            <p class="text-center text-md-left">© 2018 Copyright:
                                <span class="glyphicon glyphicon-search"></span>
                                <a href="https://mdbootstrap.com/bootstrap-tutorial/">
                                    <strong> MDBootstrap.com</strong>
                                </a>
                            </p>
                            <div class="fb-comments" data-href="http://localhost/Turismo-DG/" data-width="100%" data-numposts="7"></div>
                        </div>
                        <div class="col-md-5 col-lg-4 ml-lg-0">
                            <div class="text-center text-md-right">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
        </body>
        </html>
        <?php
    }
}
ob_start();