<?php
	$servername = "db727279395.db.1and1.com";
	$username = "dbo727279395";
	$password = "Thanecoin1!";
	$dbname = "db727279395";
	
	$name = $_REQUEST['name'];
	$pass = $_REQUEST['pass'];
	$seed = $_REQUEST['seed'];
	
	$seed = str_replace("\"", "\\\"", $seed);
	$pass = str_replace("\"", "\\\"", $pass);
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = 'INSERT INTO users (name, password, secret_seed) VALUES ("'.$name.'", MD5("'.$pass.'"), "'.$seed.'")';
	
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
?>