<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Arabela Frankow</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../asset/css/estilos.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <h1><a class="navbar-brand" href="../index.php">Hotel</a></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                    require_once("../components/conf/conf.php");

                        $consulta = "SELECT * FROM categorias";

                        $resultado =  mysqli_query($con,$consulta);
                        print "<ul class='navbar-nav'>";
                        while($fila = mysqli_fetch_array($resultado)){
                            print "
                                <li class='nav-item' >
                                
                                <a class='nav-link' href=../pages/categoria.php?id=$fila[id_categoria]  >$fila[nombre]</a>
                                    
                                </li>
                            
                            ";
                        ;
                        }
                        if(!isset($_SESSION['id_usuario'])){
                            print "
                                <li class='nav-item' >
                                <a href='registro.php' class='nav-link' >Registro/Login</a>
                                </li>
                        ";
                        }else{
                            print "
                                <li class='nav-item' >
                                <a href='../user/panel.php' class='nav-link' >$_SESSION[email]</a>
                                </li>
                                <li class='nav-item'>
                                    <a href='../components/security/logout.php' class='nav-link'>Cerrar Sesión</a>
                                </li>
                        ";
                        }
                        print "</ul>"
                    ?>
                </div>
            </div>
        </nav>
    </header>
    <main class="container" >



