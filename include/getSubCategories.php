<?php
require '../config/auth.php';

$link = mysqli_connect($hostname,$username,$password,$database,3306);

$cat=$_POST['cat'];

$query = "select subcategory from categories where category ='$cat'";

$result = mysqli_query($link, $query) or die(Mysqli_error($link));

$subCategoryList = array();

while($row = mysqli_fetch_assoc($result)){
	array_push($subCategoryList, $row['subcategory']);
	echo $row['subcategory']."<br>";
}

mysqli_close($link);

sort($subCategoryList);

for($i=0;$i<count($subCategoryList);$i++){
	echo '<option name="subcategory" id="subcategory" value="'.$subCategoryList[$i].'">'.$subCategoryList[$i].'</option>'; 
}
?>
