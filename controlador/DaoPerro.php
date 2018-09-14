<?php

include_once 'conexion.php';
include_once '../modelo/Perro.php';

class DaoPerro{
    private $cone;
    
    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }

        public function Grabar($perro) {
        try {
            $sql="insert into perro values('@id','@no','@ra','@tam','@co')";
            $sql= str_replace("@id", $perro->getId(), $sql);
            $sql= str_replace("@no", $perro->getNombre(), $sql);
            $sql= str_replace("@ra", $perro->getRaza(), $sql);
            $sql= str_replace("@tam", $perro->getTamano(), $sql);
            $sql= str_replace("@co", $perro->getColor(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
    
    public function Listar(){
        try {
            $sql="select * from perro";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
        
    public function Eliminar($id){
        try {
            $sql= "delete from perro where id='$id'";
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
        
    public function Buscar($id){
        try {
            $sql= "select * from perro where id='$id'";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
        
        public function Modificar($perro) {
        try {
            $sql="update perro set nombre='@no',raza='@ra',tamano='@tam',color='@co' where id='@id'";
            $sql= str_replace("@id", $perro->getId(), $sql);
            $sql= str_replace("@no", $perro->getNombre(), $sql);
            $sql= str_replace("@ra", $perro->getRaza(), $sql);
            $sql= str_replace("@tam", $perro->getTamano(), $sql);
            $sql= str_replace("@co", $perro->getColor(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
}

