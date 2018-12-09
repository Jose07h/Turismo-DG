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
    public function show()
    {                         
        if($_POST){
        $datos1=$this->inicio->getTipo($_POST['id']);
        $datos[0]=$datos1;
        return $datos;    
        }
        
    }        
    public function datos()     
    {    
        if ($_POST) {
            $datos=$this->inicio->edit($_POST['datos']);       
            print_r(json_encode(mysqli_fetch_assoc($datos)));        
        }
        
    }
    public function getimg() 
    {    
        if ($_POST) {
            $datos=$this->inicio->getimg($_POST['img']);
            while($row=mysqli_fetch_array($datos))
            {
                echo "
                    <div class='col-sm'>"
                    ?>
                        <img class='card-img-top' alt='Card image cap' style=' height:300px;' src='data:image/jpg; base64, <?php echo base64_encode($row[0]); ?>'/>
                    <?php echo"                
                    </div>";    
            }   
        }
    }
}
