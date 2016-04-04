<?php

require 'auth.php';

try {
	$link = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	//echo "Connected to database";

	// Grab locations
	$pull = $link->prepare("SELECT * FROM categories");
	$pull->execute();
	$categories = $pull->fetchAll(PDO::FETCH_ASSOC);
	echo $categories;
	// Encode array in JSON
	//header('Content-Type: application/json');
	//echo json_encode($categories);

	$link = null;
}
catch(PDOException $e)
	{
		echo $e->getMessage();
	}

?>
