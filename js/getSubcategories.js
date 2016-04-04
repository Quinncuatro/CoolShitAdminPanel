$(document).ready(function() {
	$("#category").click(function() {
		console.log("whatever forever");
		var cat=$(this).val();
		var dataString = 'cat=' + cat;
		console.log(cat);
		console.log(dataString);
		$.ajax
		({
			type: "POST",
			url: "include/getSubCategories.php",
			data: dataString,
			cache: false,
			success: function(html){
				$("#subcategory").html(html);
			}
		});
	});
});


