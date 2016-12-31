<?php 
include('../conect/startsesion.php'); 
?>
<!DOCTYPE html>
<html>
 <head>
        <title>Registrar Equipos</title>

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


	<div id="form-example" class="tab-content">
	
	<h2 ><i>Formulario registro de equipos</i></h2>

	<div class="demo-section k-content">
	<br>
			<form class="vertical" method="post" action="agRegequipo.php">
			
			<p>Primer Inventario :							<br>			<input id="text1" type="Number" name="inventario1"  style="width:60%;">			<br>
			<p>Segundo Inventario:							<br>			<input id="text1" type="Number" name="inventario2" style="width:60%;">			<br>
			<!--p>Descripcion/Tipo:							<br>			<input id="text1" type="Text" name="descripcion"-->			<br>

<!-- /////////////////////////////////////////////////////DESCRIPCION DEL EQUIPO///////////////////////////////////////////////// -->

<label for="select1"  required>Descripcion/Tipo:</label>
<select class="k-button k-primary" id="products"  style="width:60%; color: #cccccc" name="descripcion">
<option value="N/A">-- Seleccionar --			</option>
<option value="Monitor">Monitor 				</option>
<option value="CPU">CPU 						</option>
<option value="Laptop">Laptop 					</option>
<option value="Scanner">Scanner 				</option>
<option value="Impresora">Impresora 			</option>
<option value="Telefono">Telefono 				</option>
<option value="Otro">Otro 						</option>
</select>
<br>
	<aside>
 <img src="../images/otrs/Nota_validacion-DATOS.jpg" width="300px">
	</aside>  
			<p>Marca del equipo:							<br>			<input id="text1" type="Text" name="marca" style="width:60%;">					<br>
			<p>Modelo del equipo:							<br>			<input id="text1" type="Text" name="modelo" style="width:60%;">				<br>
			<p>Serie del equipo:							<br>			<input id="text1" type="Text" name="serie" style="width:60%;">					<br>
			<p>Ingrese nombres del usuario responsable:		<br>			<input id="text1" type="Text" name="nomusrespo" required style="width:60%;">			<br>
			<p>Ingrese apellidos del usuario responsable:	<br>			<input id="text1" type="Text" name="apellusrespo" required style="width:60%;">			<br>
			<!--p>Ubicacion fisica:							<br>			<input id="text1" type="Text" name="ubicacion"-->			<br>
<!-- /////////////////////////////////////////////////////UBICACION FICICA DEL EQUIPO///////////////////////////////////////////////// -->
<label for="select2">Ubicacion fisica:</label>
<select class="k-button k-primary" id="select2" style="width:60%; color: #cccccc" name="ubicacion">
<option value="N/A">-- Seleccionar --				</option>
<option value="Centrica_Plaza">Centrica Plaza 		</option>
<option value="Zona_1">Zona 1 						</option>
<option value="Zona_4">Zona 4 						</option>
<option value="Zona_5">Zona 5 						</option>
<option value="Zona_7">Zona 7						</option>
<option value="Zona_10">Zona 10 					</option>
<option value="Zona_11">Zona 11 					</option>
<option value="Zona_12">Zona 12 					</option>
<option value="Zona_14">Zona 14						</option>
<option value="Zona_15">Zona 15						</option>
<option value="Zona_16">Zona 16						</option>
<option value="El_Naranjo">El Naranjo 				</option>
<option value="Agencia_Roosevelth">Roosevelth 		</option>
<option value="Super_Sencillo">Super Sencillo 		</option>
<option value="Agencias">Agencias					</option>
<option value="Otros">Otros 						</option>
</select>
<br>
			<p>Centro de Costos:							<br><input id="text1" type="Number" name="centrocostos" style="width:60%;">	        		<br>
			<p>Telefono:									<br>		<input id="text1" type="Number" name="telefono" style="width:60%;">				<br>
			<p>Comentarios:				<br><textarea id="textarea1" placeholder="Ingrese un comentario"name="comentario" style="width:60%;"></textarea><br>

			<br><br>	<div class="demo-section k-content">
			<input id="primaryTextButton" class="k-primary" type="Submit" name="enviado" value="Guardado" style="width:60%;" >
	</form>	

			
  
        
	
 </div> 	<!-- End Grid -->

<br>
<!-- ===================================== START FOOTER ===================================== -->
<?php
include('../content/Foot/foot.php');
?>
</body>
</html>