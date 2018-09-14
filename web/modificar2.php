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
        <?php include_once 'menu_cliente.php'; ?>
        <?php
        include_once '../controlador/DaoCliente.php';
        $dao=new DaoCliente();
        $run=$_GET["run"];
        $reg=$dao->Buscar($run);
        //Fetch row recupera solo la primera fila
        $fila=mysqli_fetch_row($reg);
        ?>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(event){
                $("#cboRegion").change(function(){
                    var id_region=$('#cboRegion').val();
                    $.ajax({
                        url:"llenar_ciudad.php",
                        type:'POST',
                        data:{id_region:id_region},
                        success:function(data){
                            $("#cboCiudad").html(data);
                        }
                    })
                });
            });
        </script>
        
        <?php
        $cone = mysqli_connect("localhost","root", "", "misperris");
        $reg= mysqli_query( $cone,"select * from region");
        $reg1= mysqli_query( $cone,"select * from tipo_vivienda");
        ?>
        
        <?php include_once './menu_cliente.php'; ?>
        
        <form method="POST" action="modificar_cliente.php">
            <table class="tableIngresar" border="1">
                <thead>
                    <tr>
                        <th>Formulario de Ingreso de Clientes</th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Run:</td>
                        <td>
                            <input type="text" name="txtRun" value="<?php echo $fila[0] ?>" placeholder="ingrese rut sin puntos y con güion" required/> 
                        </td>
                    </tr>
                    <tr>
                        <td>Correo:</td>
                        <td>
                            <input type="text" name="txtCorreo" value="<?php echo $fila[1] ?>" placeholder="ej: juan@gmail.com" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre Completo:</td>
                        <td>
                            <input type="text" name="txtNombre" value="<?php echo $fila[2] ?>" placeholder="Nombre Apellido" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha Nacimiento:</td>
                        <td>
                            <input type="text" name="txtFecha" value="<?php echo $fila[3] ?>" placeholder="año-mes-día" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td>
                            <input type="text" name="txtTelefono" value="<?php echo $fila[4] ?>" placeholder="ej: 42259363" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Región:</td>
                        <td>
                            <select name="cboRegion" id="cboRegion" value="<?php echo $fila[5] ?>" required>
                                <?php
                                while ($row=mysqli_fetch_array($reg)) {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                }

                                  ?>  
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>Ciudad:</td>
                        <td>
                            <select name="cboCiudad" id="cboCiudad" value="<?php echo $fila[6] ?>" required></select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo de Vivienda:</td>
                        <td>
                            <select name="cboTipo" id="cboTipo" value="<?php echo $fila[7] ?>" required>
                                <?php
                                while ($row=mysqli_fetch_array($reg1)) {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                }

                                  ?>  
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="w3-input" type="submit" value="Actualizar" />
                        </td>                        
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
