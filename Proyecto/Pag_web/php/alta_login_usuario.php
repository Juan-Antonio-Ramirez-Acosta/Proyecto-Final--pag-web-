<?php

include("conexion.php"); //para llamar a un archivo

 //el primer (nombre) es nuestra variable, el segundo (nombre) despues del pos es donde se almacenaran los datos recibidos
$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];


//******************************************************************************************************************* */
$sql3 = "SELECT MAX(id) id FROM usuarios;";
$result3 = mysqli_query($conexion, $sql3);
$id = mysqli_fetch_assoc($result3); 
$insert_id = $id['id'];
$insert_id = (int)$insert_id + 1;
//******************************************************************************************************************* */
$sql2 = "INSERT INTO `usuarios`(`id`, `usuario`, `password`) VALUES( '$insert_id', '$usuario', '$password')";
   
if (mysqli_query($conexion, $sql2)){
    //******************************************************************************************************************* */
$sql = "INSERT INTO `datosinforma`(`nombre`, `email`, `cel`, `usuarios_id`) VALUES ( '$nombre', '$email', '$telefono', '$insert_id')";
   
if (mysqli_query($conexion, $sql)){
        ?>
        <center>
        <div style="background-color: #ffffff; margin: 0px; padding: 0px;">
            <p>&nbsp;</p>
            <h2 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡GRACIAS POR COMPLETAR EL RREGISTRO!</h2>
            <p>&nbsp;</p>
            <img src="formulario.jpeg" alt="test-resuelto"  width ="60%">
            <div style="background-color: #ffffff; margin: 0px; padding: 0px;">
            <h2 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡LE AGRADECEMOS SU APOYO!</h2>
            <p>&nbsp;</p>
        </center>
    <?php
 
    // Redirigir utilizando el encabezado de ubicación

    $url ="../Login.html"; // aqui pones la url
    $tiempo_espera = 3; // Aquí se configura cuántos segundos hasta la actualización.
    // Declaramos la funcion apra la redirección
    header("refresh: $tiempo_espera; url=$url");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
}
else{
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conexion);
}


//cerrando conexión 
mysqli_close($conexion);


?>