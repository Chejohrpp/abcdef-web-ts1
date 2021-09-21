<?php

//conexion a la DB
require('conexion.php');
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$semana = $_POST['semana'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_final = $_POST['fecha_final'];
$descripcion = $_POST['descripcion'];

if(empty($descripcion)){
    $descripcion = "NULL";
}

$sql = "UPDATE temas set nombre='".$nombre."',
     semana='".$semana."',
    fecha_inicio='".$fecha_inicio."',
    fecha_final='".$fecha_final."',
    descripcion='".$descripcion."' WHERE codigo='".$codigo."'";

$message = '<script language="javascript">alert("Modificacion exitosa");</script>'; 
$message .= '<script language="javascript"> window.location.href = "/abcdef";</script>';

//envio de solicitud de $sql a la DB
require('send_request.php');

?>