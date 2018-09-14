<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <?php include_once 'menu.php'; ?>
        <?php
        include_once '../controlador/DaoPerro.php';
        $dao=new DaoPerro();
        $id=$_GET["id"];
        $reg=$dao->Buscar($id);
        //Fetch row recupera solo la primera fila
        $fila=mysqli_fetch_row($reg);
        ?>
        <form method="POST" action="modificar_perro.php">
            <table class="tableIngresar" border="1">
                <thead>
                    <tr>
                        <th>Formulario de Ingreso de Perros</th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Id:</td>
                        <td>
                            <input type="text" name="txtId" value="<?php echo $fila[0] ?>" /> 
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <input type="text" name="txtNombre" value="<?php echo $fila[1] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Raza:</td>
                        <td>
                            <input type="text" name="txtRaza" value="<?php echo $fila[2] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Tamaño (CM):</td>
                        <td>
                            <input type="number" min="0" max="150" name="txtTamano" value="<?php echo $fila[3] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Color:</td>
                        <td>
                            <input type="text" name="txtColor" value="<?php echo $fila[4] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="w3-input" type="submit" value="Modificar" />
                        </td>                        
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>