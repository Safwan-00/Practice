<html>

<head>
	<title>
	</title>
</head>

<body>

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	// Create connection 
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection 
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// sql to create table 
	$sql = "CREATE TABLE persona 
		( 
			
			FirstName varchar (255),
			LastName varchar(255),
			age int
		)";

	if (mysqli_query($conn, $sql)) {
		echo "Table user created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>

</body>

</html>