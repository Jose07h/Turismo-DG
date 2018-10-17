<?php
namespace AppData\Controller;
class userController
{
    private $user,$Tipo_tarea,$empleados,$habitaciones,$herramientas;
    public function __construct()
    {
        $this->user= new \AppData\Model\user();    
    }
    public function index()
    {
        $datos1=$this->user->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function crear(){
        if(isset($_POST))
        {
            $idt=$this->Tareas->getid();
            $dato=$idt;
            $row=mysqli_fetch_array($dato);
            $id=$row[0];

            $this->Tareas->set('id_tipotarea',$_POST["tareas"]);
            $this->Tareas->set('id_empleado',$_POST["empleados"]);
            $this->Tareas->set('id_habitacion',$_POST["habitacion"]);
            $this->Tareas->set('fecha_inicio',$_POST["fecha_i"]);
            $this->Tareas->set('fecha_fin',$_POST["fecha_f"]);

            $herramientas=$_POST["eq"];
            for($i=0;$i<count($herramientas);$i++)
            {
                $id_herramineta=$herramientas[$i];
                $this->asigna_eq->set('id_equiposegu',$id_herramineta);
                $this->asigna_eq->set('id_tarea',     $id);
                $this->asigna_eq->add();
            }
            $this->Tareas->add();
            $datos1=$this->Tareas->getAll();
            $datos[0]=$datos1;

            return $datos;

        }
    }
    public function eliminar($id)
    {
        $this->Tareas->delete($id[0]);
        $this->asigna_eq->delete($id[0]);
        $datos1=$this->Tareas->getAll();
        $datos[0]=$datos1;
        return $datos;

    }
    public function modificar($id)
    {
        $datos=$this->Tareas->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            {
                $this->asigna_eq->delete($id[0]);
                $this->Tareas->set("id_tarea",$id[0]);
                $this->Tareas->set('id_tipotarea',$_POST["tareas"]);
                $this->Tareas->set('id_empleado',$_POST["empleados"]);
                $this->Tareas->set('id_habitacion',$_POST["habitacion"]);
                $this->Tareas->set('fecha_inicio',$_POST["fecha_i"]);
                $this->Tareas->set('fecha_fin',$_POST["fecha_f"]);
                $this->Tareas->update();
                $herramientas=$_POST["eq"];

                for($i=0;$i<count($herramientas);$i++)
                {
                    $id_herramineta=$herramientas[$i];
                    $this->asigna_eq->set("id_tarea",$id[0]);
                    $this->asigna_eq->set('id_equiposegu',$id_herramineta);
                    $this->asigna_eq->update();
                }

                $datos1=$this->Tareas->getAll();
                $datos[0]=$datos1;
                return $datos;

            }
        }
    }
    public function print_pdf()
    {
    }
    public function graficar()
    {
        $datos=$this->Tareas->graficar();
        return $datos;
    }

}
