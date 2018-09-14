<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
    </head>
    <body>
        
        <?php
        include_once 'menu_cliente.php';
        ?>
        <center><h2>Listado de Cliente</h2></center>
        </div>
        <table class="table" border="1">
            <tr>
                <th>Run</th>
                <th>Correo</th>
                <th>Nombre Completo</th>
                <th>Fecha Nacimiento</th>
                <th>Telefono</th>
                <th>Id Vivienda</th>
                <th>Id Ciudad</th>
                <th>Id Región</th>
            </tr>
            <?php
                    include_once '../controlador/DaoCliente.php';
                    $dao=new DaoCliente();
                    $reg=$dao->Listar();
                    while ($row = mysqli_fetch_array($reg)) {
                        echo '<tr>';
                        echo '<td>'.$row[0]."</td>";
                        echo '<td>'.$row[1]."</td>";
                        echo '<td>'.$row[2]."</td>";
                        echo '<td>'.$row[3]."</td>";
                        echo '<td>'.$row[4]."</td>";
                        echo '<td>'.$row[5]."</td>";
                        echo '<td>'.$row[6]."</td>";
                        echo '<td>'.$row[7]."</td>";
                        echo '<td><a href="eliminar_cliente.php?run='.$row[0].'">Eliminar</a></td>';
                        echo '<td><a href="modificar2.php?run='.$row[0].'">Modificar</a></td>';
                        echo '</tr>';
                    }
            ?>
        </table>
    </body>
</html>
