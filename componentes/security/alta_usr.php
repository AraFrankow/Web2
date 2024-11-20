<?php
require_once("../conf/conf.php");
if($con!=NULL){
    $nombre;
    $apellido;
    $correo;
    $tel;
    $contra_uno;
    $contra_dos;

    if(isset($_POST['nombre']) and isset($_POST['apellido']) and isset($_POST['correo']) and isset($_POST['tel']) and isset($_POST['contra_uno']) and isset($_POST['contra_dos'])  ){
        $nombre = mysqli_real_escape_string($con,$_POST['nombre']) ;
        $apellido = mysqli_real_escape_string($con,$_POST['apellido']) ;
        $correo = mysqli_real_escape_string($con,$_POST['correo']) ;
        $tel = mysqli_real_escape_string($con,$_POST['tel']) ;
        $contra_uno = mysqli_real_escape_string($con,$_POST['contra_uno']) ;
        $contra_dos = mysqli_real_escape_string($con,$_POST['contra_dos']) ;

        if($contra_uno == $contra_dos ){

            $consulta = "SELECT * FROM `usuario` WHERE `email` = '$correo' ";

            $resultado = mysqli_query($con,$consulta);

            if(mysqli_num_rows($resultado) > 0){
                header("Location: ../../page/inicio.php?mail=no ");
            }else{
                $insertar ="INSERT INTO `usuario`(`nombre`, `apellido`, `email`, `telefono`, `contrasenia`, `fk_Rol`) VALUES ('$nombre','$apellido','$correo','$tel',MD5('$contra_uno'),'2')";

                mysqli_query($con,$insertar);
                header("Location: ../../page/inicio.php?log=si ");

            }

        }else{
            header("Location: ../../page/inicio.php?pass=no ");
        }

    }
}
?>