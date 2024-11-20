<?php
include_once("../../componentes/conf/conf.php");
$id;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "SELECT * FROM `habitacion` WHERE `id_Habitacion` = '$id' ";
    $resultado = mysqli_query($con,$consulta);
}

?>

<form action="mod_cat_ok.php" method="get">
    <?php
        while($fila = mysqli_fetch_array($resultado)){
            print "
                <input type=hidden name=id value=$fila[id_Habitacion] >
                <input type=text name=tipo value=$fila[tipo] >
                <input type=text name=precio value=$fila[precio] >
                <input type=text name=estado value=$fila[fk_Estado] >
                <input type=submit value=Modificar> 
            ";
        }
    ?>
</form>