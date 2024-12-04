<?php 
include_once("../componentes/conf/conf.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear - Admin</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../asset/css/estilos.css">
    <link rel="stylesheet" href="../../asset/css/estilos.css">
</head>
<body>
    <header class="color">
        <nav class="navbar navbar-expand-lg container px-3">
            <div class="d-flex w-100 justify-content-between align-items-center">    
                <a class="letra text-decoration-none" href="index.php">
                    <h1 class="h2 cambioColor">Admin</h1>
                </a>
                <ul class='navbar-nav'>
                    <li class='nav-item' >
                        <a href='../componentes/security/logout.php' class='text-decoration-none letra cambioColor' >Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="mainAdmin">
        <section class="container">
            <div class="row justify-content-center">
                <article class="col-6 alinearAdmin">
                    <h2 class="letra">Crear Habitación</h2>
                    <form action="alta/alta_cat.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label for="habitacion" class="form-label letra">Tipo de habitación</label>
                            <input id="habitacion"  type="text"  name="habitacion" class="form-control moverInput">
                        </div>
                        <div>
                            <label for="precio" class="form-label letra">Precio</label>
                            <input id="precio"  type="number"  name="precio" class="form-control moverInput">
                        </div>
                        <div>
                            <label for="estado" class="form-label letra">Estado</label>
                            <input id="estado"  type="number"  name="estado" class="form-control moverInput">
                        </div>
                        <div>
                            <label for="media" class="form-label letra">Imagen</label>
                            <input id="media" name="media" type="file" class="form-control moverInput">
                        </div>
                        <div>
                            <input type="submit" value="Cargar" class="btn btn-primary">
                        </div>
                    </form>
                </article>
                <article class="col-6">
                    <table>
                        <caption class="letra">Habitaciones</caption>
                        <thead>
                            <th class="letra">Habitación</th>
                            <th class="letra">Precio</th>
                            <th class="letra">Estado</th>
                            <th class="letra">Imagen</th>
                            <th class="letra">Modificar</th>
                            <th class="letra">Eliminar</th>
                        </thead>
                        <tbody>
                            <?php

                                $consulta = "SELECT * FROM habitacion";

                                $resultado =  mysqli_query($con,$consulta);

                                while($fila = mysqli_fetch_array($resultado)){
                                    print "
                                        <tr>
                                            <td class='letra'>$fila[tipo]</td>
                                            <td class='letra'>$fila[precio]</td>
                                            <td class='letra'>$fila[fk_Estado]</td>
                                            <td>
                                                <figure class=arreg >
                                                    <img src=../img/$fila[media] >
                                                </figure>
                                            </td>
                                            <td class='letra'><a href=modi/mod_cat.php?id=$fila[id_Habitacion]  >Modificar</a></td>
                                            <td class='letra'><a href=baja/eliminar_cat.php?id=$fila[id_Habitacion]  >Eliminar</a></td>
                                            
                                        </tr>                          
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
                </article>
            </div> 
        </section>

    </main>
    <footer>
        <nav class="color">
            <div class="container container-fluid ">
                <p class="letra footerConte">Arabela Frankow &copy;</p>
            </div>
        </nav>
        
    </footer>
    
    <script src="../asset/js/bootstrap.js" ></script>
</body>
</html>