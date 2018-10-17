<?php
namespace Views;
new Template();
class Template
{
    public static function header()
    {
?>
        <!DOCTYPE html>
        <html>
        <link href="<?php echo URL ?>Public/css/blog.css" rel="stylesheet">
        <link href="<?php echo URL ?>Public/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo URL ?>Public/css/bootstrap.min.css">

        <script type="text/javascript" src="<?php echo URL ?>Public/assets/js/vendor/jquery-slim.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>Public/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>Public/assets/js/vendor/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>Public/assets/js/vendor/holder.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>Public/js/bootstrap.min.js" ></script>
        <!--<script type="text/javascript" src="<?php //echo URL ?>Public/js/feather.min.js"></script>-->
        <script type="text/javascript" src="<?php echo URL?>Public/js/jquery.validate.min.js"></script>
        <script>
            $(document).on("ready",function(){
                $('.carousel').carousel({
                    interval: 2000
                })
            });
        </script>
        <head>
            <title>Principal</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          </head>
        <body>
        <header>

            <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
                <img src="<?php echo URL?>Public/img/logo_trans.png" width="150px" alt="Thumbnail Image" class="img-raised  img-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo URL?>inicio"> <font color="#fafad2" face="Arial,Verdana" size="5"> Conociendo Donato Guerra <span class="sr-only">(current)</span></font></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Costumbres y tradiciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Artesanias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL ?>Login">Login</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Actividades
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo URL ?>Actividades">Campismo</a>
                                <a class="dropdown-item" href="#">Ciclismo</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
            </nav>

        </header>
        <main class="container-fluid md-12">
            <br><br><br>
    <?php
    }
    public static function footer()
    {
    ?>
        </main>
        <!-- Footer -->
        <footer class="page-footer font-small mdb-color pt-4 badge-dark">
            <!-- Footer Links -->
            <div class="container text-center text-md-left">
                <!-- Footer links -->
                <div class="row text-center text-md-left mt-3 pb-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contáctanos</h6>
                        <p>
                            <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i> info@gmail.com</p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p>
                            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Ubicación</h6>
                        <p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15061.361392893625!2d-100.15055793305281!3d19.31103209125391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d29e7e699ac01f%3A0x54fbeac5bbe65d12!2sVilla+Donato+Guerra%2C+M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1539572910254" width="300" height="270" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none">
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Quejas y sugerencias</h6>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Footer links -->
                <hr>
                <!-- Grid row -->
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8">
                        <!--Copyright-->
                        <p class="text-center text-md-left">© 2018 Copyright:
                            <span class="glyphicon glyphicon-search"></span>
                            <a href="https://mdbootstrap.com/bootstrap-tutorial/">
                                <strong> MDBootstrap.com</strong>
                            </a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0">

                        <!-- Social buttons -->
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
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

        </footer>
        <!-- Footer -->
        </body>
        </html>
        <?php
    }
}