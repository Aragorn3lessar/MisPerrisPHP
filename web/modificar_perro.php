<?php

include_once '../controlador/DaoPerro.php';
include_once '../modelo/Perro.php';

$id=$_POST["txtId"];
$nombre=$_POST["txtNombre"];
$raza=$_POST["txtRaza"];
$tamano=$_POST["txtTamano"];
$color=$_POST["txtColor"];

$perro=new Perro();
$perro->setId($id);
$perro->setNombre($nombre);
$perro->setRaza($raza);
$perro->setTamano($tamano);
$perro->setColor($color);

$dao=new DaoPerro();
$filas_afectadas=$dao->Modificar($perro);
if ($filas_afectadas>0) {
    echo 'Datos actualizados';
} else {
    echo 'Error al actualizar Datos';
}