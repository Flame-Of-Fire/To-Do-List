<?php
$host = "127.0.0.1:3306";
		$name = "root";
		$pass = "";
		$conn = mysqli_connect($host, $name, $pass);
		if(!$conn){
			die('Could not connect'.mysqli_error());
		}
?>