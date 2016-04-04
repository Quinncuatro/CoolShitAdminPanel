<?php
echo "Check one";
require 'auth.php';

// Instantiate variable and error message values
$Category = "";

$CategoryErr = "";

$CategoryCheck = "";

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

  $CategoryCheck = test_input($_POST["category"]);
  echo "Category: ".$CategoryCheck."<br>";
  if (!preg_match("/^[a-zA-Z ]{1,255}$/",$CategoryCheck)) {
          $CategoryErr = "Only letters and white space allowed.";
  } else {
          $Category = $CategoryCheck;
          $RegExCount++;
  }
}
if($RegExCount == 1){

try {
	$link = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	echo "Connected to database";

	$query = $link->exec("INSERT INTO categories(category) VALUES ('$Category')");

	$link = null;
}
catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}

header('Location: http://crashthebot.net/coolshit/dataentry/categories.php');
?>
