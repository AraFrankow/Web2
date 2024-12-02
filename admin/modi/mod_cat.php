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
    <header>
        <nav class="navbar navbar-expand-lg color">
            <div class="container-fluid">    
                <h1><a class="navbar-brand letra" href="../index.php" >Crear - Admin</a></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class='navbar-nav'>
                        <li class='nav-item' >
                            <a href='../componentes/security/logout.php' class='nav-link letra' >Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<main>
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
                <section class='row'>
                    <article class='col-5'>    
                        <input type=hidden name=id value=$fila[id_Habitacion] >    
                        <div>
                            <label for='tipo' class='form-label letra'>Tipo de habitación</label>
                            <input type=text name=tipo value=$fila[tipo] >
                        </div>
                        <div>
                            <label for='precio' class='form-label letra'>Precio</label>
                            <input type=text name=precio value=$fila[precio] >
                        </div>
                        <div>
                            <label for='media' class='form-label letra'>Imagen de la habitación</label>
                            <input id='media' name='media' type='file' class='form-control'>
                        </div>
                        <div>
                            <label for='estado' class='form-label letra'>Estado de la habitación</label>
                            <input type=text name=estado value=$fila[fk_Estado] >
                        </div>
                        <input type=submit value=Modificar class='btn btn-primary'> 
                    </article>
                </section>
                ";
            }
        ?>
    </form>
</main>

<footer>
        <nav class="navbar fixed-bottom color">
            <div class="container-fluid">
                <p class="letra pt-3">Arabela Frankow &copy;</p>
            </div>
        </nav>
        
    </footer>
    
    <script src="../../asset/js/bootstrap.js" ></script>
</body>
</html>