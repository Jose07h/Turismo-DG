<?php
namespace AppData\Controller;
class AgregarController
{
     private $equipo_seguridad,$tipo_equiposegu,$estado_mantenimiento,$agregar;


    public function __construct()
    {
        $this->agregar= new \AppData\Model\agregar();
    }

    public function index()
    {
        $datos1=$this->agregar->getAll();
        $datos[0]=$datos1;    
        return $datos;
    }
    public function crear()
    {
        if(isset($_POST))
        {
        $nombre=$_FILES['imagen']['name'];
        $tmp=$_FILES['imagen']['tmp_name'];    
        echo $nombre.'  '.$tmp ;
         $bytes=file_get_contents($tmp); 
            $this->agregar->set('titulo',$_POST["titulo"]);
            $this->agregar->set('fecha',$_POST["fecha"]);
            $this->agregar->set('img',$bytes);
            $this->agregar->set('descr',$_POST["descripcion"]);
            $this->agregar->add();
            $datos1=$this->agregar->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }
    public function eliminar($id)
    {
        $this->equipo_seguridad->delete($id[0]);
        $datos1=$this->equipo_seguridad->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->equipo_seguridad->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->equipo_seguridad->set("id_equiposegu",$id[0]);
            $this->equipo_seguridad->set('nombre_equisegu',$_POST["nombre_equisegu"]);
            $this->equipo_seguridad->set('id_tipoequisegu',$_POST["descripcion_tipo"]);
            $this->equipo_seguridad->set('cantidad',$_POST["cantidad"]);
            $this->equipo_seguridad->set('id_estadomantenimiento',$_POST['descripcion_estadomantenimiento']);
            $this->equipo_seguridad->update();
            $datos1=$this->equipo_seguridad->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function print_pdf()
    {

    }


}
