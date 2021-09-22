<?php
    require("conexion.php");

    $nombre_buscar = $_POST['nombre_buscar'];

    $sql = "SELECT * FROM temas WHERE nombre='".$nombre_buscar."' LIMIT 1";

    $result = mysqli_query($db,$sql);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($db));
        exit();
    }   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/insertar.css">
</head>
<body>
<?php
    include('../pages/header.php');
    while($mostar = mysqli_fetch_array($result)){
?>
<form action="update.php" method="post">
    <div class="cont">
            <div class="info">
            <h1 id="titulo">Modificar tema</h1>
            </div>
            <div class="info">
                <label for="nombre">Nombre</label>
                <br>
                <input type="text" name="nombre" required class="dato" value="<?php echo $mostar['nombre'] ?>">
            </div>
            <div class="info">
                <label for="semana">Semana</label>
                <br>
                <input type="number" name="semana" required class="dato" value="<?php echo $mostar['semana'] ?>">
            </div>
            <div class="info">
                <label for="fecha_inicio">Fecha de inicio</label><br>
                <input type="date" name="fecha_inicio" id="fecha_inicio" required class="dato" value="<?php  echo $mostar['fecha_inicio'] ?>">
            </div>
            <div class="info">
                <label for="fecha_final">Fecha de finalizacion</label><br>
                <input type="date" name="fecha_final" id="fecha_final" required class="dato" value="<?php echo $mostar['fecha_final'] ?>">
            </div>
            <div class="info">
                <label for="descripcion">Descripcion del tema</label><br>
                <small class="opcional">Opcional</small><br>
                <textarea name="descripcion" id="descripcion" cols="24" rows="2" class="dato"><?php if($mostar['descripcion'] != "NULL"){ echo $mostar['descripcion']; }?></textarea>
            </div>
            <input type="hidden" name="codigo" id="codigo" value = "<?php  echo $mostar['codigo'] ?>" >
            <div class="info"><input type="submit" value="Modificar" class="send"></div>
    </div>
</form>
<?php
    }
?>
</body>
</html>