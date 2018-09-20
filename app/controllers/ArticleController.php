<?php 

/**
* 
*/
class ArticleController
{
	
	public function __construct()
	{
		# code...
	}
	public function index()
	{
	// 	$name = "Khanh";
	// 	$cars = ['merce', 'kia'];
	// 	$data =['name' => $name, 'cars' => $cars];
	// 	$view = new View('article_index', $data);
		$articles = Article::all();
		$view = new View('admin/articles/index' ,  ['articles' => $articles]);
		// article_index là tên view cần hiển thị
		// $data là data cần hiển thị
		$view->render();

	}
	public function save()
	{
		echo 'ArticleController@save';
		
		$title = $_REQUEST['title']; // lấy từ trang http://localhost:8080/lamsao.com/categorycontroller/create
		$slug = $_REQUEST['slug'];
		$category_id = $_REQUEST['category'];
		$shortDescription = $_REQUEST['short_desc'];
		$content = $_REQUEST['content'];
		$viewCount = $_REQUEST['viewCount'];


		// đoạn code này là lưu file image
		$info = pathinfo($_FILES['image']['name']); // lấy thông tin của file
		// var_dump($_FILES['image']); // thông tin của cái file ảnh tên, kiểu ...
		// var_dump(pathinfo($_FILES['image']['name']));

		$ext = $info['extension']; // get the extention of the file vd .png .jpg
		$newName = uniqid() . "." . $ext; // đặt tên mới ko bị trùng lặp

		$imagePath = 'images/articles/' . $newName;
		move_uploaded_file($_FILES['image']['tmp_name'], $imagePath); // chuyển đổi đường dẫn thành folder mình muốn lưu
		// đoạn code trên là lưu file image

		$article = new Article();
		$article->setTitle($title);
		$article->setSlug($slug);
		$article->setCategory_id($category_id);
		$article->setShort_description($shortDescription);
		$article->setContent($content);
		$article->setViewCount($viewCount);
		$article->setFeatureImage($imagePath);
		// var_dump($article);
		// die();
		try{
			Article::save($article);
			header('Location: http://localhost:8080/lamsao.com/articlecontroller/index');  

		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
		
	}

	public function update($id)
	{
		echo 'ArticleController@update';
		
		$title = $_REQUEST['title']; 
		$slug = $_REQUEST['slug'];
		$category_id = $_REQUEST['category'];
		$article = new Article();
		$article->setId($id);
		$article->setTitle($title);
		$article->setSlug($slug);
		$article->setCategory_id($category_id);
		//var_dump($article);

		try{
			Article::update($article); // có thể thay bằng hàm save
			header('Location: http://localhost:8080/lamsao.com/articlecontroller/index');  

		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	


	public function create()
	{
		$categories = category::all(); // trả về danh sách categories để load lên combobox
		// var_dump($categories);
		// die();
		$view = new View('admin/articles/create', ['categories'=> $categories]); 
		$view->render();
	}
	public function edit($id)
	{
		$article = Article::getById($id);
		//var_dump($article);
		//$view = new View('admin/articles/edit');
		$view = new View('admin/articles/edit', ['article'=>$article]);
		$view->render();
	}
	public function delete($id)
	{
		echo "ArticleController@delete#$id";
		
		$article = new Article();
		$article->setId($id);
		//var_dump($category);

		try{
			Article::delete($article); // có thể thay bằng hàm save
			header('Location: http://localhost:8080/lamsao.com/articlecontroller/index');  

		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	public function show($slug)
	{
		$article = Article::find($slug);
		// var_dump($article);
		// die();
		if($article)
		{
			$view = new View('article', ['article'=>$article]);
			// $view = new View('article', ['article'=>$article], );
			$view->render();	
		}
		else
		{
			echo "Article is not found !";
		}	
	}

}