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

	<div class="content container">
		<form method="post" action="<?php echo location("articlecontroller/update/" . $article->getId()) ?>" enctype="multipart/form-data">
			<div class="row">
				<div class="title col-md-3"><h3>Edit article</h3></div>
				<div class="nav-function col-md-3 col-md-offset-6">
					<h3>
						<button type="submit" class="btn btn-primary" style="float: right; margin-left: 5px">Save</button>
						<a href="#" class="btn btn-warning" style="float: right;">Back</a>
					</h3>
				</div>
			</div>
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#infor" aria-controls="infor" role="tab" data-toggle="tab">Information</a></li>
				<li role="presentation"><a href="#more-infor" aria-controls="more-infor" role="tab" data-toggle="tab">More information</a></li>
				<li role="presentation"><a href="#seo-config" aria-controls="seo-config" role="tab" data-toggle="tab">SEO config</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="infor">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" placeholder="Title" name="title" value="<?php echo $article->getTitle() ?>">
					</div>
					<div class="form-group">
						<label for="slug">Slug</label>
						<input type="text" class="form-control" placeholder="Slug" name="slug" value="<?php echo $article->getSlug() ?>">
					</div>
					<div class="form-group">
						<label for="category">Category</label>
						<select name="category" class="form-control">
							<option value="1">Ẩm Thực</option>
							<option value="2">Handmade</option>
						</select>
					</div>
					<div class="form-group">
						<label for="image">Featured Image</label>
						<input type="file" name="image" class="form-file-control" onchange="previewFile();">
						<img src="images/3-buoc-don-gian-lam-kem-cam-kiwi-mat-lanh_410_240.jpg" id="preview">
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="more-infor">
					<div class="form-group">
						<label for="short_desc">Short Description</label>
						<textarea type="text" class="form-control" name="short_desc"></textarea>
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea type="text" class="form-control" name="content"></textarea>
					</div>
					<div class="form-group">
						<label for="viewCount">View count</label>
						<input type="text" class="form-control" placeholder="View count" name="viewCount">
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="seo-config"></div>
			</div>
		</form>
	</div>

	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/ckeditor.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace('content');
		function previewFile(){
			var preview = $('#preview');
			var file = $('input[type=file]').prop('files')[0];
			var reader = new FileReader();

			if(file){
				reader.readAsDataURL(file);
			}else{
				preview.attr('src', '');
			}
			reader.onloadend = function() {
				preview.attr('src', reader.result);
			}
		}

	</script>
</body>
</html>