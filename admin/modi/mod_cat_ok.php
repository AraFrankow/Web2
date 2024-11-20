<?php
include_once("../../componentes/conf/conf.php");
$tipo;
$id;
$precio;
$estado;
if (isset($_GET['tipo']) && isset($_GET['id']) && isset($_GET['precio']) && isset($_GET['estado'])) {
    $tipo = $_GET['tipo'];
    $id = $_GET['id'];
    $precio = $_GET['precio'];
    $estado = $_GET['estado'];

    $consulta = "UPDATE habitacion SET tipo='$tipo', precio='$precio', fk_Estado='$estado' WHERE id_Habitacion = '$id' ";
    mysqli_query($con,$consulta);
    header("Location: ../index.php ");
}
?>