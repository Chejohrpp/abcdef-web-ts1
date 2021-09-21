<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
        require('php/conexion.php');
        require_once 'pages/header.php';

        $sqlTodos = "SELECT * FROM temas";
        $result = mysqli_query($db,$sqlTodos);        
    ?>

    <table>
        <tr>
            <td>Nombre</td>
            <td>Semana</td>
            <td>Fecha de inicio</td>
            <td>Fecha de finalizacion</td>
            <td>Descripcion</td>
        </tr>
        <?php 
            while($mostar = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $mostar['nombre']?></td>
            <td><?php echo $mostar['semana']?></td>
            <td><?php echo $mostar['fecha_inicio']?></td>
            <td><?php echo $mostar['fecha_final']?></td>
            <td><?php echo $mostar['descripcion']?></td>
        </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>