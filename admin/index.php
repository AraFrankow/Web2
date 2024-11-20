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
        <section class="row abajo">
            <article class="col-5 mover">
            <h2 class="letra">Crear Habitación</h2>
            <form action="alta/alta_cat.php" method="get" >
                <div>
                    <label for="habitacion" class="form-label letra">Tipo de habitación</label>
                    <input id="habitacion"  type="text"  name="habitacion" class="form-control">
                </div>
                <div>
                    <label for="precio" class="form-label letra">Precio</label>
                    <input id="precio"  type="number"  name="precio" class="form-control">
                </div>
                <div>
                    <label for="estado" class="form-label letra">Estado</label>
                    <input id="estado"  type="number"  name="estado" class="form-control">
                </div>
                <div>
                    <input type="submit" value="Cargar" class="btn btn-primary">
                </div>
            </form>
            </article>
            <article class="col-5 mover">
                <table>
                    <caption class="letra">Habitaciones</caption>
                    <thead>
                        <th class="letra">Habitación</th>
                        <th class="letra">Precio</th>
                        <th class="letra">Estado</th>
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
                                        <td class='letra'><a href=modi/mod_cat.php?id=$fila[id_Habitacion]  >Modificar</a></td>
                                        <td class='letra'><a href=baja/eliminar_cat.php?id=$fila[id_Habitacion]  >Eliminar</a></td>
                                        
                                    </tr>                          
                                ";
                            }
                        ?>
                    </tbody>
                </table>
            </article>
        </section>

    </main>
    <footer>
        <nav class="navbar fixed-bottom color">
            <div class="container-fluid">
                <p class="letra pt-3">Arabela Frankow &copy;</p>
            </div>
        </nav>
        
    </footer>
    
    <script src="../asset/js/bootstrap.js" ></script>
</body>
</html>