<?php 
include('../conect/startsesion.php'); 
?>
<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Excel_Usuarios.xls");

		include('conect/connector.php'); 

?>

<!DOCTYPE html>
<html>
 <head>
        <title>Reporte Excel Usuarios</title>
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
<td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE USUARIOS CONTROL TECNOLOGIA</strong></CENTER></td>
</tr>
<thead><tr bgcolor="gray">
	<td><strong>SOEID</strong></td>
	<td><strong>NOMBRE</strong></td>
	<td><strong>APELLIDO</strong></td>
	<td><strong>EMAIL</strong></td>
	<!--td><strong>DIA</strong></td>
	<td><strong>MES</strong></td>
	<td><strong>ANIO</strong></td-->
	<td><strong>AREA</strong></td>
	<td><strong>UBICACION</strong></td>
	<td><strong>CENTRO_COSTOS</strong></td>
	<td><strong>TELEFONO</strong></td>
	<!--td><strong>ENVIADO</strong></td-->
</tr>

<?php


		$conexion=mysql_connect("localhost", "root", "123456");
		mysql_select_db("dbsys",$conexion);

$sql=mysql_query("select soid,nombre,apellido,email,area,ubicacion,centrocostos,telefono from usuarios");
while ($res=mysql_fetch_array($sql)) {


	$SOEID=$res["soid"];
	$NOMBRE=$res["nombre"];
	$APELLIDO=$res["apellido"];
	$EMAIL=$res["email"];
	//$DIA=$res["dia"];
	//$MES=$res["mes"];
	//$ANIO=$res["ano"];
	$AREA=$res["area"];
	$UBICACION=$res["ubicacion"];
	$CENTRO_COSTOS=$res["centrocostos"];
	$TELEFONO=$res["telefono"];
	//$ENVIADO=$res["enviado"];

?>

<tr>
	<td><?php echo $SOEID; ?></td>
	<td><?php echo $NOMBRE; ?></td>
	<td><?php echo $APELLIDO; ?></td>
	<td><?php echo $EMAIL; ?></td>
	<!--td><?php //echo $DIA; ?></td>
	<td><?php //echo $MES; ?></td>
	<td><?php //echo $ANIO; ?></td-->
	<td><?php echo $AREA; ?></td>
	<td><?php echo $UBICACION; ?></td>
	<td><?php echo $CENTRO_COSTOS; ?></td>
	<td><?php echo $TELEFONO; ?></td>
	<!--td><?php //echo $ENVIADO; ?></td-->
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