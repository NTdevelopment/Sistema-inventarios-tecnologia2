<?php 

include('../conect/connector.php'); 
session_start();
if($_SESSION['logueado'] != "SI"){
header('location: ../index.php');
exit();
}
?>