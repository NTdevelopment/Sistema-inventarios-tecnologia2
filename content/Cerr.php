<?php 

include('../conect/connector.php'); 
session_start();
if($_SESSION['logueado'] != "SI"){
header('location: ../index.php');
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<title>Cerrando Sesion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" /> 
	
	<!-- Javascript -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/kickstart.js"></script>
</head>

<body>


<?php

echo '<div class="notice success"><img src="../images/otrs/loader.gif" width="50" height="50"><h1> CUENTA CERRADA ESPERE PORFAVOR</h1>
<a href="#close" class="icon-remove"></a></div>';
echo '<img src="../images/44.jpg" width="90%" height="70%" style="padding-left: 100px">';
echo '<meta http-equiv="Refresh" content="5;URL=../index.php" />';


session_unset();
session_destroy();



?>
</body>
</html>