<?php
namespace AppData\Controller;
class inicioController
{
    private $inicio;

    public function __construct()
        {
            $this->inicio= new \AppData\Model\inicio();
        }

    public function index()
        {
            $datos1=$this->inicio->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    public function verify()
        {
            $_SESSION["error_inicio"]="";

            if(isset($_POST)) {
                $this->inicio->set("email", $_POST["email"]);
                $this->inicio->set("pass", $_POST["password"]);
                $datos = $this->inicio->verify();
                if (mysqli_num_rows($datos) > 0) {
                    $datos=mysqli_fetch_assoc($datos);
                    $_SESSION["username"]=$datos["email"];
                    header("Location:" . URL . "Empleado_bienvenido");

                }
                else {
                    $_SESSION["error_inicio"] = "los datos no coinciden con nuestros registros";
                    header("Location:" . URL . "inicio");
                }
            }
        }
    public function logout()
        {
            session_destroy();
           // header("Location:".URL);
        }
    public function show($dato)
    {                                
            $datos1=$this->inicio->getTipo($dato[0]);
            $datos[0]=$datos1;            
            return $datos;
    }        
}
