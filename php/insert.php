<?php

//conexion a la DB
require('conexion.php');

$nombre = $_POST['nombre'];
$semana = $_POST['semana'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_final = $_POST['fecha_final'];
$descripcion = $_POST['descripcion'];

if(empty($descripcion)){
    $descripcion = "NULL";
}

$sql = "INSERT INTO temas(codigo, nombre, semana,fecha_inicio,fecha_final,descripcion)
VALUES (NULL, '".$nombre."',
     '".$semana."',
    '".$fecha_inicio."',
    '".$fecha_final."',
    '".$descripcion."')";
$message = '<script language="javascript">alert("Insertado exitoso");</script>'; 
$message .= '<script language="javascript"> window.location.href = "/abcdef/pages/insertar.php";</script>';

//envio de solicitud de $sql a la DB
require('send_request.php');

?>