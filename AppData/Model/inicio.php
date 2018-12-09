<?php
namespace AppData\Model;
class inicio
{
    private $tabla="usuarios";
    private $email, $pass;
    public function __construct()
    {
        $this->conexion= new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }
    function getTipo($tipo)
    {
        $sql="SELECT * from img where tipo_id='{$tipo}'" ;
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function getimg($id)
    {
        $sql="SELECT img from img where id='{$id}'" ;
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function edit($id)
    {
        $sql="select id,titulo,fecha,descr,tipo_id,ubicacion from img where id='{$id}'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function getAll()
    {
        $sql="SELECT * from tipos ,img where img.tipo_id=tipos.id" ;
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
}