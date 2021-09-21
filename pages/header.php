<div class="contenedor">
    <div class="navbar">
        <div class="logo">
            <h1>ABCDEF</h1>
        </div>
        <ul>
            <li><a href="javascript:inicio()">Inicio</a></li>
            <li><a href="javascript:insertar()">Insertar</a></li>
            <li><a href="javascript:modificar()">Modificar</a></li>
            <li><a href="javascript:eliminar()">Eliminar</a></li>
        </ul>
    </div>
</div>
<script>
    function insertar(){      
        window.location.href = "/abcdef/pages/insertar.php";
    }
    function inicio(){
        window.location.href = "/abcdef";
    }
    function eliminar(){
        nombre_tema = prompt('escriba el NOMBRE del tema a eliminar');
        var URLactual = window.location.pathname;
        if(nombre_tema == ""){
            alert('No hay nada escrito');
        }else if(nombre_tema != undefined){
            window.location.href = "/abcdef" + "?name_eliminar=" + nombre_tema;
        }      
    }
    function modificar(){
        window.location.href= "/abcdef/pages/buscar.php";
    }
</script>

<?php
    if (isset($_GET["name_eliminar"])) {
        $name = $_GET["name_eliminar"];
        //conexion a la DB
        require('php/conexion.php');

        $sql = "DELETE FROM temas WHERE nombre='".$name."'";
        $message = '<script language="javascript">alert("Eliminado exitoso");</script>'; 
        $message .= '<script language="javascript"> window.location.href = "/abcdef";</script>';
        //envio de solicitud de $sql a la DB
        require('php/send_request.php');
    }
?>