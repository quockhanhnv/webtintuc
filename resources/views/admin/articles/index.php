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
    <h2>List Articles</h2>
    <div class="control clear-fix">
      <a class="btn btn-primary create" href="#">Create</a>
      <a class="btn btn-warning search" href="#">Search</a>
      <input class="input-search" type="text" name="search" placeholder="Enter keyword to search">
    </div>
    <table class="table table-stripped">
      <tbody>
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Slug</th>
          <th>Catgory</th>
          <th>Feature</th>
          <th>Created at</th>
          <th></th>
          <th></th>
        </tr>
        <?php 
        foreach($articles as $article)
        {
        ?>
        <tr>
          <td><?php echo $article->getId(); ?></td>
          <td><?php echo $article->getTitle(); ?></td>
          <td><?php echo $article->getSlug(); ?></td>
          <td><?php echo $article->getCategory_id(); ?></td>
          <td><img style="width: 150px" src="<?php echo location($article->getFeatureImage())?>"></td>
          <td><?php echo $article->getCreated_at(); ?></td>
          <th><a class="btn btn-success" href="<?php echo location('articlecontroller/edit/' . $article->getId()) ?>">Edit</a></th>
          <th>
            <form method="POST" action="<?php echo location('articlecontroller/delete/' . $article->getId()) ?>" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="gNPl2AQxqNhtXAL1DKHwedFw6YQCt1xp3IdQb9HT">

            <button class="btn btn-danger">Delete</button>
            </form>
          </th>
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