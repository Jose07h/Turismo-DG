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
        <head>
            <title>Principal</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link href="<?php echo URL ?>Public/css/blog.css" rel="stylesheet">
            <link href="<?php echo URL ?>Public/css/style.css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL ?>Public/css/bootstrap.min.css">

            <script type="text/javascript" src="<?php echo URL ?>Public/assets/js/vendor/jquery-slim.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/assets/js/vendor/popper.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/assets/js/vendor/holder.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/js/bootstrap.min.js" ></script>        
            <script type="text/javascript" src="<?php echo URL ?>Public/js/feather.min.js" ></script>        
            <script>
              $(document).on("ready",function(){
              $('.carousel').carousel({
                interval: 2000
              })
            });
            </script>
          </head>
        <body>
        <header>
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-white flex-md-nowrap p-0 shadow">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">                
                <img src="<?php echo URL?>Public/img/mexico.jpg" width="250px" alt="Thumbnail Image" class="img-raised  img-fluid" >
              </li>
              <li class="nav-item active">
                    <a class="nav-link" href="<?php echo URL?>inicio"> <font color="black" face="Arial,Verdana" size="9"  > Conociendo Donato Guerra <span class="sr-only">(current)</span></font></a>
              </li>


                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Otras</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Guias</a>
                  <a class="dropdown-item" href="#">Actividades</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Algo mas</a>
                </div>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input type="text" class="form-control" id="buscar" placeholder="buscar">
                <a class="nav-link" href="#">
                  <button class="" data-feather="search"></button>
                </a>
            </form>
          </div>
          </nav>
        </header>
        <main class="container-fluid md-12">
    <?php
    }
    public static function footer()
    {
    ?>
        </main>
          <footer>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link active" href="#">Contáctanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nuestras redes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="">Ubicacion</a>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15061.361392893625!2d-100.15055793305281!3d19.31103209125391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d29e7e699ac01f%3A0x54fbeac5bbe65d12!2sVilla+Donato+Guerra%2C+M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1539572910254" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Quejas y sugerencias</a>
              </li>
            </ul>
          </footer> 
        </body>
        </html>
        <?php
    }
}