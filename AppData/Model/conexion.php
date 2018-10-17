<?php

namespace AppData\Model;


class conexion
{

    private $datos=array("server"=>"localhost","user"=>"root","password"=>"", "base"=>"Malacatepec");
    public $stm;


    private $conexion;

    function __construct()
    {
        $this->conexion=new \mysqli($this->datos["server"],$this->datos["user"], $this->datos["password"],$this->datos["base"]);
        $this->conexion->set_charset("utf8");
    }

    public function QuerySimple($sql)
    {
        $this->conexion->query($sql) or die (mysqli_error($this->conexion));
    }
    public function proc($a,$b,$c,$d)
    {
        echo $b,$a;
        $sql="insert into img(titulo,fecha,img,descr) values(?,?,?,?)";
        $stm=$this->conexion->prepare($sql) or die (mysqli_error($this->conexion));
        $stm->bind_param('ssss',$a,$b,$c,$d);
        $stm->execute();

    }
    public function QueryResultado($sql)
    {
        $datos=$this->conexion->query($sql) or die (mysqli_error($this->conexion));
        return $datos;
    }

    public function __destruct()
    {
        $this->conexion->close();
    }
}
