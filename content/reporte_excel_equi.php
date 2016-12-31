<?php 
include('../conect/startsesion.php'); 
?>
<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Excel_Equipos.xls");

		include('conect/connector.php'); 

?>

<!DOCTYPE html>
<html>
 <head>
        <title>Reporte Excel Equipos</title>
        <link href="../styles/site.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../styles/kendo.common.min.css">
        <link rel="stylesheet" href="../styles/kendo.rtl.min.css">
        <link rel="stylesheet" href="../styles/kendo.default.min.css">
        <link rel="stylesheet" href="../styles/kendo.mobile.all.min.css">

        <script src="/../js/jquery.min.js"></script>
        <script src="/../js/kendo.all.min.js"></script>
</head>


<body>

<!-- Table -->
<table width="100%" border="1" cellspacing="0" cellpadding="0">
<tr>
<td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE EQUIPOS CONTROL TECNOLOGIA</strong></CENTER></td>
</tr>
<thead><tr bgcolor="gray">
	<td><strong>INVENTARIO1</strong></td>
	<td><strong>INVENTARIO2</strong></td>
	<td><strong>DESCRIPCION</strong></td>
	<td><strong>MARCA</strong></td>
	<td><strong>MODELO</strong></td>
	<td><strong>SERIE</strong></td>
	<td><strong>NOMBRE_USUARIO_RESPONSABLE</strong></td>
	<td><strong>APELLIDO_USUARIO_RESPONSABLE</strong></td>
	<td><strong>UBICACION_ACTUAL</strong></td>
	<td><strong>CENTRO_COSTOS</strong></td>
	<td><strong>CONTACTO_TELEFONICO</strong></td>
	<td><strong>COMENTARIOS</strong></td>
	
</tr>

<?php

		$conexion=mysql_connect("localhost", "root", "123456");
		mysql_select_db("dbsys",$conexion);

$sql=mysql_query("select inventario1,inventario2,descripcion,marca,modelo,serie,nomusrespo,apellusrespo,ubicacion,centrocostos,telefono,enviado from equipos");
while ($res=mysql_fetch_array($sql)) {


	$INVENTARIO1=$res["inventario1"];
	$INVENTARIO2=$res["inventario2"];
	$DESCRIPCION=$res["descripcion"];
	$MARCA=$res["marca"];
	$MODELO=$res["modelo"];
	$SERIE=$res["serie"];
	$NOMBRE_USUARIO_RESPONSABLE=$res["nomusrespo"];
	$APELLIDO_USUARIO_RESPONSABLE=$res["apellusrespo"];
	$UBICACION_ACTUAL=$res["ubicacion"];
	$CENTRO_COSTOS=$res["centrocostos"];
	$CONTACTO_TELEFONICO=$res["telefono"];
	$COMENTARIOS=$res["enviado"];

?>

<tr>
	<td><?php echo $INVENTARIO1; ?></td>
	<td><?php echo $INVENTARIO2; ?></td>
	<td><?php echo $DESCRIPCION; ?></td>
	<td><?php echo $MARCA; ?></td>
	<td><?php echo $MODELO; ?></td>
	<td><?php echo $SERIE; ?></td>
	<td><?php echo $NOMBRE_USUARIO_RESPONSABLE; ?></td>
	<td><?php echo $APELLIDO_USUARIO_RESPONSABLE; ?></td>
	<td><?php echo $UBICACION_ACTUAL; ?></td>
	<td><?php echo $CENTRO_COSTOS; ?></td>
	<td><?php echo $CONTACTO_TELEFONICO; ?></td>
	<td><?php echo $COMENTARIOS; ?></td>
</tr>
	<?php	

}

	?>


</table>

<!-- ===================================== START FOOTER ===================================== -->
<?php
include('../content/Foot/foot.php');
?>

</body>
</html>