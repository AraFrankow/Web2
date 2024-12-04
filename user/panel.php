<?php 
//session_start();
require_once("../componentes/conf/conf.php");
include_once("../componentes/include/header.php");

if(!$_SESSION['id_Usuario']){
    die("Error 404");

}
?>
<section >
    <form action="alta/alta.php" method="post" enctype="multipart/form-data" class="container p-4 border rounded shadow-lg ajuste">
        <div class="nav-item">
            <label for="entrada" class="form-label letra">Llegada al hotel</label>
            <input id="entrada" name="entrada" type="date" class="form-control moverInput">
        </div>
        <div class="nav-item">
            <label for="salida" class="form-label letra">Salida del hotel</label>
            <input id="salida" name="salida" type="date" class="form-control moverInput">
        </div>
        <?php
            $consulta = "SELECT * FROM `habitacion` ";
            $resultado = mysqli_query($con,$consulta);
            print "<div class='moverInput'>";
            print "<label for='metodo' class='form-label letra'>Habitación</label>";
            print "<select id=habitacion name=habitacion class='form-control'>";
            while($habitacion = mysqli_fetch_array($resultado)){
                print "
                    <option value=$habitacion[id_Habitacion] class='moverInput'>$habitacion[tipo]</option>
                ";
            }
            print "</select>";
            print "</div>";

            $consulta_dos = "SELECT * FROM metodo";
            $resultado_dos = mysqli_query($con,$consulta_dos);
            print "<div class='moverInput'>";
            print "<label for='metodo' class='form-label letra'>Método de pago</label>";
            print "<select id=metodo name=metodo class='form-control'>";
            while($metodo = mysqli_fetch_array($resultado_dos)){
                print "
                    <option value=$metodo[id_Metodo] >$metodo[metodo_pago]</option>
                ";
            }
            print "</select>";
            print "</div>";
            print "<input type=hidden name=usuario value=$_SESSION[id_Usuario]  >";
        ?>
        <div>
            <input type="submit" value="Elegir habitacion" class="btn btn-primary">
        </div>
    </form>
        
    <?php
    $consulta_reservas = "SELECT * FROM reservas";
    $resultado_reservas = mysqli_query($con, $consulta_reservas);

    print "<div class='container'>";
    print "<section class='row'>";

    while ($fila_reserva = mysqli_fetch_array($resultado_reservas)) {
        $consulta_usuario = "SELECT * FROM usuario WHERE `id_Usuario` = {$fila_reserva['fk_Usuario']}";
        $resultado_usuario = mysqli_query($con, $consulta_usuario);
        $fila_usuario = mysqli_fetch_array($resultado_usuario);  

        print "
            <article class='col-2 mb-2'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-subtitle mb-2 text-body-secondary'>Usuario: {$fila_usuario['nombre']}</h5>
                        <p class='card-text'>Entrada al hotel: <br>  {$fila_reserva['fecha_entrada']}</p>
                        <p class='card-text'>Salida del hotel: <br> {$fila_reserva['fecha_salida']}</p>
                    </div>
                </div>
            </article>
        ";
    }

    print "</section>";
    print "</div>";
        include_once("../componentes/include/footer.php");
    ?>
</section>