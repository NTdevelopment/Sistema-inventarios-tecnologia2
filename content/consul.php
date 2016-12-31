
<?php 
include('../conect/startsesion.php'); 
?>

<!DOCTYPE html>
<html>
 <head>
        <title>Panel de Consultas</title>
        <link href="../styles/site.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../styles/kendo.common.min.css">
        <link rel="stylesheet" href="../styles/kendo.rtl.min.css">
        <link rel="stylesheet" href="../styles/kendo.default.min.css">
        <link rel="stylesheet" href="../styles/kendo.mobile.all.min.css">

        <script src="../js/jquery.min.js"></script>
        <script src="../js/kendo.all.min.js"></script>
</head>


<body>
<?php
include('../content/Menbar/menu1.php');
?>


<br>


<div id="tabc1" class="tab-content">
<img src="../images/Otrs/bg_filters_wrap.png" width="100%" height="5">
<br>
<h2><i>Registro de Usuarios</i></h2>
<p>En esta seccion usted podra consultar el registro de los usuarios actuales
en la base de datos del sistema, estos datos seran desplazados en su pantalla acontinuacion, usted puede realizar las siguientes acciones:</p>
<br>
1. Seleccionar un texto.
<br>
2. Copiarlo
<br>
3. Pegarlo como texto.
<br>
<p>Acontinuacion haga clic en el boton (VER REGISTRO), para poder visualizar la consulta deseada.</p>

<form action="RegistrosUsu.php">

<!--button class="medium green"><i class="fa fa-play-circle"></i> <a href="consulta.php">Enviar</button></a-->
	<input class="button orange" type="submit" value="Ver Registro" name"btnRegistroUsu">
</form>
<br>

</div>

<div id="tabc2" class="tab-content">
<img src="../images/Otrs/bg_filters_wrap.png" width="100%" height="5">
<h2><i>Registro de Equipos</i></h2>
<p>En esta seccion usted podra consultar el registro de los Equipos actuales
en la base de datos del sistema, estos datos seran desplazados en su pantalla acontinuacion, usted puede realizar las siguientes acciones:</p>
<br>
1. Seleccionar un texto.
<br>
2. Copiarlo
<br>
3. Pegarlo como texto.
<br>
<p>Acontinuacion haga clic en el boton (VER REGISTRO), para poder visualizar la consulta deseada.</p>

<form action="RegistrosEqui.php">

<!--button class="medium green"><i class="fa fa-play-circle"></i> <a href="consulta.php">Enviar</button></a-->
	<input class="button orange" type="submit" value="Ver Registro" name"btnRegistroEqui">
</form>

</div>

<div id="tabc3" class="tab-content">
<img src="../images/Otrs/bg_filters_wrap.png" width="100%" height="5">
<h2><i>Dar de baja a un usuario</i></h2>
<p>En esta seccion usted podra eliminar el registro de un Usuario en especifico que este registrado actualmente
en la base de datos del sistema, al precionar este boton usted sera dirigido a lapagina de eliminacion y dispondra de 3 opciones especificas en las cuales es necesario que elija una (la que sea de su preferencia), usted puede realizar las siguientes acciones:</p>
<br>
1. Eliminar del registro un usuario por codigo SOEID.
<br>
2. Eliminar del registro un usuario por NOMBRE.
<br>
3. Eliminar del registro un usuario por E-MAIL.
<br>
Acontinuacion haga clic en el boton (ELIMINAR REGISTRO).
<br>
<p><i>NOTA:</i></p>
<p>Al realizar una eliminacion de un usuario en la base de datos se desplegara un cuadro de color <i>verde</i>, si el proceso es correcto, si los campos ingresados no coinsiden en los registros se desplegara un cuadro <i>amarillo</i>, si existiera un problema en la conexion entre la interfaz del usuario al servidor se desplegara un cuadro <i>rojo</i>.</p>

<form action="Eliminar.php">

<!--button class="medium green"><i class="fa fa-play-circle"></i> <a  href="consulta.php">Enviar</button></a-->
	<input class="large red" type="submit" value="Eliminar Registros" name"btnEliminarUsu">
</form>
<img src="../images/Otrs/bg_filters_wrap.png" width="100%" height="5">
</div>

<br>

<!-- ===================================== START FOOTER ===================================== -->

<?php
include('../content/Foot/foot.php');
?>

</body>
</html>