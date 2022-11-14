<?php
    $host = "localhost";
    $user = "root";
    $pass = '';
    $db = "prak_pemweb";
	$con = mysqli_connect($host, $user, $pass, $db);
	if(!$con){
		die("Could not connect: ".mysqli_connect_error());
	}
?>