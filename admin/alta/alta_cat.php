<?php
include_once("../../componentes/conf/conf.php");

$habitacion;
$precio;
$estado;
if(isset($_GET['habitacion']) && isset($_GET['precio']) && isset($_GET['estado'])){
    $habitacion = $_GET['habitacion'];
    $precio = $_GET['precio'];
    $estado = $_GET['estado'];
    $consulta = "INSERT INTO habitacion(tipo, precio, fk_Estado) VALUES ('$habitacion','$precio','$estado')";

    mysqli_query($con,$consulta);
    header("Location: ../index.php ");
}


?>