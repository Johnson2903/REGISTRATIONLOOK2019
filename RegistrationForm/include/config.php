<?php 
	$conn = mysqli_connect("localhost", "root", "", "look2019form");

	if (!$conn) {
		echo "Error connecting to the database";
	}
	 else{
		echo "Connected successfully";
	}

	 ?>	
