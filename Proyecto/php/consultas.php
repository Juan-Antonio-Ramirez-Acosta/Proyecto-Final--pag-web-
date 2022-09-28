<?php
include("conexion.php"); //para llamar a un archivo
//------------------------------------[VACUNAS]----------------------------------------------------
//-------------------------------------consulta-----------------------------------------------------
$filtro = "Si, ya me vacuné.";
$sql = "SELECT COUNT(*) `vacuna` FROM `encuesta` WHERE `vacuna` = '$filtro'";
$result = mysqli_query($conexion, $sql);
$vacuna1 = mysqli_fetch_assoc($result);
//-------------------------------------consulta-----------------------------------------------------
$filtro2 = "No, pero lo haré.";
$sql2 = "SELECT COUNT(*) `vacuna` FROM `encuesta` WHERE `vacuna` = '$filtro2'";
$result2 = mysqli_query($conexion, $sql2);
$vacuna2 = mysqli_fetch_assoc($result2);
//-------------------------------------consulta-----------------------------------------------------
$filtro3 = "No y no lo haré.";
$sql3 = "SELECT COUNT(*) `vacuna` FROM `encuesta` WHERE `vacuna` = '$filtro3'";
$result3 = mysqli_query($conexion, $sql3);
$vacuna3 = mysqli_fetch_assoc($result3);
//------------------------------------[opi_vacunas]----------------------------------------------------
//-------------------------------------consulta-----------------------------------------------------
$filtro4 = "Nos mantienen seguro.";
$sql4 = "SELECT COUNT(*) `opi_vacuna` FROM `encuesta` WHERE `opi_vacuna` = '$filtro4'";
$result4 = mysqli_query($conexion, $sql4);
$opi_vacuna = mysqli_fetch_assoc($result4);
//-------------------------------------consulta-----------------------------------------------------
$filtro5 = "Miedo a la reacción.";
$sql5 = "SELECT COUNT(*) `opi_vacuna` FROM `encuesta` WHERE `opi_vacuna` = '$filtro5'";
$result5 = mysqli_query($conexion, $sql5);
$opi_vacuna2= mysqli_fetch_assoc($result5);
//-------------------------------------consulta-----------------------------------------------------
$filtro6 = "No son necesarias.";
$sql6 = "SELECT COUNT(*) `opi_vacuna` FROM `encuesta` WHERE `opi_vacuna` = '$filtro6'";
$result6 = mysqli_query($conexion, $sql6);
$opi_vacuna3 = mysqli_fetch_assoc($result6);
//------------------------------------[cubrebocas]----------------------------------------------------
//-------------------------------------consulta-----------------------------------------------------
$filtro7 = "Si, correctamente.";
$sql7 = "SELECT COUNT(*) `cubrebocas` FROM `encuesta` WHERE `cubrebocas` = '$filtro7'";
$result7 = mysqli_query($conexion, $sql7);
$cubrebocas = mysqli_fetch_assoc($result7);
//-------------------------------------consulta-----------------------------------------------------
$filtro8 = "Salgo sin cubrebocas.";
$sql8 = "SELECT COUNT(*) `cubrebocas` FROM `encuesta` WHERE `cubrebocas` = '$filtro8'";
$result8 = mysqli_query($conexion, $sql8);
$cubrebocas2= mysqli_fetch_assoc($result8);
//-------------------------------------consulta-----------------------------------------------------
$filtro9 = "No porque ya me vacune.";
$sql9 = "SELECT COUNT(*) `cubrebocas` FROM `encuesta` WHERE `cubrebocas` = '$filtro9'";
$result9 = mysqli_query($conexion, $sql9);
$cubrebocas3 = mysqli_fetch_assoc($result9);
//------------------------------------[llev_niño]----------------------------------------------------
//-------------------------------------consulta-----------------------------------------------------
/*$filtro10 = "No tengo niños pequeños.";
$sql10 = "SELECT COUNT(*) `llev_niño` FROM `encuesta` WHERE `llev_niño` = '$filtro10'";
$result10 = mysqli_query($conexion, $sql10);
$llev_niño = mysqli_fetch_assoc($result10);
//-------------------------------------consulta-----------------------------------------------------
$filtro11 = "Si, no tengo con quien dejarlo.";
$sql11 = "SELECT COUNT(*) `llev_niño` FROM `encuesta` WHERE `llev_niño` = '$filtro11'";
$result11 = mysqli_query($conexion, $sql11);
$llev_niño2 = mysqli_fetch_assoc($result11);
//-------------------------------------consulta-----------------------------------------------------
$filtro12 = "No, se quedan en casa.";
$sql12 = "SELECT COUNT(*) `llev_niño` FROM `encuesta` WHERE `llev_niño` = '$filtro12'";
$result12 = mysqli_query($conexion, $sql12);
$llev_niño3 = mysqli_fetch_assoc($result12); */
//------------------------------------[casa_limp]----------------------------------------------------
//-------------------------------------consulta-----------------------------------------------------
$filtro13 = "Si, todo limpio y desinfectado.";
$sql13 = "SELECT COUNT(*) `casa_limp` FROM `encuesta` WHERE `casa_limp` = '$filtro13'";
$result13 = mysqli_query($conexion, $sql13);
$casa_limp = mysqli_fetch_assoc($result13);
//-------------------------------------consulta-----------------------------------------------------
$filtro14 = "No, no lo necesito.";
$sql14 = "SELECT COUNT(*) `casa_limp` FROM `encuesta` WHERE `casa_limp` = '$filtro14'";
$result14 = mysqli_query($conexion, $sql14);
$casa_limp2 = mysqli_fetch_assoc($result14);
//-------------------------------------consulta-----------------------------------------------------
$filtro15 = "De vez en cuando.";
$sql15 = "SELECT COUNT(*) `casa_limp` FROM `encuesta` WHERE `casa_limp` = '$filtro15'";
$result15 = mysqli_query($conexion, $sql15);
$casa_limp3 = mysqli_fetch_assoc($result15); 
//------------------------------------[cont_enferme]----------------------------------------------------
//-------------------------------------consulta-----------------------------------------------------
$filtro16 = "Si, en estos momentos la tiene.";
$sql16 = "SELECT COUNT(*) `cont_enferme` FROM `encuesta` WHERE `cont_enferme` = '$filtro16'";
$result16 = mysqli_query($conexion, $sql16);
$cont_enferme = mysqli_fetch_assoc($result16);
//-------------------------------------consulta-----------------------------------------------------
$filtro17 = "No, ninguno la ha contraido.";
$sql17 = "SELECT COUNT(*) `cont_enferme` FROM `encuesta` WHERE `cont_enferme` = '$filtro17'";
$result17 = mysqli_query($conexion, $sql17);
$cont_enferme2 = mysqli_fetch_assoc($result17);
//-------------------------------------consulta-----------------------------------------------------
$filtro18 = "Si, antes lo tuvo.";
$sql18 = "SELECT COUNT(*) `cont_enferme` FROM `encuesta` WHERE `cont_enferme` = '$filtro18'";
$result18 = mysqli_query($conexion, $sql18);
$cont_enferme3 = mysqli_fetch_assoc($result18); 
//------------------------------------[estuv_saliend]----------------------------------------------------
//-------------------------------------consulta-----------------------------------------------------
$filtro19 = "Si, tenía que trabajar.";
$sql19 = "SELECT COUNT(*) `estuv_saliend` FROM `encuesta` WHERE `estuv_saliend` = '$filtro19'";
$result19 = mysqli_query($conexion, $sql19);
$estuv_saliend = mysqli_fetch_assoc($result19);
//-------------------------------------consulta-----------------------------------------------------
$filtro20 = "No, permanecí en mi hogar.";
$sql20 = "SELECT COUNT(*) `estuv_saliend` FROM `encuesta` WHERE `estuv_saliend` = '$filtro20'";
$result20 = mysqli_query($conexion, $sql20);
$estuv_saliend2 = mysqli_fetch_assoc($result20);
//-------------------------------------consulta-----------------------------------------------------
$filtro21 = "Un familiar estuvo saliendo por necesidad.";
$sql21 = "SELECT COUNT(*) `estuv_saliend` FROM `encuesta` WHERE `estuv_saliend` = '$filtro21'";
$result21 = mysqli_query($conexion, $sql21);
$estuv_saliend3 = mysqli_fetch_assoc($result21); 
//------------------------------------[prueb_covid]----------------------------------------------------
//-------------------------------------consulta-----------------------------------------------------
$filtro22 = "Si, cada que puedo me lo hago.";
$sql22 = "SELECT COUNT(*) `prueb_covid` FROM `encuesta` WHERE `prueb_covid` = '$filtro22'";
$result22 = mysqli_query($conexion, $sql22);
$prueb_covid = mysqli_fetch_assoc($result22);
//-------------------------------------consulta-----------------------------------------------------
$filtro23 = "No, nunca me lo hago.";
$sql23 = "SELECT COUNT(*) `prueb_covid` FROM `encuesta` WHERE `prueb_covid` = '$filtro23'";
$result23 = mysqli_query($conexion, $sql23);
$prueb_covid2 = mysqli_fetch_assoc($result23);
//-------------------------------------consulta-----------------------------------------------------
$filtro24 = "No, no cuento con la forma de hacerlo.";
$sql24 = "SELECT COUNT(*) `prueb_covid` FROM `encuesta` WHERE `prueb_covid` = '$filtro24'";
$result24 = mysqli_query($conexion, $sql24);
$prueb_covid3 = mysqli_fetch_assoc($result24); 
//------------------------------------[prob_trabaj]----------------------------------------------------
//-------------------------------------consulta-----------------------------------------------------
$filtro25 = "Si, me despidieron.";
$sql25 = "SELECT COUNT(*) `prob_trabaj` FROM `encuesta` WHERE `prob_trabaj` = '$filtro25'";
$result25 = mysqli_query($conexion, $sql25);
$prob_trabaj = mysqli_fetch_assoc($result25);
//-------------------------------------consulta-----------------------------------------------------
$filtro26 = "Ningún problema.";
$sql26 = "SELECT COUNT(*) `prob_trabaj` FROM `encuesta` WHERE `prob_trabaj` = '$filtro26'";
$result26 = mysqli_query($conexion, $sql26);
$prob_trabaj2 = mysqli_fetch_assoc($result26);
//-------------------------------------consulta-----------------------------------------------------
$filtro27 = "No trabajo.";
$sql27 = "SELECT COUNT(*) `prob_trabaj` FROM `encuesta` WHERE `prob_trabaj` = '$filtro27'";
$result27 = mysqli_query($conexion, $sql27);
$prob_trabaj3 = mysqli_fetch_assoc($result27); 
//------------------------------------[test_ayuda]----------------------------------------------------
//-------------------------------------consulta-----------------------------------------------------
$filtro28 = "Si, algo.";
$sql28 = "SELECT COUNT(*) `test_ayuda` FROM `encuesta` WHERE `test_ayuda` = '$filtro28'";
$result28 = mysqli_query($conexion, $sql28);
$test_ayuda = mysqli_fetch_assoc($result28);
//-------------------------------------consulta-----------------------------------------------------
$filtro29 = "Demasiado.";
$sql29 = "SELECT COUNT(*) `test_ayuda` FROM `encuesta` WHERE `test_ayuda` = '$filtro29'";
$result29 = mysqli_query($conexion, $sql29);
$test_ayuda2 = mysqli_fetch_assoc($result29);
//-------------------------------------consulta-----------------------------------------------------
$filtro30 = "ni mucho ni poco.";
$sql30 = "SELECT COUNT(*) `test_ayuda` FROM `encuesta` WHERE `test_ayuda` = '$filtro30'";
$result30 = mysqli_query($conexion, $sql30);
$test_ayuda3 = mysqli_fetch_assoc($result30); 
?>
