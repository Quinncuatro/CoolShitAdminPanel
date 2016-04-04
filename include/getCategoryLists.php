<?php
require 'config/auth.php';

$link = mysqli_connect($hostname,$username,$password,$database,3306);

$query1 = "select category from categories";

$query2 = "select subcategory from subcategories";

$result1 = mysqli_query($link, $query1) or die(Mysqli_error($link));

$result2 = mysqli_query($link, $query2) or die(Mysqli_error($link));

$catList = array();
$subList = array();

while($row = mysqli_fetch_assoc($result1)){
	array_push($catList, $row['category']);
}

while($row = mysqli_fetch_assoc($result2)){
        array_push($subList, $row['subcategory']);
}

mysqli_close($link);

sort($catList);
sort($subList);
?>
