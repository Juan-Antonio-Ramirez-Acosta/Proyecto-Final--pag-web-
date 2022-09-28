<?php

include("php/conexion.php"); //para llamar a un archivo

$usuario = $_SESSION['usuario'];
$password = $_SESSION['password'];

$sql3 = "SELECT COUNT(case when mensaje != '' then 1 end) AS 'count' FROM datosinforma JOIN mensajes ON mensajes.id_usuarios = datosinforma.usuarios_id";
$result3 = mysqli_query($conexion, $sql3);
$count = mysqli_fetch_assoc($result3); 
$suma = $count['count'];

$sql = "SELECT * FROM datosinforma JOIN mensajes ON mensajes.id_usuarios = datosinforma.usuarios_id";
$resultado = mysqli_query($conexion, $sql);
//$resultado = mysqli_query($conexion, 'select * from datosinforma where mensaje is not null');

?>
<div style="background-color: #f0f2f5; margin: 0px; padding: 0px;">
<p>&nbsp;</p>
<h2 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">EXPERIENCIAS COMPARTIDAS (<?php echo "".$suma?>) : </h2>
<p>&nbsp;</p>
<?php
while ($comentario = mysqli_fetch_object($resultado))
{
    if($suma != 0)
    {
    ?>
    <div style="background-color: white; margin: 30px 13%; padding: 10px 10px; border-radius: 10px;font-size: .95rem;">
    </body>
    <b style="font-size: .95rem;"><?php echo($comentario->nombre);?>
    <br/>
    </b><b style="font-size: .71rem; color: gray;font-weight: 600;">(<?php echo($comentario->email);?>)
    <br/>
    <br/>
    </b><b style="font-size: .95rem; color: #478ac9">MI EXPERIENCIA:</b>
    <br/>
    </b><p style="font-size: .95rem; color: #424949; font-weight: 510"><?php echo($comentario->mensaje); ?></p>
    </div>
    <?php
    }else{
        ?>
        <div style="background-color: white; margin: 30px 13%; padding: 10px 10px; border-radius: 10px;font-size: .95rem; text-align: center;">
        </body>
        </b><b style="font-size: .95rem; color: #478ac9; text-align: center;">"No se han compartido expericencias aún".</b>
        <br/>
        </b><p style="font-size: .95rem; color: #424949; font-weight: 510"><?php echo($comentario->mensaje); ?></p>
        </div>
        <?php 
    }
}
?>
<p style="background-color: #f0f2f5; margin: 0px; padding: 0px;">&nbsp;</p>
</div>
<?php
//cerrando conexión 
mysqli_close($conexion);

?>