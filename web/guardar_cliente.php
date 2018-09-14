<?php

include_once '../controlador/DaoCliente.php';
include_once '../modelo/Cliente.php';

$run= $_POST["txtRun"];
$correo= $_POST["txtCorreo"];
$nombre_completo= $_POST["txtNombre"];
$fecha_nacimiento=$_POST["txtFecha"];
$telefono=$_POST["txtTelefono"];
$region=$_POST["cboRegion"];
$ciudad=$_POST["cboCiudad"];
$tipo_vivienda=$_POST["cboTipo"];

$cliente = new Cliente();
$cliente->setRun($run);
$cliente->setCorreo($correo);
$cliente->setNombre_completo($nombre_completo);
$cliente->setFecha_nacimiento($fecha_nacimiento);
$cliente->setTelefono($telefono);
$cliente->setRegion($region);
$cliente->setCiudad($ciudad);
$cliente->setTipo_vivienda($tipo_vivienda);

$dao=new DaoCliente();
$filas_afectadas=$dao->Grabar($cliente);
if ($filas_afectadas>0) {
    echo 'Cliente registrado';
} else {
    echo 'Error al registrar el Cliente';
}