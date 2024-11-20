<?php 

//datos de conexión a la base de datos
//constante('nombre','valor') 
define('servidor','localhost'); //A que server se tiene que conectar
define('usuario','root');//Usuario que tiene acceso
define('clave','');//Clave del usuario
define('base_datos','hotel');//Nombre de la base de datos
define('puerto','3306');//Puerto de conexión de mysql

//Guardamos los datos de conexión en una variable para poder utilizarla en nuesta plataforma

//mysqli_connect = conexión con mysql desde php
$con = mysqli_connect(servidor,usuario,clave,base_datos,puerto);

if(!$con){
    print "<h1>Error</h1>";
}else{
    print "<h1>Exito✔</h1>";
}


?>