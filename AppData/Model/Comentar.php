<?php
$comentario =$_POST['message'];

$grabar=fopen("AppData/Controller/com.html","a");
fwrite($grabar,"<p<$comentario</p>");
fclose($grabar);

include ("Views/Template.php");
