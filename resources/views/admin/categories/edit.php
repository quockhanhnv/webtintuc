<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo location('css/admin/stylesheet.css') ?>">
 	<link rel="stylesheet" type="text/css" href="<?php echo location('css/bootstrap.min.css') ?>">
 	<link rel="stylesheet" type="text/css" href="<?php echo location('css/font-awesome.min.css') ?>">
	<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

</head>
<body>
	<div class="header container-fluid">
		<div class="header-top row">
			<div class="logo col-md-2">
				<img src="<?php echo location('images/logo.png') ?>">
			</div>
			<div class="account col-md-2 col-md-offset-8">Account</div>
		</div>
		<div class="main-menu">
			<nav class="navbar navbar-inverse">
				<a class="navbar-brand" href="#">Categories</a>
				<a class="navbar-brand" href="#">Articles</a>
				<a class="navbar-brand" href="#">Users</a>
			</nav>
		</div>
	</div>	
	<div class="bread-crumb container-fluid">
		<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Library</a></li>
		  <li class="active">Data</li>
		</ol>
	</div>

	<div class="content container">
		<form id="form-cat" method="post" action="<?php echo location("categorycontroller/update/" . $category->getId()) ?>" >
			<div class="row">
				<div class="title col-md-3"><h3>Edit Categories</h3></div>
				<div class="nav-function col-md-3 col-md-offset-6">
					<h3>
						<button type="submit" class="btn btn-primary" style="float: right; margin-left: 5px">Save</button>
						<a href="#" class="btn btn-warning" style="float: right;">Back</a>
					</h3>
				</div>
			</div>
			<div class="form-group">
		    	<label for="title">Title</label>
		    	<input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $category->getName() ?>">
				<div class="alert alert-danger">Title is required!</div>
		  	</div>
		  	<div class="form-group">
				<label>Slug</label>
				<input type="text" name="slug" class="form-control" placeholder="Slug" value="<?php echo $category->getSlug() ?>">
				<div class="alert alert-danger">Slug is required</div>
			</div>
			<div class="form-group">
				<label>Color</label>
				<input type="text" name="color" class="form-control" placeholder="Color" value="<?php echo $category->getColor() ?>">
				<div class="alert alert-danger">Color is required</div>
			</div>
		</form>
	</div>

	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#form-cat').validate({
				rules: {
					'title': {
						required: true,
						minlength: 3,
					},
					'url': {
						required: true
					}
				},
				messages: {
					'title': {
						required: 'Title field is required!',
						minlength: "Title's should greater than 3",
					},
					'url': {
						required: 'URL field is required!',
					}
				},
				errorPlacement: function(error, element){
					error.addClass('alert alert-danger');
					element.after(error);
				},
				errorElement: 'div',
			});

			$('#save').click(function(e){
				e.preventDefault();
				save();
			});

			function save(){
				var form = $("#form-cat");
				$.ajax({
					type: form.attr('method'),
					url: form.attr('action'),
					data: form.serialize(),
					dataType: 'json',
					success: function(data){
						console.log('success');
					},
					error: function(data){
						var errors = data.responseJSON;
						$.each(errors, function(key, value){
							var element = $('[name=' + key +']');
							element.after(value);
						})
					}
				});
			}
		});
	</script>
</body>
</html>