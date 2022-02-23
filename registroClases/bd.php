<?php
class bd{
    private $server = "localhost";
    private $usuario = "root";
    private $pass = "kvMu*0Fi9RY$!Q8D";
    private $basedatos = "pi_public";
    private $conexion;
    private $resultado;
    public function __construct(){
        $this->conexion = new mysqli($this->server, $this->usuario, $this->pass , $this->basedatos);
        $this->conexion->select_db($this->basedatos);
        $this->conexion->query("SET NAMES 'utf8'");

    }
    public function query($sql){
        $res = $this->conexion->query($sql);
        return $res;
    }
}