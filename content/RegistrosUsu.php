
<!DOCTYPE html>
<html>
 <head>
        <title>Registros de Usuarios</title>
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
<a href="reporte_excel_usu.php" id="showPopupNotification"  class="k-button" type="Submit"><img src="../images/export/excel.png" width="30" height="30"/>..<strong>Exportar</strong></a> 		
<br></div>



<div id="example">
	<h2><i>Resultados de Consulta Usuarios:</i></h2>
<br>

<img src="../images/Otrs/bg_filters_wrap.png" width="100%" height="5">
	<?php
	
$server =  "localhost";
$usuario =  "root";
$pass = "123456";
$db = "dbsys";


$conexion = mysqli_connect($server, $usuario, $pass, $db)
			or die ("error en la conexion");
$consulta = mysqli_query($conexion, "SELECT * from usuarios")
			or die ("error al consultar los datos");
echo '<table id="grid" cellspacing="5" cellpadding="1" >';	
echo '<colgroup>
                    <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                    <col style="width:15%" />
                    <col style="width:10%" />
                    <col style="width:10%" />
                </colgroup>';
echo '<thead>';
echo '<tr>';
echo '<th id="soid">SOE ID</th>';	
echo '<th id="nombre">Nombre</th>';	
echo '<th id="apellido">Apellidos</th>';
echo '<th id="email">Email</th>';
echo '<th id="telefono">Telefono</th>';
echo '<th id="ubicacion">Ubicacion</th>';
echo '<th id="area">Area</th>';
echo '<th id="centrocostos">Centro de costos</th>';
echo '</tr>';
echo '</thead>';

while ($extraido = mysqli_fetch_array($consulta))

 {
 	echo '<tbody>';
	echo '<tr>';
	echo '<td>'.$extraido['soid'].'</td>';
	echo '<td>'.$extraido['nombre'].'</td>';
	echo '<td>'.$extraido['apellido'].'</td>';
	echo '<td>'.$extraido['email'].'</td>';

	echo '<td>'.$extraido['telefono'].'</td>';
	echo '<td>'.$extraido['ubicacion'].'</td>';
	echo '<td>'.$extraido['area'].'</td>';
	echo '<td>'.$extraido['centrocostos'].'</td>';
	echo '</tr>';
	echo '<tbody>';
}

mysqli_close($conexion);
echo '</table>';
	?>
	<script>
                $(document).ready(function() {
                    $("#grid").kendoGrid({
                        height: 550,
                        sortable: true
                    });
                });
            </script>


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