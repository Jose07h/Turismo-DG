<?php
namespace AppData\Controller;
class userController
{
    private $user,$tipos,$ubi;
    public function __construct()
    {
        $this->user= new \AppData\Model\User();    
        $this->ubi= new \AppData\Model\ubicacion();    
        $this->tipos= new \AppData\Model\tipos();    

    }
    public function index()
    {
        $datos1=$this->user->getAll();
        $datos2=$this->ubi->getAll();
        $datos3=$this->tipos->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        return $datos;
    }
    public function agregar()
    {
        
        if($_POST)
        {
        $nombre=$_FILES['imagen']['name'];
        $tmp=$_FILES['imagen']['tmp_name'];    
        //echo $nombre.'  '.$tmp ;
         $bytes=file_get_contents($tmp); 
            $this->user->set('titulo',$_POST["titulo"]);
            $this->user->set('fecha',$_POST["fecha"]);
            $this->user->set('img',$bytes);
            $this->user->set('descr',$_POST["descripcion"]);
            $this->user->set('ubi',$_POST["ubi"]);
            $this->user->set('tipos',$_POST["tipos"]);
            $this->user->add();
            header("Location:".URL."user");
        }
        else{
            $datos1=$this->ubi->getAll();
            $datos2=$this->tipos->getAll();        
            $datos[0]=$datos1;
            $datos[1]=$datos2;
            return $datos;   
        }

    }

    public function eliminar($id)
    { 
        $this->user->delete($id[0]);
        $datos1=$this->user->getAll();
        $datos[0]=$datos1;
        return $datos;   

    }

    public function modificar ($id) 
    {    
        $datos=$this->user->edit($id[0]);       
        print_r(json_encode(mysqli_fetch_assoc($datos)));        
    }
    public function getimg ($id) 
    {    
        $datos=$this->user->getImg($id[0]);
        while($row=mysqli_fetch_array($datos))
        {
            echo "
                <div class='col-sm'>"
                ?>
                    <img class='card-img-top' alt='Card image cap' style=' height:80px;' src='data:image/jpg; base64, <?php echo base64_encode($row[0]); ?>'/>
                <?php echo"                
                </div>";    
        }   
    }
    public function actualizar($id)
    {
        print_r($_POST);
        if($_POST)
        {
        $nombre=$_FILES['imagen']['name'];
        $tmp=$_FILES['imagen']['tmp_name'];    
        //echo $nombre.'  '.$tmp ;
         $bytes=file_get_contents($tmp); 
            $this->user->set('id',$_POST["id"]);
            $this->user->set('titulo',$_POST["titulo"]);
            $this->user->set('fecha',$_POST["fecha"]);
            $this->user->set('img',$bytes);
            $this->user->set('descr',$_POST["descripcion"]);
            $this->user->update();
            header("Location:".URL."user");
        }

    }
    public function print_pdf()
    {
        $datos=$this->user->getAll();
        return $datos;
    }
    public function graficar()
    {
        $datos=$this->user->grafica();
        return $datos;
    }

}
