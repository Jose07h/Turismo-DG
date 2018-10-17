<?php
namespace AppData\Model;
class Login
{
    private $tabla="log";
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
    function getAll()
    {
        $sql="SELECT * from log";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }



    public function verify()
    {
        $sql="SELECT * FROM {$this->tabla} where user='{$this->email}' and con='{$this->pass}'";
        print_r($sql);
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }
public function registro()
    {
        $sql="SELECT * FROM {$this->tabla} where user='{$this->email}' and con='{$this->pass}'";
        print_r($sql);
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }

}