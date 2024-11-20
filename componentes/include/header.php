<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../asset/css/estilos.css">
    <link rel="stylesheet" href="../../asset/css/estilos.css">
</head>
<body>
    <header>
        
    <nav class="navbar navbar-expand-lg color">
            <div class="container-fluid">    
                <h1><a class="navbar-brand letra" href="../index.php" >Hotel</a></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                    require_once("../componentes/conf/conf.php");
                    $consulta = "SELECT * FROM habitacion";
                    $resultado =  mysqli_query($con,$consulta);
                    print "<ul class='navbar-nav'>";
                        if(!isset($_SESSION['id_Usuario'])){
                            print "
                                <li class='nav-item' >
                                    <a href='registro.php' class='nav-link letra' >Registro/Login</a>
                                </li>
                            ";
                        }else{
                            print "
                                <li class='nav-item' >
                                    <a href='../user/panel.php' class='nav-link letra' >Reservar habitación</a>
                                </li>
                                <li class='nav-item'>
                                    <a href='../componentes/security/logout.php' class='nav-link letra'>Cerrar Sesión</a>
                                </li>
                            ";
                        }
                    print "</ul>"    
                ?>
                </div>
            </div>
        </nav>
    </header>
    <main>

