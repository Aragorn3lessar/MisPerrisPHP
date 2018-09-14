<?php

include_once '../controlador/DaoCliente.php';
$dao=new DaoCliente();
$run=$_GET["run"];
$resp=$dao->Eliminar($run);
//header redirecciona
header("location:listar_cliente.php");