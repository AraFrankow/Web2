<?php
include_once("../../componentes/conf/conf.php");
$tipo;
$id;
$precio;
$media;
$estado;
if (isset($_POST['tipo']) or isset($_POST['id']) or isset($_POST['precio']) or isset($_POST['estado']) or isset($_POST['media'])) {
    $tipo = $_POST['tipo'];
    $id = $_POST['id'];
    $precio = $_POST['precio'];
    $estado = $_POST['estado'];
    
    $media = time().".jpg";
    $temporal = $_FILES['media']['tmp_name'];
    move_uploaded_file($temporal,"../../img/$media");

    $consulta = "UPDATE habitacion SET tipo='$tipo', precio='$precio', fk_Estado='$estado',media ='$media'  WHERE id_Habitacion = '$id' ";
    mysqli_query($con,$consulta);
    header("Location: ../index.php");
}
?>