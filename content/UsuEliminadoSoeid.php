<?php 
include('../conect/startsesion.php'); 
?>

<!DOCTYPE html>
<html>
 <head>
        <title>Eliminado de Usuarios SOID</title>
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

if($SOEID=($_POST['txtSoid'])) {
	
$link = mysql_connect("localhost","root","123456");
mysql_select_db("dbsys",$link);


mysql_query("DELETE FROM usuarios WHERE soid='$SOEID'",$link);


// Ahora comprobaremos que todo ha ido correctamente
$my_error = mysql_error($link);

if(!empty($my_error)) {


echo '<div class="notice error"><img src="../images/otrs/notice-note.png" width="50" height="50"><h1> Error Los datos ya Fueron Eliminados </h1><h2>Error de Conexion al Servidor</h2></a></div>';
echo '<meta http-equiv="Refresh" content="5;URL=Eliminar.php" />';
echo '<img src="../images/2.jpg" width="60%" height="60%">';

} 


else {


echo '<div class="notice success"><img src="../images/otrs/success-msg.png" width="50" height="50"><h1> Datos Eliminados Correctamente </h1><a href="#close" class="icon-remove"></a></div>';
echo '<meta http-equiv="Refresh" content="5;URL=Eliminar.php" />';
echo '<img src="../images/1.jpg" width="90%" height="60%">';

	}

}




else {


echo '<div class="notice warning"><img src="../images/otrs/notice-info.png" width="30" height="30"><h1>Inserte Todos Sus Datos,<h2>Vuelva a Intentarlo Nuevamente</h2></h1><a href="#close" class="icon-remove"></a></div>';
echo '<meta http-equiv="Refresh" content="5;URL=Eliminar.php" />';
echo '<img src="../images/2.jpg" width="90%" height="60%">';
}

?>



<!-- ===================================== START FOOTER ===================================== -->

<?php
include('../content/Foot/foot.php');
?>

</body>
</html>