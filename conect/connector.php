<?php
$host = "localhost"; 
$user = "root"; 
$base = "dbsys"; 
$pass = "123456"; 
$link = mysql_connect($host,$user,$pass);
		mysql_select_db($base,$link);
