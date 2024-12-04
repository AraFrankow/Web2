<?php 
session_start();
require_once("../conf/conf.php");

if($con!=NULL){
    $usuario;
    $clave;

    if(isset($_POST['usuario']) and isset($_POST['clave'])  ){
        $usuario = mysqli_real_escape_string($con,$_POST['usuario'] );
        $clave = mysqli_real_escape_string($con,$_POST['clave'] );

        $consulta = "SELECT * FROM `usuario` WHERE `email`='$usuario'";

        $resultado = mysqli_query($con,$consulta);

        if(mysqli_num_rows($resultado) > 0){
            $consulta_dos="SELECT * FROM `usuario` WHERE `email`='$usuario' AND `contrasenia`=MD5('$clave')";

            $resultado_dos= mysqli_query($con,$consulta_dos);
            if(mysqli_num_rows($resultado_dos) > 0){
                $datos = mysqli_fetch_array($resultado_dos);

                if($datos['fk_Rol'] == 1){
                    $_SESSION = $datos;

                    header("Location: ../../admin/index.php");
                }else{
                    $_SESSION = $datos;
                    header("Location: ../../user/panel.php");
                }


            }else{
                header("Location: ../../page/registro.php?cont=no");
            }


        }else{
            header("Location: ../../page/registro.php?regis=no");
        }

    }

}


?>