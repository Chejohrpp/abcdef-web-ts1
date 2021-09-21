<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/insertar.css">
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <form action="../php/insert.php" method="post">
        <div class="cont">
            <div class="info">
            <h1 id="titulo">Insertar un nuevo tema</h1>
            </div>
            <div class="info">
                <label for="nombre">Nombre</label>
                <br>
                <input type="text" name="nombre" required class="dato">
            </div>
            <div class="info">
                <label for="semana">Semana</label>
                <br>
                <input type="number" name="semana" required class="dato">
            </div>
            <div class="info">
                <label for="fecha_inicio">Fecha de inicio</label><br>
                <input type="date" name="fecha_inicio" id="fecha_inicio" required class="dato">
            </div>
            <div class="info">
                <label for="fecha_final">Fecha de finalizacion</label><br>
                <input type="date" name="fecha_final" id="fecha_final" required class="dato">
            </div>
            <div class="info">
                <label for="descripcion">Descripcion del tema</label><br>
                <small class="opcional">Opcional</small><br>
                <textarea name="descripcion" id="descripcion" cols="24" rows="2" class="dato"></textarea>
            </div>
            <div class="info"><input type="submit" value="Ingresar" class="send"></div>
        </div>
    </form>
</body>
</html>