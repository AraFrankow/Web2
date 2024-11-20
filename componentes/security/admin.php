<?php
    session_start();

    if(!isset($_SESSION['id_Usuario']) or $_SESSION['fk_Rol'] !=1){
        die("Error 404");
    }
?>