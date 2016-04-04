<?php
require 'config/auth.php';
echo "Whatever Forever";
$link = mysqli_connect($hostname,$username,$password,$database,3306);

$query = "select distinct category from categories";

$result = mysqli_query($link, $query) or die(Mysqli_error($link));

$categoryList = array();

while($row = mysqli_fetch_assoc($result)){
	array_push($categoryList, $row['category']);
	echo $row['category']."<br>";
}

mysqli_close($link);

sort($categoryList);

for($i=0;$i<count($categoryList);$i++){
	echo '<option name="mainCat" id="mainCat" value="'.$categoryList[$i].'">'.$categoryList[$i].'</option>'; 
}
?>
