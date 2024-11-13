<?php 

require_once("../components/conf/conf.php");
include_once("../components/include/header.php");

?>

<?php
    $consulta = "SELECT * FROM noticias";
    $resultado =  mysqli_query($con,$consulta);
    print "<section class=row >";
        while($fila = mysqli_fetch_array($resultado)){
            print "
                <article class=col-4 >
                    <div class='card' style='width: 18rem;'>
                        <figure>
                            <img src=../imgs/$fila[media] class='card-img-top' >
                        </figure>
                        <div class='card-body'>
                            <h2 class='card-title' >$fila[titulo]</h2>     
                                <a href=noticia.php?id=$fila[id_noticia] class='btn btn-primary' >Ver Más</a>
                        </div>
                    </div>
                </article>
            ";
        }
    print "</section>";
    include_once("../components/include/footer.php");
?>