<?php

require 'auth.php';

try {
	$link = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	echo "Connected to database";

	$query = $link->exec("INSERT INTO categories(subcategory, category) VALUES ('$Subcategory','$Category')");

	$link = null;
}
catch(PDOException $e)
	{
		echo $e->getMessage();
	}

?>
