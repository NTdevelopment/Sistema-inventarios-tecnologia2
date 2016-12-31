<?php 
include('../conect/startsesion.php'); 
?>

<!DOCTYPE html>
<html>
 <head>
        <title>Registros de Equipos</title>
        <link href="../styles/site.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../styles/kendo.common.min.css">
        <link rel="stylesheet" href="../styles/kendo.rtl.min.css">
        <link rel="stylesheet" href="../styles/kendo.default.min.css">
        <link rel="stylesheet" href="../styles/kendo.mobile.all.min.css">

        <script src="/../js/jquery.min.js"></script>
        <script src="/../js/kendo.all.min.js"></script>
</head>


<body>
<?php
include('../content/Menbar/menu1.php');
?>
<br>	
	<div class="demo-section k-rtl k-content">
<a href="reporte_excel_equi.php" id="showPopupNotification"  class="k-button" type="Submit"><img src="../images/export/excel.png" width="30" height="30"/>..<strong>Exportar</strong></a> 		
<br></div>


<div id="form-example" class="tab-content">
	<h2><i>Resultados de Consulta Equipos:</i></h2>

<br>
<img src="../images/Otrs/bg_filters_wrap.png" width="100%" height="5">

	<?php

$server =  "localhost";
$usuario =  "root";
$pass = "123456";
$db = "dbsys";


$conexion = mysqli_connect($server, $usuario, $pass, $db)
			or die ("error en la conexion");
$consulta = mysqli_query($conexion, "SELECT * from equipos")
			or die ("error al consultar los datos");

echo '<table id="grid" cellspacing="5" cellpadding="1" >';	
echo '<colgroup>
                  <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                </colgroup>';
echo '<thead>';
echo '<tr>';
echo '<th id="descripcion">Tipo equipo</th>';	
echo '<th id="inventario1">Inventario1</th>';	
echo '<th id="inventario2">Inventario2</th>';
echo '<th id="marca">Marca</th>';
echo '<th id="modelo">Modelo</th>';
echo '<th id="serie">Serie</th>';
echo '<th id="nomusrespo">Asignado</th>';
echo '<th id="apellusrespo">Apellido</th>';
echo '<th id="telefono">Telefono</th>';
echo '<th id="ubicacion">Ubicacion</th>';
echo '<th id="comentario">Comentarios</th>';
echo '</tr>';
echo '</thead>';

while ($extraido = mysqli_fetch_array($consulta))

 {
	echo '<tr>';
	echo '<td>'.$extraido['descripcion'].'</td>';
	echo '<td>'.$extraido['inventario1'].'</td>';
	echo '<td>'.$extraido['inventario2'].'</td>';
	
	echo '<td>'.$extraido['marca'].'</td>';
	echo '<td>'.$extraido['modelo'].'</td>';
	echo '<td>'.$extraido['serie'].'</td>';
	echo '<td>'.$extraido['nomusrespo'].'</td>';
	echo '<td>'.$extraido['apellusrespo'].'</td>';
	echo '<td>'.$extraido['telefono'].'</td>';
	echo '<td>'.$extraido['ubicacion'].'</td>';
	echo '<td>'.$extraido['comentario'].'</td>';

	echo '</tr>';
}

mysqli_close($conexion);
echo '</table>';
	?>

</div>
<img src="../images/Otrs/bg_filters_wrap.png" width="100%" height="5">
<br>
<br>
<!-- ===================================== START FOOTER ===================================== -->
<?php
include('../content/Foot/foot.php');
?>

</body>
</html>
