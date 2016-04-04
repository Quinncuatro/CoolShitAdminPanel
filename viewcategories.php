<?php
require 'include/getCategoryLists.php';
?>
<!--View Categories // Henry Quinn // 03/30/2016-->
<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Category Lists</title>
<link rel='stylesheet prefetch' href='css/bootstrap/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='css/animate/animate.css'>
<link rel='stylesheet' href='css/coolshit.css'>
</head>

<body>
<?php include 'include/header.php'; ?>

<div class="container">
	<h3 class="text-center">Category List</h3>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="well">
			<div class="row">
				<h4>Categories</h4>
				<hr/>
				<ul class="text-left">
				<?php
					for($i=0;$i<count($catList);$i++) {
						echo "<li>".$catList[$i]."</li>";
					}
				?>
                                </ul>
			</div>
                        <div class="row">
				<h4>Subcategories</h4>
                                <hr/>
                                <ul class="text-left">
                                <?php
                                	for($i=0;$i<count($subList);$i++) {
                                        	echo "<li>".$subList[$i]."</li>";
                                        }
                                ?>
                                </ul>
                        </div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>

<?php include 'include/footer.php'; ?>

</body>

<script src='js/jQuery/jquery-2.2.1.min.js'></script>
<script src='js/bootstrap/bootstrap.min.js'></script>
<script src='js/coolshit.js'></script>
<script src='js/viewcategories.js'></script>

</html>
