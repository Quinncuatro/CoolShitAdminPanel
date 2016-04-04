<!--Place Form // Henry Quinn // 03/29/2016-->
<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Place Form</title>
<link rel='stylesheet prefetch' href='css/bootstrap/bootstrap.min.css'>
<link rel='stylesheet' href='css/coolshit.css'>
</head>

<body>
<?php include 'include/header.php'; ?>

<div class="container">
	<h3 class="text-center">Place Form</h3>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="well">
			<form onsubmit="return confirmForm(this);" class="empForm" method="POST" action="thanks.php">
  				<div class="form-group">
    					<label for="name">Name</label>
    					<input type="text" class="form-control" name="name" id="name" placeholder="Name of Place">
  				</div>
				<div class="form-group">
                                        <label for="category">Category</label>
                                        <div class="input-group">
                                                <select class="form-control" id="category" name="category">
                                                        <?php require 'include/getMainCategories.php';?>
                                                </select>
                                        </div>
                                </div>
				<div class="form-group">
                                        <label for="subcategory">Subcategory</label>
                                        <div class="input-group">
                                                <select class="form-control" id="subcategory" name="subcategory">
                                                        <option>---</option>
                                                </select>
                                        </div>
                                </div>
				<div class="form-group">
    					<label for="moneyToBring">Cost ($ / Hour)</label>
    					<div class="input-group">
						<select class="form-control" name="moneyToBring">
  							<option value="10">10</option>
  							<option value="20">20</option>
  							<option value="30">30</option>
  							<option value="40">40</option>
  							<option value="50+">50+</option>
						</select>
    					</div>
  				</div>
				<div class="form-group">
                                        <label for="street">Address</label>
                                        <input type="text" class="form-control" name="street" id="street" placeholder="Street"><br>
                                        <input type="text" class="form-control" name="city" id="city" placeholder="City"><br>
                                        <input type="text" class="form-control" name="state" id="state" placeholder="State"><br>
                                        <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip">
                                </div>
				<div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                                </div>
				<div class="form-group">
					<input class="btn btn-default newHire" type="button" value="Add To List">
				</div>
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
<script src='js/getSubcategories.js'></script>

</html>
