<?php
require_once("../conf/conf.php");
if ($con!=NULL) {
    $usuario;
    $clave;

    if (isset($_POST['usuario']) and isset($_POST['clave'])) {
        $usuario = mysqli_real_escape_string($con,$_POST['usuario'] );
        $clave = mysqli_real_escape_string($con,$_POST['clave'] );

        $consulta = "SELECT * FROM `usuario` WHERE `email` = '$usuario' ";
        $resultado = mysqli_query($con,$consulta);

        if(mysqli_num_rows($resultado) > 0){
            $consulta_dos = "SELECT * FROM `usuario` WHERE `email` = '$usuario' AND `contrasenia`=MD5('$clave') ";
            $resultado_dos = mysqli_query($con,$consulta_dos);
            if(mysqli_num_rows($resultado_dos) > 0){
                print "Te logueaste correctamente";
            }else{
                header("Location: ../../page/inicio.php?cont=no");
            }
        }else{
            header("Location: ../../page/inicio.php?regis=no");
        }
    }
}
?>