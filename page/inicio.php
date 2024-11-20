<?php 
require_once("../componentes/conf/conf.php");
?>
<h2>Registro</h2>
<?php
    if(isset($_GET['pass'])){
        print "<p style=color:red >Las contraseñas no coinciden</p>";

    }
    if(isset($_GET['mail'])){
        print "<p style=color:red >El correo ya esta registrado!!</p>";

    }
    if(isset($_GET['log'])){
        print "<p style=color:green >Te podes loguear</p>";

    }
?>
<form action="../componentes/security/alta_usr.php" method="post" >
    <div>
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" required  >
    </div>
    <div>
        <label for="apellido">Apellido</label>
        <input id="apellido" name="apellido" type="text" required  >
    </div>
    <div>
        <label for="correo">Correo</label>
        <input id="correo" name="correo" type="email" required >
    </div>
    <div>
        <label for="tel">Telefono</label>
        <input id="tel" name="tel" type="tel" >
    </div>
    <div>
        <label for="contra_uno">Contraseña</label>
        <input id="contra_uno" name="contra_uno" type="password" required >
    </div>
    <div>
        <label for="contra_dos">Repetir Contraseña</label>
        <input id="contra_dos" name="contra_dos" type="password" required >
    </div>
    <div>
        <input type="submit" value="Registarme">
    </div>


</form>
<h2>Login</h2>

<?php
    if(isset($_GET['regis'])){
        print "<p style=color:red >No estas registrado</p>";

    }
    if(isset($_GET['cont'])){
        print "<p style=color:red >Usuario y/o Contraseña incorrectos</p>";

    }
?>

<form action="../componentes/security/login.php" method="post" >
    <div>
        <label for="usuario">Correo</label>
        <input id="usuario" name="usuario" type="email" required >

    </div>
    <div>
        <label for="clave">Contraseña</label>
        <input id="clave" name="clave" type="password" required >
    </div>
    <div>
        <input type="submit" value="Ingresar">
    </div>


</form>