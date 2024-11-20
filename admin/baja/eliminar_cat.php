<?php
include_once("../../componentes/conf/conf.php");
$id;
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consulta= "DELETE FROM habitacion WHERE id_Habitacion='$id' ";

    mysqli_query($con,$consulta);
    header("Location: ../index.php ");
}

?>