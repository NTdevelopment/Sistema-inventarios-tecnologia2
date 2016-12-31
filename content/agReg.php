<?php 
include('../conect/startsesion.php'); 
?>
<!DOCTYPE html>
<html>
<body>
<head>
	 <head>
        <title>Agregar Registros</title>
        <link href="/../styles/site.css" rel="stylesheet" type="text/css" />
        <link rel="/../stylesheet" href="styles/kendo.common.min.css">
        <link rel="/../stylesheet" href="styles/kendo.rtl.min.css">
        <link rel="/../stylesheet" href="styles/kendo.default.min.css">
        <link rel="/../stylesheet" href="styles/kendo.mobile.all.min.css">

        <script src="/../js/jquery.min.js"></script>
        <script src="/../js/kendo.all.min.js"></script>
</head>


 
<?php
if(isset($_POST['soid']) && !empty($_POST['nombre']) &&
isset($_POST['apellido']) && !empty($_POST['email'])  &&
isset($_POST['dia']) && !empty($_POST['mes'])  &&
isset($_POST['ano']) && !empty($_POST['area']) &&
isset($_POST['ubicacion']) && !empty($_POST['centrocostos']) &&
isset($_POST['telefono']) && !empty($_POST['enviado'])) {

// Si entramos es que todo se ha realizado correctamente

$link = mysql_connect("localhost","root","123456");
mysql_select_db("dbsys",$link);

// Con esta sentencia SQL insertaremos los datos en la base de datos
mysql_query("INSERT INTO usuarios (soid, nombre, apellido, email, dia, mes, ano, area, ubicacion, centrocostos, telefono, enviado)
VALUES ('{$_POST['soid']}','{$_POST['nombre']}','{$_POST['apellido']}','{$_POST['email']}','{$_POST['dia']}','{$_POST['mes']}','{$_POST['ano']}','{$_POST['area']}','{$_POST['ubicacion']}','{$_POST['centrocostos']}','{$_POST['telefono']}','{$_POST['enviado']}')",$link);

// Ahora comprobaremos que todo ha ido correctamente
$my_error = mysql_error($link);

if(!empty($my_error)) {


echo '<div class="notice error"><i class="icon-remove-sign icon-large"></i> Error de Conexion al Servidor
<a href="#close" class="icon-remove"></a></div>';
echo '<br>';
echo '<button class="medium green"><i class="fa fa-play-circle"></i> <a href="index.php">Regresar al Inicio</button></a>';


} else {


echo '<div class="notice success"><i class="icon-ok icon-large"></i> Datos Almacenados Correctamente
<a href="#close" class="icon-remove"></a></div>';
echo '<meta http-equiv="Refresh" content="3;URL=RegUs.php" />';

}

} else {


echo '<div class="notice warning"><i class="icon-warning-sign icon-large"></i> Inserte Todos Sus Datos, Vuelva a Intentarlo Nuevamente  
<a href="#close" class="icon-remove"></a></div>';
echo '<br>';

echo '<button class="medium green"><i class="fa fa-play-circle"></i> <a href="index.php">Regresar al Inicio</button></a>';
}




?>
 <?php
include('../content/Foot/foot.php');
?>

</body>
</html>