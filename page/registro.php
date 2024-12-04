<?php 
require_once("../componentes/include/header.php");
?>
<section class="mainAdmin">
    <div class="container ">
        <div class="row justify-content-center">
            <article class="col-6 ">
                <h2 class="letra">Registro</h2>
                <?php
                    if(isset($_GET['pass'])){
                        print "<p class='text-bg-danger p-3' >Las contraseñas no coinciden</p>";

                    }
                    if(isset($_GET['mail'])){
                        print "<p class='text-bg-danger p-3' >El correo ya esta registrado!!</p>";

                    }
                    if(isset($_GET['log'])){
                        print "<p class='text-bg-success p-3' >Te podes loguear</p>";

                    }
                ?>
                <form action="../componentes/security/alta_usr.php" method="post" >
                    <div>
                        <label for="nombre" class="form-label letra">Nombre</label>
                        <input id="nombre" name="nombre" type="text" required  class="form-control moverInput">
                    </div>
                    <div>
                        <label for="apellido" class="form-label letra">Apellido</label>
                        <input id="apellido" name="apellido" type="text" required  class="form-control moverInput">
                    </div>
                    <div>
                        <label for="correo" class="form-label letra">Correo</label>
                        <input id="correo" name="correo" type="email" required class="form-control moverInput">
                    </div>
                    <div>
                        <label for="tel " class="form-label letra">Telefono</label>
                        <input id="tel" name="tel" type="tel" class="form-control moverInput">
                    </div>
                    <div>
                        <label for="contra_uno" class="form-label letra">Contraseña</label>
                        <input id="contra_uno" name="contra_uno" type="password" required class="form-control moverInput">
                    </div>
                    <div>
                        <label for="contra_dos" class="form-label letra">Repetir Contraseña</label>
                        <input id="contra_dos" name="contra_dos" type="password" required class="form-control moverInput">
                    </div>
                    <div>
                        <input type="submit" value="Registarme" class="btn btn-primary">
                    </div>
                </form>
            </article>
            <article class="col-6 alinearAdmin">
                <h2 class="letra">Login</h2>
                <?php
                    if(isset($_GET['regis'])){
                        print "<p class='text-bg-danger p-3' >No estas registrado</p>";

                    }
                    if(isset($_GET['cont'])){
                        print "<p class='text-bg-danger p-3' >Usuario y/o Contraseña incorrectos</p>";

                    }
                ?>

                <form action="../componentes/security/login.php" method="post">
                    <div>
                        <label for="usuario" class="form-label letra">Correo</label>
                        <input id="usuario" name="usuario" type="email" required class="form-control moverInput">

                    </div>
                    <div>
                        <label for="clave" class="form-label letra">Contraseña</label>
                        <input id="clave" name="clave" type="password" required class="form-control moverInput">
                    </div>
                    <div>
                        <input type="submit" value="Ingresar" class="btn btn-primary">
                    </div>
                </form>

            </article>
        </div>
    </div>
</section>
<?php
    include_once("../componentes/include/footer.php");
?>