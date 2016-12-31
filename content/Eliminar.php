<?php 
include('../conect/startsesion.php'); 
?>


<!DOCTYPE html>
<html>
 <head>
        <title>Eliminar</title>
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
<div>

<!-- Table -->
<table cellspacing="0" cellpadding="0">
<thead><tr>
	<th><h3><i>Eliminador Usuarios Registrados</i></h3></th>
	<!--th>Eliminar Equipos Registrados</th-->
<img src="../images/Otrs/bg_filters_wrap.png" width="100%" height="5">	
</tr></thead>
<tbody><tr>
	<td>
<br>
<!--////////////////////////////////////////////////////ELIMINADOR DE USUARIOS-->
	<form action="UsuEliminadoSoeid.php" method="POST"> 
	<i>SOEID: </i> <input type="text" name="txtSoid" required>
	
	<input id="primaryTextButton" class="k-primary" type="submit" name="btnEliminar" value="Eliminar Registro" style="width:73%;" >

	</form>
<br>
</td>
	<td>
<br>
</td>
<!--////////////////////////////////////////////////////ELIMINADOR DE EQUIPOS>		
	<form action="" method="POST">
	<i>INVENTARIO #2: </i> <input type="text" name="">
	<input type="submit" value="Eliminar Registro" name="btnEliminar"></input>
	</form>
<br>
	</td>

</tr><tr>
<td>
<br-->
<!--////////////////////////////////////////////////////ELIMINADOR DE USUARIOS-->		


<!--////////////////////////////////////////////////////ELIMINADOR DE EQUIPOS>		
	<form action="#" method="POST">
	<i>INVENTARIO #2: </i> <input type="text" name="#">
	<input type="submit" value="Eliminar Registro" name="btnEliminar"></input>
	</form>
<br>

	</td>
	
</tr><tr>
<td>
<br-->
<!--////////////////////////////////////////////////////ELIMINADOR DE USUARIOS-->		
	<!--form action="UsuEliminadoEmail.php" method="POST">
	<i>E-MAIL: </i> <input type="text" name="txtEmail">
	<input type="submit" value="Eliminar Registro" name="btnEliminar" class="large red"></input>
	</form>
<br>
</td>
	<td>
<br-->
<!--////////////////////////////////////////////////////ELIMINADOR DE EQUIPOS>		
	<form action="#" method="POST">
	<i>NUMERO SERIE: </i> <input type="text" name="#">
	<input type="submit" value="Eliminar Registro" name="btnEliminar"></input>
	</form>
<br-->

	</td>
	
</tr></tbody></table></div>

<img src="../images/Otrs/bg_filters_wrap.png" width="100%" height="5">

<br>
<br>
<br>




<!-- ===================================== START FOOTER ===================================== -->

<?php
include('../content/Foot/foot.php');
?>
</body>
</html>