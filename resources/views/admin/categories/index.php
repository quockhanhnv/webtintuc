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
				<img src="images/logo.png">
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

	<div class="content container-fluid">
		<h2>List Categories</h2>
		<div class="control clear-fix">
			<a class="btn btn-primary create" href="#">Create</a>
			<a class="btn btn-warning search" href="#">Search</a>
			<input class="input-search" type="text" name="search" placeholder="Enter keyword to search">
		</div>
		<table class="table table-stripped">
			<tbody>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Url</th>
					<th>Color</th>
					<th>Created at</th>
					<th></th>
					<th></th>
				</tr>
				<?php 
				foreach($categories as $category)
				{
				 ?>
				<tr>
					<td><?php echo $category->getId(); ?></td>
					<td><?php echo $category->getName();?></td>
					<td><?php echo $category->getSlug(); ?></td>
					<td><?php echo $category->getColor(); ?></td>
					<td><?php echo $category->getCreatedAt(); ?></td>
					<td>
						<a href="<?php echo location('categorycontroller/edit/' . $category->getId()) ?>" class="btn btn-success btn-mini pull-left">
						Edit
						</a>
		        	</td>
		        	<td>
		        		<form method="POST" action="<?php echo location('categorycontroller/delete/' . $category->getId()) ?>" accept-charset="UTF-8">
							<button type="submit" class="btnDelete btn btn-danger btn-mini">Delete</button>
						</form>
		        	</td>
				</tr>
				<?php
				}
				 ?>
				
			</tbody>
		</table>

		<!-- pagingation -->
		<nav aria-label="Page navigation" style="float: right;">
		  <ul class="pagination">
		    <li>
		      <a href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li>
		      <a href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>
	</div>
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(".btnDelete").click(function (){
			var isDelete = confirm('Are you sure want to delete ?');
			if(isDelete){
				return true;
			}else{
				return false;
			}
		});
	</script>
</body>
</html>