<?php
include_once("../../componentes/conf/conf.php");
$tipo;
$id;
$precio;
$media;
$estado;
if (isset($_GET['tipo']) && isset($_GET['id']) && isset($_GET['precio']) && isset($_GET['estado']) && isset($_GET['media'])) {
    $tipo = $_GET['tipo'];
    $id = $_GET['id'];
    $precio = $_GET['precio'];
    $estado = $_GET['estado'];
    $media = $_GET['media'];

    $consulta = "UPDATE habitacion SET tipo='$tipo', precio='$precio', fk_Estado='$estado',media ='$media'  WHERE id_Habitacion = '$id' ";
    mysqli_query($con,$consulta);
    header("Location: ../index.php ");
}
?>