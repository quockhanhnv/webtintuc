<?php
	//


	// định nghĩa  hằng số
	define('ROOT', dirname(dirname(__FILE__)) .DIRECTORY_SEPARATOR);
	

	// ĐỊnh nghĩa hằng số APP là đường dẫn tuyệt đối vs folderr app
	define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);


	require APP . 'core/App.php';
	require APP . 'core/Route.php';
	require APP . 'core/View.php';
	require APP . 'controllers/CategoryController.php';
	require APP . 'controllers/ArticleController.php';
	require APP . 'core/Database.php';
	require APP . 'models/Category.php';
	require APP . 'models/Article.php';
	require APP . 'util/helper.php';
	$app = new App();
	