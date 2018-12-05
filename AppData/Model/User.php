<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */
namespace AppData\Model;
class User
{
    private $tabla="img";
    private $id, $fecha,$img,$descr,$titulo,$ubi,$tipos;
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
        $sql="select img.id,titulo, fecha, img.img, img.descr, tipos.descr, ubicacion.descr from img,tipos,ubicacion where tipos.id=img.tipo_id and ubicacion.id=img.ubicacion order by img.id;";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    
    function add()
    {    
        $stm=$this->conexion->proc($this->titulo,$this->fecha,$this->img,$this->descr,$this->tipos,$this->ubi);
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id='{$id}'";
        $this->conexion->querysimple($sql);
    }
    function edit($id)
    {
        $sql="select id,titulo,fecha,descr,tipo_id,ubicacion from {$this->tabla} where id='{$id}'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function getOne($id)
    {
        $sql="SELECT * FROM img where id='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $stm=$this->conexion->proc2($this->titulo,$this->fecha,$this->img,$this->descr,$this->id);
        
    }
    function grafica(){
        $sql="select tipos.descr, count(tipo_id) from img ,tipos group by tipo_id";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;        
    }
}