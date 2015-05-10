<?php
		$servername = "localhost";
		$sqlusername = "root";
		$password = "";
		
		$conn = mysqli_connect($servername, $sqlusername, $password);
		
		if(!$conn){
			die("Connection failed: " . mysql_connect_error());
		}
		
		mysqli_select_db($conn,"prosidb");
?>