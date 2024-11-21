<?php
include_once("../../componentes/conf/conf.php");

$habitacion;
$precio;
$media;
$estado;
if(isset($_POST['habitacion']) or isset($_POST['precio']) or isset($_POST['media']) or isset($_POST['estado'])){
    $habitacion = mysqli_real_escape_string($con, $_POST['habitacion'] );
    $precio = mysqli_real_escape_string($con, $_POST['precio'] );
    $media = mysqli_real_escape_string($con, $_POST['media'] );
    $estado = mysqli_real_escape_string($con, $_POST['estado'] );
    
    $media = time().".jpg";
    $temporal = $_FILES['media']['tmp_name'];
    move_uploaded_file($temporal,"../../img/$media");
    
    $consulta = "INSERT INTO habitacion(tipo, precio, media, fk_Estado) VALUES ('$habitacion','$precio','$media','$estado')";

    mysqli_query($con,$consulta);
    header("Location: ../index.php ");
}


?>