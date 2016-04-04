<?php
echo "Check one";
require 'auth.php';

// Instantiate variable and error message values
$subCategory = "";

$subCategoryErr = "";

$subCategoryCheck = "";

$RegExCount = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "Check two";
// Input sanitization
function test_input($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
}

  $subCategoryCheck = test_input($_POST["subcategory"]);
  echo "Subcategory: ".$subCategoryCheck."<br>";
  if (!preg_match("/^[a-zA-Z ]{1,255}$/",$subCategoryCheck)) {
          $subCategoryErr = "Only letters and white space allowed.";
  } else {
          $subCategory = $subCategoryCheck;
          $RegExCount++;
  }
}
if($RegExCount == 1){

try {
	$link = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	echo "Connected to database";

	$query = $link->exec("INSERT INTO subcategories(subcategory) VALUES ('$subCategory')");

	$link = null;
}
catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}

header('Location: http://crashthebot.net/coolshit/dataentry/categories.php');
?>
