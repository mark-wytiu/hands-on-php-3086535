<!DOCTYPE html>
<html>

<head>
	<title>Delete Speaker</title>
	<meta name="author" value="Joe Casabona" />
</head>

<body>
	<?php

	$host = '127.0.01';
	$user = 'mariadb';
	$pass = 'mariadb';
	$db = 'mariadb';

	$mysqli = new mysqli(
		$host,
		$user,
		$pass,
		$db
	);
	
	$name = $_GET['name'];
	$result = $mysqli->query("DELETE FROM speakers WHERE name='$name'");
	
	if ($result) {
		echo "$name . Speaker deleted successfully";
	} else {
		echo "Error deleting speaker: ";
	}
	
	?>
	<p><a href="index.php">Go Back</a></p>
</body>

</html>