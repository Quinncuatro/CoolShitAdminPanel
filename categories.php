<!--Human Resources Organizer // Henry Quinn // 06/01/2015-->
<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Category Form</title>
<link rel='stylesheet prefetch' href='css/bootstrap/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='css/animate/animate.css'>
<link rel='stylesheet' href='css/coolshit.css'>
</head>

<body>
<?php include 'include/header.php'; ?>

<div class="container">
	<h3 class="text-center">Category Form</h3>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="well">
			<h4>Subcategory</h4>
			<form class="form-inline" method="POST" action="config/pdo_insert_subcategories.php">
  				<div class="form-group">
					<input type="text" class="form-control" id="subcategory" name="subcategory" placeholder="Subcategory">
  				</div>
  				<button type="submit" class="btn btn-default">Add Subcategory</button>
			</form>
			<hr/>
			<h4>Category</h4>
                        <form class="form-inline" method="POST" action="config/pdo_insert_categories.php">
                                <div class="form-group">
                                        <input type="text" class="form-control" id="category" name="category" placeholder="Category">
                                </div>
                                <button type="submit" class="btn btn-default">Add Category</button>
                        </form>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>

<?php include 'include/footer.php'; ?>

</body>

<script src='js/jQuery/jquery-2.2.1.min.js'></script>
<script src='js/bootstrap/bootstrap.min.js'></script>
<script src='js/coolshit.js'></script>

</html>
