<?php
    include_once("../../componentes/conf/conf.php");

    $entrada;
    $salida;
    $habitacion;
    $usuario;

    if(isset($_POST['entrada']) AND isset($_POST['salida']) AND isset($_POST['habitacion']) AND isset($_POST['usuario'])){
        $entrada = mysqli_real_escape_string($con, $_POST['entrada'] );
        $salida = mysqli_real_escape_string($con, $_POST['salida'] );
        $habitacion = mysqli_real_escape_string($con, $_POST['habitacion'] );
        $usuario = mysqli_real_escape_string($con, $_POST['usuario'] );

        $consulta = " INSERT INTO `reservas`(`fecha_entrada`, `fecha_salida`, `fk_Usuario`, `fk_Habitacion`) VALUES ('$entrada','$salida','$usuario','$habitacion') ";
        mysqli_query($con,$consulta);
        header("Location: ../../index.php ");
    }
?>