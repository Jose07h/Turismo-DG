<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */
namespace AppData\Model;
class tipos
{
    private $tabla="tipos";
    private $id,$img,$descr;
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
        $sql="SELECT * from tipos";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    
    function add()
    {    
        $stm=$this->conexion->tiposadd($this->img,$this->descr);
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id='{$id}'";
        $this->conexion->querysimple($sql);
    }
    function edit($id)
    {
        $sql="select id,img,descr from {$this->tabla} where id='{$id}'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function getOne($id)
    {
        $sql="SELECT * FROM tipos where id='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $stm=$this->conexion->tiposup($this->img,$this->descr,$this->id);
        
    }
}