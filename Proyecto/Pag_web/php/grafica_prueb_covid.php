<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
    <title>¡ACERCA DEL COVID-19!-Grafica</title>
    <!-- Styles -->
    <style>
        #chartdiv {
        width: 100%;
        height: 500px;
        }
    </style>
</head>
<body style="background-color: #f0f2f5;" >
<?php
include("consultas.php"); //para llamar a un archivo
?>
<div id="chartdiv">
  <div style="background-color: #f0f2f5; margin: 0px; padding: 0px;">
  <p>&nbsp;</p>
  <h2 style = "font-family: Oswald, sans-serif !important; text-transform: uppercase; margin: 15px 10px 0;text-align:center">¡Resultados de : Usted, ¿Se hace pruebas constantes para saber si tiene COVID-19 !</h2>
  <p>&nbsp;</p>
</div>
<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
var chart = root.container.children.push(
  am5percent.PieChart.new(root, {
    endAngle: 270
  })
);

// Create series
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
var series = chart.series.push(
  am5percent.PieSeries.new(root, {
    valueField: "value",
    categoryField: "category",
    endAngle: 270
  })
);

series.states.create("hidden", {
  endAngle: -90
});

// Set data
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
series.data.setAll([
{
  category: "Si, cada que puedo me lo hago: (<?php echo $prueb_covid['prueb_covid']?> resultados)",
  value: <?php echo $prueb_covid['prueb_covid']?>
},{
  category: "No, nunca me lo hago: (<?php echo $prueb_covid2['prueb_covid']?> resultados)",
  value: <?php echo $prueb_covid2['prueb_covid']?>
}, {
  category: "No, no cuento con la forma de hacerlo: (<?php echo $prueb_covid3['prueb_covid']?> resultados)",
  value: <?php echo $prueb_covid3['prueb_covid']?>
}]);

series.appear(1000, 100);

}); // end am5.ready()
</script>
</body>
</html>