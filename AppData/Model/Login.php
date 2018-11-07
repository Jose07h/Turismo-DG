<?php
namespace AppData\Model;
class Login
{
    private $tabla="usuario";
    private $nombre, $pass;
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
    function getAll()
    {
        $sql="SELECT * from usuario";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
public function comprobar()
    {
        $sql="SELECT * FROM {$this->tabla} where nombre='{$this->nombre}' and pass='{$this->pass}'";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }

}