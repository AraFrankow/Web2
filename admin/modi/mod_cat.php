<?php
include_once("../../componentes/conf/conf.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear - Admin</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../../asset/css/estilos.css">
</head>
<body>
    <header class="color">
        <nav class="navbar navbar-expand-lg container px-3">
            <div class="d-flex w-100 justify-content-between align-items-center">    
                <a class="letra text-decoration-none" href="../index.php">
                    <h1 class="h2 cambioColor">Admin</h1>
                </a>
                <ul class='navbar-nav'>
                    <li class='nav-item' >
                        <a href='../../componentes/security/logout.php' class='text-decoration-none letra cambioColor' >Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<main class="mainAdmin">
    <?php
    $id;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $consulta = "SELECT * FROM `habitacion` WHERE `id_Habitacion` = '$id' ";
        $resultado = mysqli_query($con,$consulta);
    }
    ?>
    <form action="mod_cat_ok.php" method="post" enctype="multipart/form-data">
        <?php
            while($fila = mysqli_fetch_array($resultado)){
                print "
                <div class='container'>
                    <section class='row justify-content-center'>
                        <article class='col-6'>    
                            <input type=hidden name=id value=$fila[id_Habitacion] class='form-control'>    
                            <div>
                                <label for='tipo' class='form-label letra'>Tipo de habitación</label>
                                <input type=text name=tipo value=$fila[tipo] class='form-control moverInput' >
                            </div>
                            <div>
                                <label for='precio' class='form-label letra'>Precio</label>
                                <input type=text name=precio value=$fila[precio] class='form-control moverInput'>
                            </div>
                            <div>
                                <label for='media' class='form-label letra'>Imagen de la habitación</label>
                                <input id='media' name='media' type='file' class='form-control moverInput'>
                            </div>
                            <div>
                                <label for='estado' class='form-label letra'>Estado de la habitación</label>
                                <input type=text name=estado value=$fila[fk_Estado] class='form-control moverInput'>
                            </div>
                            <input type=submit value=Modificar class='btn btn-primary'> 
                        </article>
                    </section>
                </div>
                ";
            }
        ?>
    </form>
</main>

    <footer>
        <nav class="color">
            <div class="container container-fluid ">
                <p class="letra footerConte">Arabela Frankow &copy;</p>
            </div>
        </nav>
        
    </footer>
    
    <script src="../../asset/js/bootstrap.js" ></script>
</body>
</html>