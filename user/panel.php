<?php 
//session_start();
require_once("../componentes/conf/conf.php");
include_once("../componentes/include/header.php");

if(!$_SESSION['id_Usuario']){
    die("Error 404");

}
?>
<form action="alta/alta.php" method="post" enctype="multipart/form-data" class="container">
    <div>
        <label for="entrada" class="letra">Llegada al hotel</label>
        <input id="entrada" name="entrada" type="date">
    </div>
    <div>
        <label for="salida" class="letra">Salida del hotel</label>
        <input id="salida" name="salida" type="date">
    </div>
    <?php
        $consulta = "SELECT * FROM `habitacion` ";

        $resultado = mysqli_query($con,$consulta);
        print "<select id=habitacion name=habitacion >";
        while($habitacion = mysqli_fetch_array($resultado)){
            print "
                <option value=$habitacion[id_Habitacion] >$habitacion[tipo]</option>
            ";
        }
        print "</select>";

        $consulta_dos = "SELECT * FROM metodo";

        $resultado_dos = mysqli_query($con,$consulta_dos);
        print "<select id=metodo name=metodo >";
        while($metodo = mysqli_fetch_array($resultado_dos)){
            print "
                <option value=$metodo[id_Metodo] >$metodo[metodo_pago]</option>
            ";
        }
        print "</select>";

        print "<input type=hidden name=usuario value=$_SESSION[id_Usuario]  >";
    ?>
    <div>
        <input type="submit" value="Elegir habitacion" >
    </div>
</form>
<?php
    $consulta = "SELECT * FROM reservas";
    $consulta_dos = "SELECT * FROM usuario";
    $consulta_tres = "SELECT * FROM metodo";

    $resultado =  mysqli_query($con,$consulta);
    $resultado_dos =  mysqli_query($con,$consulta_dos);
    $resultado_tres =  mysqli_query($con,$consulta_tres);
    print "<section class=row >";
    while($fila = mysqli_fetch_array($resultado) AND $fila2 = mysqli_fetch_array($resultado_dos) AND $fila3 = mysqli_fetch_array($resultado_tres)){
        print "
            <article class='col-4 container'>
                <div class='card' style='width: 18rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>Habitación $fila[fk_Habitacion]</h5>
                        <h6 class='card-subtitle mb-2 text-body-secondary'>Usuario: $fila2[nombre]</h6>
                        <p class='card-text'>Entrada al hotel: $fila[fecha_entrada]</p>
                        <p class='card-text'>Salida del hotel: $fila[fecha_salida]</p>
                        <p class='card-text'>Metodo de pago: $fila3[metodo_pago]</p>
                    </div>
                </div>
            </article>
        
        ";

    }
    print "</section>";



include_once("../componentes/include/footer.php");
?>