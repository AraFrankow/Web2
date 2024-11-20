<?php 
include_once("../componentes/conf/conf.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear - Admin</title>

</head>
<body>
    <header>
        <h1>Crear - Admin</h1>
    </header>
    <main>
        <section>
            <article>
            <h2>Crear Habitación</h2>
            <form action="alta/alta_cat.php" method="get" >
                <div>
                    <label for="habitacion" >Tipo de habitación</label>
                    <input id="habitacion"  type="text"  name="habitacion" >
                </div>
                <div>
                    <label for="precio" >Precio</label>
                    <input id="precio"  type="number"  name="precio" >
                </div>
                <div>
                    <label for="estado" >Estado</label>
                    <input id="estado"  type="number"  name="estado" >
                </div>
                <div>
                    <input type="submit" value="Cargar" >
                </div>
            </form>
            </article>
            <article>
                <table>
                    <caption>Habitación</caption>
                    <thead>
                        <th>Habitación</th>
                        <th>Precio</th>
                        <th>Estado</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        <?php

                            $consulta = "SELECT * FROM habitacion";

                            $resultado =  mysqli_query($con,$consulta);

                            while($fila = mysqli_fetch_array($resultado)){
                                print "
                                    <tr>
                                        <td>$fila[tipo]</td>
                                        <td>$fila[precio]</td>
                                        <td>$fila[fk_Estado]</td>
                                        <td><a href=modi/mod_cat.php?id=$fila[id_Habitacion]  >Modificar</a></td>
                                        <td><a href=baja/eliminar_cat.php?id=$fila[id_Habitacion]  >Eliminar</a></td>
                                        
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
        <p>Hotel - Admin</p>
    </footer>
</body>
</html>