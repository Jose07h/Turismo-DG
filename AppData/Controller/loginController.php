<?php
namespace AppData\Controller;
class loginController
{
    private $login;

    public function __construct()
        {
            $this->login= new \AppData\Model\Login();
        }
    public function index()
        {
            $datos1=$this->login->getAll();
            $datos[0]=$datos1;
            return $datos;   
        }
    public function login(){
            
        print_r($_POST['nombre']);
        print_r($_POST['pass']);
        if($_POST)
        {
            $this->login->set('nombre',$_POST["nombre"]);
            $this->login->set('pass',$_POST["pass"]);
            $datos=$this->login->comprobar();
            if (mysqli_num_rows($datos) > 0) {
                    $datos=mysqli_fetch_assoc($datos);
                    $_SESSION["username"]=$datos["email"];
                    header("Location:" . URL . "user");
            }
            else {
                    $_SESSION["error_login"] = "los datos no coinciden con nuestros registros";
                    header("Location:" . URL . "login");
            }
        }
    }
}
