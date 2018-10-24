<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */
namespace AppData\Model;
class user
{
    private  $id_tarea;
    private  $id_tipotarea;
    private  $id_empleado;
    private  $id_habitacion;
    private  $fecha_inicio;
    private  $fecha_fin;
    private  $id_equiposegu;

    private $tabla="img";
    private $id, $fecha,$img,$descr,$titulo;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }
    function getAll()
    {
        $sql="SELECT * from img";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function add()
    {    
        $stm=$this->conexion->proc($this->titulo,$this->fecha,$this->img,$this->descr);
    }
    
    function getid()
    {
        $sql="SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'hotel' AND TABLE_NAME  = 'Tareas'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id='{$id}'";
        $this->conexion->querysimple($sql);
    }
    function edit($id){
        $sql="select * from {$this->tabla}";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function getOne($id)
    {
        $sql="SELECT tareas.*,
        GROUP_CONCAT(equipo_seguridad.id_equiposegu) as equipo
FROM Tareas,tipo_tarea,equipo_seguridad,asigna_equiposegu,habitaciones,empleados
where tareas.id_tipotarea = tipo_tarea.id_tipotarea 
and tareas.id_tarea=asigna_equiposegu.id_tarea
and asigna_equiposegu.id_equiposegu=equipo_seguridad.id_equiposegu
and tareas.id_habitacion=habitaciones.id_habitacion
and tareas.id_empleado=empleados.id_empleado
and tareas.id_tarea='{$id}'
and asigna_equiposegu.id_tarea='{$id}'
GROUP BY tareas.id_tarea ";

        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){

        $sql="update {$this->tabla} 
              set id_tipotarea='{$this->id_tipotarea}',
              id_empleado='{$this->id_empleado}',
              id_habitacion='{$this->id_habitacion}', 
              fecha_inicio='{$this->fecha_inicio}', 
              fecha_fin='{$this->fecha_fin}' 
              where id_tarea='{$this->id_tarea}'";
        echo $sql;

        $this->conexion->QuerySimple($sql);
    }
    function graficar()
    {
        $sql="select habitaciones.num_habitacion, count(tareas.id_habitacion) numero 
              from tareas,habitaciones 
              where tareas.id_habitacion=habitaciones.id_habitacion group by habitaciones.id_habitacion;";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }
}