<?php
namespace AppData\Controller;
class tiposController
{
    private $tipos;
    public function __construct()
    {
        $this->tipos= new \AppData\Model\tipos();    
    }
    public function index()
    {
        $datos1=$this->tipos->getAll();
        $datos[0]=$datos1;
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
            $this->tipos->set('img',$bytes);
            $this->tipos->set('descr',$_POST["descripcion"]);
            $this->tipos->add();
            header("Location:".URL."tipos");
        }

    }

      public function eliminar($id){
       $this->tipos->delete($id[0]);
       $datos1=$this->tipos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

    public function modificar($id){
        $datos=$this->tipos->edit($id[0]);        
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
        $nombre=$_FILES['imagen']['name'];
        $tmp=$_FILES['imagen']['tmp_name'];    
        //echo $nombre.'  '.$tmp ;
         $bytes=file_get_contents($tmp); 
            $this->tipos->set('id',$_POST["id"]);
            $this->tipos->set('img',$bytes);
            $this->tipos->set('descr',$_POST["descripcion"]);
            $this->tipos->update();
            header("Location:".URL."tipos");
        }
    }
}
