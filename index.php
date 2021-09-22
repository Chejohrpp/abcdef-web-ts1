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
    <input id="buscar" type="text" class="buscar" placeholder="Escriba algo para buscar" />
    <table id="tabla">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Semana</th>
            <th>Fecha de inicio</th>
            <th>Fecha de finalizacion</th>
            <th>Descripcion</th>
        </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
    <script src="js/buscar.js"></script>
</body>
</html>