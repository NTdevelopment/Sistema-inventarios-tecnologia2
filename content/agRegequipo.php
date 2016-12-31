<?php 
include('../conect/startsesion.php'); 
?>
<!DOCTYPE html>
<html>
<body>
 <head>
        <title>Agregar equipo</title>
        <link href="/../styles/site.css" rel="stylesheet" type="text/css" />
        <link rel="/../stylesheet" href="styles/kendo.common.min.css">
        <link rel="/../stylesheet" href="styles/kendo.rtl.min.css">
        <link rel="/../stylesheet" href="styles/kendo.default.min.css">
        <link rel="/../stylesheet" href="styles/kendo.mobile.all.min.css">

        <script src="/../js/jquery.min.js"></script>
        <script src="/../js/kendo.all.min.js"></script>
</head>

 
 
<?php
if(isset($_POST['inventario1']) && !empty($_POST['inventario2']) &&
isset($_POST['descripcion']) && !empty($_POST['marca'])  &&
isset($_POST['modelo']) && !empty($_POST['serie'])  &&
isset($_POST['nomusrespo']) && !empty($_POST['apellusrespo']) &&
isset($_POST['ubicacion']) && !empty($_POST['centrocostos']) &&
isset($_POST['telefono']) && !empty($_POST['enviado']) &&
isset($_POST['comentario'])) {

// Si entramos es que todo se ha realizado correctamente

$link = mysql_connect("localhost","root","123456");
mysql_select_db("dbsys",$link);

// Con esta sentencia SQL insertaremos los datos en la base de datos
mysql_query("INSERT INTO equipos (inventario1, inventario2, descripcion, marca, modelo, serie, nomusrespo, apellusrespo, ubicacion, centrocostos, telefono, comentario, enviado)
VALUES ('{$_POST['inventario1']}','{$_POST['inventario2']}','{$_POST['descripcion']}','{$_POST['marca']}','{$_POST['modelo']}','{$_POST['serie']}','{$_POST['nomusrespo']}','{$_POST['apellusrespo']}','{$_POST['ubicacion']}','{$_POST['centrocostos']}','{$_POST['telefono']}','{$_POST['enviado']}','{$_POST['comentario']}')",$link);

// Ahora comprobaremos que todo ha ido correctamente
$my_error = mysql_error($link);

if(!empty($my_error)) {




echo '<div class="notice error"><img src="../images/otrs/notice-note.png" width="50" height="50"><h1> Error Los datos ya existen </h1><h2>Error de Conexion al Servidor</h2></a></div>';
echo '<meta http-equiv="Refresh" content="5;URL=regEquipo.php" />';
echo '<img src="../images/2.jpg" width="60%" height="60%">';


} 

else {


echo '<div class="notice success"><img src="../images/otrs/success-msg.png" width="50" height="50"><h1> Datos Almacenados Correctamente </h1><a href="#close" class="icon-remove"></a></div>';
echo '<meta http-equiv="Refresh" content="5;URL=regEquipo.php" />';
echo '<img src="../images/1.jpg" width="90%" height="60%">';

}

} 

else {


echo '<div class="notice warning"><img src="../images/otrs/notice-info.png" width="30" height="30"><h1>Inserte Todos Sus Datos,<h2>Vuelva a Intentarlo Nuevamente</h2></h1><a href="#close" class="icon-remove"></a></div>';
echo '<meta http-equiv="Refresh" content="5;URL=regEquipo.php" />';
echo '<img src="../images/2.jpg" width="90%" height="60%">';

}




?>

</body>
</html>