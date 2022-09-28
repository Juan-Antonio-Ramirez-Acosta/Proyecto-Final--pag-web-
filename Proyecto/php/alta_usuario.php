<?php

include("conexion.php"); //para llamar a un archivo
session_start();
$usuario = $_SESSION['usuario'];
$password = $_SESSION['password'];
//declaración de variables para recibir y guardar los datos que vendran de la pagina web
//$nombre = $_POST["nombre"]; //el primer (nombre) es nuestra variable, el segundo (nombre) despues del pos es donde se almacenaran los datos recibidos
//$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

//$sql = "INSERT INTO datosinforma VALUES ( '$nombre', '$email', '$mensaje')";
$sql2 = "SELECT id FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$result2 = mysqli_query($conexion, $sql2);
$id = mysqli_fetch_assoc($result2); 
$insert_id = $id['id'];

$sql = "INSERT INTO mensajes VALUES ( '$insert_id', '$mensaje')";

if (mysqli_query($conexion, $sql)){
    echo "Datos almacenados";
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

//cerrando conexión 
mysqli_close($conexion);


?>