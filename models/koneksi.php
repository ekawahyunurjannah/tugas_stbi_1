<?php
	$user = "root";
	$pass = "";
	$db = "stbi";
	$host = "localhost";
	$konek = mysql_connect($host, $user, $pass);
	mysql_select_db($db, $konek);
?>