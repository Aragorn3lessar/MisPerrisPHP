<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
    </head>
    <body>
        
        <?php
        include_once 'menu.php';
        ?>
        <center><h2>Listado de Perros</h2></center>
        </div>
        <table class="table" border="1">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Raza</th>
                <th>Tamaño (CM)</th>
                <th>Color</th>
            </tr>
            <?php
                    include_once '../controlador/DaoPerro.php';
                    $dao=new DaoPerro();
                    $reg=$dao->Listar();
                    while ($row = mysqli_fetch_array($reg)) {
                        echo '<tr>';
                        echo '<td>'.$row[0]."</td>";
                        echo '<td>'.$row[1]."</td>";
                        echo '<td>'.$row[2]."</td>";
                        echo '<td>'.$row[3]."</td>";
                        echo '<td>'.$row[4]."</td>";
                        echo '<td><a href="eliminar.php?id='.$row[0].'">Eliminar</a></td>';
                        echo '<td><a href="modificar.php?id='.$row[0].'">Modificar</a></td>';
                        echo '</tr>';
                    }
            ?>
        </table>
    </body>
</html>
