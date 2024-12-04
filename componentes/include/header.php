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
</head>
<body>
    <header class="color">
        <nav class="navbar navbar-expand-lg container px-3">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <a class="letra text-decoration-none" href="../index.php">
                    <h1 class="h2 cambioColor">Hotel</h1>
                </a>
                <ul class="navbar-nav">
                    <?php
                        require_once("../componentes/conf/conf.php");
                        $consulta = "SELECT * FROM habitacion";
                        $resultado =  mysqli_query($con, $consulta);

                        if (!isset($_SESSION['id_Usuario'])) {
                            print "
                                <li class='nav-item'>
                                    <a href='registro.php' class='text-decoration-none letra cambioColor'>Registro/Login</a>
                                </li>
                            ";
                        } else {
                            print "
                                <li class='nav-item'>
                                    <a href='../user/panel.php' class='text-decoration-none letra cambioColor moverEscondido'>Reservar habitación</a>
                                </li>
                                <li class='nav-item'>
                                    <a href='../componentes/security/logout.php' class='text-decoration-none letra cambioColor'>Cerrar Sesión</a>
                                </li>
                            ";
                        }
                    ?>
                </ul>
                <div class="ms-auto">
                    <a href="https://wa.me/" target="_blank" class="text-decoration-none letra cambioColor">Para más info sobre como son las habitaciones</a>
                </div>

            </div>
        </nav>
    </header>
    <main>

