<?php

include("php/conexion.php"); //para llamar a un archivo
$usuario = $_SESSION['usuario'];
$password = $_SESSION['password'];

$sql2 = "SELECT id FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$result2 = mysqli_query($conexion, $sql2);
$id = mysqli_fetch_assoc($result2); 
$insert_id = $id['id'];

$sql3 = "SELECT COUNT(case when mensaje != '' then 1 end) AS 'count' FROM datosinforma JOIN mensajes ON mensajes.id_usuarios = datosinforma.usuarios_id WHERE id_usuarios = '$insert_id'";
$result3 = mysqli_query($conexion, $sql3);
$count = mysqli_fetch_assoc($result3); 
$suma = $count['count'];

$sql4 = "SELECT COUNT(case when usuarios_id != '' then 1 end) AS 'count' FROM encuesta JOIN usuarios ON usuarios.id = encuesta.usuarios_id WHERE id = '$insert_id'";
$result4 = mysqli_query($conexion, $sql4);
$count2 = mysqli_fetch_assoc($result4); 
$suma2 = $count2['count'];

$consulta = "SELECT * FROM datosinforma JOIN mensajes ON mensajes.id_usuarios = datosinforma.usuarios_id WHERE id_usuarios = '$insert_id'";
$resultado = mysqli_query($conexion, $consulta);
?>
<div style="background-color: #f0f2f5; margin: 0px; padding: 0px;">
<p>&nbsp;</p>
<h2 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">MIS EXPRENCIAS COMPARTIDAS (<?php echo "".$suma?>) : </h2>
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
        </b><b style="font-size: .95rem; color: #478ac9; text-align: center;">"No has compartido alguna expericencia aún".</b>
        <br/>
        </b><p style="font-size: .95rem; color: #424949; font-weight: 510"><?php echo($comentario->mensaje); ?></p>
        </div>
        <?php 
    }
}

$consulta5 = "SELECT * FROM encuesta WHERE usuarios_id = '$insert_id'";
$resultado5 = mysqli_query($conexion, $consulta5);

?>
<h2 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">MIS Encuestas (<?php echo "".$suma2?>) : </h2>
<?php
while ($encuesta = mysqli_fetch_object($resultado5))
{
    if($suma2 != 0)
    {
    ?>
    <div style="background-color: white; margin: 30px 13%; padding: 10px 10px; border-radius: 10px;font-size: .95rem;">
    </body>
    <b style="font-size: .95rem;"> Mi Test : Resultados
    <br/>
    <br/>
    </b><b style="font-size: .95rem; color: #478ac9">1.- ¿Se encuentra vacunado(a)?</b>
    </b><p style="font-size: .95rem; color: #424949; font-weight: 510">respuesta: <?php echo($encuesta->vacuna); ?></p>
    </b><b style="font-size: .95rem; color: #478ac9">2.- ¿Qué piensa usted sobre las vacunas?</b>
    </b><p style="font-size: .95rem; color: #424949; font-weight: 510">respuesta: <?php echo($encuesta->opi_vacuna); ?></p>
    </b><b style="font-size: .95rem; color: #478ac9">3.- Al salir, ¿Usa de forma correcta su cubrebocas?</b>
    </b><p style="font-size: .95rem; color: #424949; font-weight: 510">respuesta: <?php echo($encuesta->cubrebocas); ?></p>
    </b><b style="font-size: .95rem; color: #478ac9">4.- Cuando ocupa salir y tiene niños pequeños, ¿lo lleva con usted?</b>
    </b><p style="font-size: .95rem; color: #424949; font-weight: 510">respuesta: <?php echo($encuesta->llev_niño); ?></p>
    </b><b style="font-size: .95rem; color: #478ac9">5.- ¿Sigue las medidas de sanitización en su hogar?</b>
    </b><p style="font-size: .95rem; color: #424949; font-weight: 510">respuesta: <?php echo($encuesta->casa_limp); ?></p>
    </b><b style="font-size: .95rem; color: #478ac9">6.- ¿Algún familiar contrajo esta enfermedad o la tuvo?</b>
    </b><p style="font-size: .95rem; color: #424949; font-weight: 510">respuesta: <?php echo($encuesta->cont_enferme); ?></p>
    </b><b style="font-size: .95rem; color: #478ac9">7.- Durante la pandemia, ¿Usted estuvo saliendo?</b>
    </b><p style="font-size: .95rem; color: #424949; font-weight: 510">respuesta: <?php echo($encuesta->estuv_saliend); ?></p>
    </b><b style="font-size: .95rem; color: #478ac9">8.- Usted, ¿Se hace pruebas constantes para saber si tiene COVID-19</b>
    </b><p style="font-size: .95rem; color: #424949; font-weight: 510">respuesta: <?php echo($encuesta->prueb_covid); ?></p>
    </b><b style="font-size: .95rem; color: #478ac9">9.- A causa de la contingencia ¿a tenido problemas en su trabajo?</b>
    </b><p style="font-size: .95rem; color: #424949; font-weight: 510">respuesta: <?php echo($encuesta->prob_trabaj); ?></p>
    </b><b style="font-size: .95rem; color: #478ac9">10.- ¿Le sirvió la información que se le otorgo?</b>
    </b><p style="font-size: .95rem; color: #424949; font-weight: 510">respuesta: <?php echo($encuesta->test_ayuda); ?></p>
    </div>
    <?php 
    }else{
        ?>
        <div style="background-color: white; margin: 30px 13%; padding: 10px 10px; border-radius: 10px;font-size: .95rem; text-align: center;">
        </body>
        </b><b style="font-size: .95rem; color: #478ac9; text-align: center;">"No has compartido alguna expericencia aún".</b>
        <br/>
        </div>
        <?php 
    }
}
?>
<p style="background-color: #f0f2f5; margin: 0px; padding: 0px;">&nbsp;&nbsp;</p>
</div>
<?php
//cerrando conexión 
mysqli_close($conexion);

?>