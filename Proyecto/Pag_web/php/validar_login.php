<?php
include('conexion.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];


$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    session_start();
    $_SESSION['usuario']=$usuario;
    $_SESSION['password']=$password;
    header("location:../Casa.php");

}else{
    ?>
    <?php

    /*echo "<script>
    window.location= '../Login.html'
    </script>";*/

     header("location:../Login.html"); 
    

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
