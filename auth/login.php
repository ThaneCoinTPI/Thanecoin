<?php
	$servername = "db727279395.db.1and1.com";
	$username = "dbo727279395";
	$password = "Thanecoin1!";
	$dbname = "db727279395";
	
	$name = $_REQUEST['name'];
	$pass = $_REQUEST['password'];
	$pass = md5($pass);

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = 'SELECT secret_seed from users where name="'.$name.'" and password="'.$pass.'"';
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        echo $row["secret_seed"];
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
?>