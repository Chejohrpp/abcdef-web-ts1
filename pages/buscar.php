<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/insertar.css">
</head>
<body>
    <?php
        include('header.php');
    ?>
    <div class="cont">
        <form action="../php/get_data.php" method="post">
            <div class="info">
                <h1>Escribe el nombre de un tema</h1>
            </div>
            <div class="info">
            <input type="text" name="nombre_buscar" id="nombre_buscar" required class="dato">
            </div>
            <input type="submit" value="Buscar" class="send">
        </form>
    </div>
</body>
</html>