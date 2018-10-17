<?php
namespace AppData\Model;
class Agregar
{
    private $tabla="img";
    private $id, $fecha,$img,$descr,$titulo;
    function __construct()
    {
        $this->conexion= new conexion();
    }
    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }
    function add()
    {    
        $stm=$this->conexion->proc($this->titulo,$this->fecha,$this->img,$this->descr);
    }
    function getAll()
    {
        $sql="select * from img";
        $datos= $this->conexion ->queryResultado($sql);
        return $datos;

    }
    function update()
    {
        $sql = "update equipo_seguridad set nombre_equisegu='{$this->nombre_equisegu}',
               id_tipoequisegu='{$this->id_tipoequisegu}',cantidad='{$this->cantidad}',id_estadomantenimiento='{$this->id_estadomantenimiento}'
                where id_equiposegu='{$this->id_equiposegu}'";
        $this->conexion->QuerySimple($sql);
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_equiposegu='{$id}'";
        $this->conexion->QuerySimple($sql);

    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_equiposegu='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

}