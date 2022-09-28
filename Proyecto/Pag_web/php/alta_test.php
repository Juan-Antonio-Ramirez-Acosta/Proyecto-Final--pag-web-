<?php

include("conexion.php"); //para llamar a un archivo
session_start();
$usuario = $_SESSION['usuario'];
$password = $_SESSION['password'];

$vacuna = $_POST["vacuna"]; //el primer (nombre) es nuestra variable, el segundo (nombre) despues del pos es donde se almacenaran los datos recibidos
$opi_vacuna = $_POST["opi_vacuna"];
$cubrebocas = $_POST["cubrebocas"];
$llev_niño = $_POST["llev_niño"]; 
$casa_limp = $_POST["casa_limp"];
$cont_enferme = $_POST["cont_enferme"];
$estuv_saliend = $_POST["estuv_saliend"];
$prueb_covid = $_POST["prueb_covid"]; 
$prob_trabaj = $_POST["prob_trabaj"];
$test_ayuda = $_POST["test_ayuda"];

$sql2 = "SELECT id FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$result2 = mysqli_query($conexion, $sql2);
$id = mysqli_fetch_assoc($result2); 
$insert_id = $id['id'];

$sql = "INSERT INTO encuesta VALUES ( '$vacuna', '$opi_vacuna', '$cubrebocas', '$llev_niño', '$casa_limp', '$cont_enferme', '$estuv_saliend', '$prueb_covid', '$prob_trabaj', '$test_ayuda', '$insert_id')";
   
if (mysqli_query($conexion, $sql)){
    //echo "Datos almacenados";
    ?>
        <center>
        <div style="background-color: #ffffff; margin: 0px; padding: 0px;">
            <p>&nbsp;</p>
            <h2 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡GRACIAS POR COMPLETAR EL TEST!</h2>
            <p>&nbsp;</p>
            <img src="formulario.jpeg" alt="test-resuelto"  width ="900px">
            <div style="background-color: #ffffff; margin: 0px; padding: 0px;">
            <h2 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡LE AGRADECEMOS SU APOYO!</h2>
            <p>&nbsp;</p>
        </center>
    <?php
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

//cerrando conexión 
mysqli_close($conexion);


?>