<?php
include_once '../controlador/DaoPerro.php';
$dao=new DaoPerro();
$id=$_GET["id"];
$resp=$dao->Eliminar($id);
//header redirecciona
header("location:listar.php");
