<?php

//SE DECLARAN VARIABLES PARA LA CONEXIÓN
$servidor = "localhost"; //EL SERVIDOR LOCALHOST
$usuario = "root";    //EL NOMBRE DE USUARIO DE LA BASE DE DATOS
$contrasena = "";    //LA CONTRASEÑA DE LA BASE DE DATOS
$BD = "bd_pag_web";      //EL NOMBRE DE LA BASE DE DATOS QUE YA DEBE DE ESTAR CREADA

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $BD);

if (!$conexion) {

    //echo "falló la conexión <br>";
    die("Connection failed: " . mysqli_connect_error());
}
else{
    //echo"Conexión exitosa"; 
}


?>
