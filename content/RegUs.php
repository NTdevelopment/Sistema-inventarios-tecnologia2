 <?php 



session_start();
if(isset($_POST['soid']) && isset($_POST['password']) && isset($_POST['RTPassword']) && isset($_POST['email']))
{
	$RU = $_POST['soid'];
	$ROP = $_POST['password'];
	$RTP = $_POST['RTPassword'];
	$REm = $_POST['email'];
	$Fail = false;
	
	$GetUser = mysql_query("SELECT * FROM usuarios WHERE soid = '$RU'");
	if(mysql_num_rows($GetUser) > 0)
	{
		echo "<script type=\"text/javascript\">alert(\"El usuario $RU ya existe, por favor elige otro\");</script>";  
		$Fail = true;
	}
	elseif($RTP !== $ROP)
	{
		echo "<script type=\"text/javascript\">alert(\"La contrase&ntilde;a no coinciden\");</script>";  
		$Fail = true;
	}
	if($Fail == false)
	{
		mysql_query("INSERT INTO usuarios (soid, password, email) VALUES ('$RU', '".md5($ROP)."', '$REm')");
		die("<script language='javascript'>
alert('Tu usuario ha sido registrado.');
window.location.href = '../index.php';
</script>");
	}
}
?>


 


<!DOCTYPE html>
<html>
 <head>
        <title>Registrar Usuario</title>
        <link href="../styles/site.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../styles/kendo.common.min.css">
        <link rel="stylesheet" href="../styles/kendo.rtl.min.css">
        <link rel="stylesheet" href="../styles/kendo.default.min.css">
        <link rel="stylesheet" href="../styles/kendo.mobile.all.min.css">

        <link href="../styles/kendo.mobile.all.min.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/kendo.all.min.js"></script>
    <script src="content/shared/js/console.js"></script>
    <script type="text/javascript" charset="utf-8">
        var NAV_JSON_URL = "content/mobile-nav.json";
    </script>


        <script src="../js/jquery.min.js"></script>
        <script src="../js/kendo.all.min.js"></script>
         <script src="../content/shared/js/console.js"></script>
</head>


<body>


<?php
include('../content/Menbar/menu1.php');
?>
<br>

<div id="example" class="demo-section k-content">
	<h2><i>Formulario registro de usuarios</i></h2>

	<br>
	<div id="profileCompleteness"></div>
        <ul class="forms">
	
			<form class="vertical" method="post" action="agRegus.php">
			<li>

<label>Codigo SOID :</label>
<input id="text1" type="Text" name="soid" required class="k-textbox" style="width: 99%;">			<br>
<label>Nombre :</label>
<input id="text1" type="Text" name="nombre" class="k-textbox" style="width: 99%;">					<br>
<label>Apellido :</label>
<input id="text1" type="Text" name="apellido" class="k-textbox" style="width: 99%;">				<br>
<label>Correo :</label>
<input id="text1" type="Mail" name="email" class="k-textbox" style="width: 99%;">					<br>
<label>Ingresar Contraseña :</label>
<input id="text1" type="Password" name="password" required  class="k-textbox" style="width: 99%;">	<br>
<label>Confirmar Contraseña :</label>
<input id="text1" type="Password" name="RTPassword" class="k-textbox" style="width: 100%;">			<br>
<label>Fecha de nacimiento :</label>
<input id="start"  type="Date" name="fecha" style="width: 99%;">									<br>
<label>Area / Departamento :</label>			
<input id="text1" type="Text" name="area" class="k-textbox" style="width: 99%;">					<br>
<label>Ubicacion fisica :</label>			
<input id="text1" type="Text" name="ubicacion" class="k-textbox" style="width: 99%;">				<br>
<label>Centro de Costos :</label>	
<input id="text1" type="Number" name="centrocostos" class="k-textbox" style="width: 99%;">			<br>
<label>Telefono :</label>	
<input id="text1" type="Number" name="telefono" class="k-textbox" style="width: 99%;">			<br>

			<br><br>								<input type="Submit" class="medium green" name="enviado" value="Guardar" style="width:20%;">
	</form>	
 
</div>
	
 </div> 	<!-- End Grid -->




<!-- ===================================== START FOOTER ===================================== -->
<?php
include('../content/Foot/foot.php');
?>

</body>
</html>