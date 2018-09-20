<?php 

/**
* 
*/
class CategoryController
{
	
	public function __construct()
	{
		# code...
	}
	public function index()
	{
		// $name = "Khanh";
		// $cars = ['merce', 'kia'];
		//$data =['name' => $name, 'cars' => $cars];
		// $view = new View('article_index', $data);
		
		$categories = Category::all(); // 1 mảng chứa các objecs
		$view = new View('admin/categories/index', ['categories'=>$categories]); 
													// tên biến => giá trị
													//(giống tên biến bên file giao diện )
		//var_dump(['categories'=>$categories]);
		//die();
		// article_index là tên view cần hiển thị
		// $data là data cần hiển thị
		
		//var_dump($categories); // sẽ bị x2 mảng vì có 2 cách lấy: theo index và theo tên index
		$view->render();

	  
	}
	public function save()
	{
		echo 'categoryController@save';
		$category = new Category();
		$title = $_REQUEST['title']; // lấy từ trang http://localhost:8080/lamsao.com/categorycontroller/create
		$slug = $_REQUEST['slug']; // name của thẻ input
		$color = $_REQUEST['color'];
		$category->setName($title);
		$category->setSlug($slug);
		$category->setColor($color);
		$category->setParentId(1);
		try{
			Category::save($category);
			header('Location: http://localhost:8080/lamsao.com/categorycontroller/index');  

		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	public function update($id)
	{
		echo 'categoryController@update';
		
		$title = $_REQUEST['title']; // lấy từ trang http://localhost:8080/lamsao.com/categorycontroller/update
		$slug = $_REQUEST['slug']; // name của thẻ input
		$color = $_REQUEST['color'];
		//echo $title . "-" . $slug . "-" . $color; lấy được giá trị trên form
		$category = new Category();
		$category->setId($id);
		$category->setName($title);
		$category->setSlug($slug);
		$category->setColor($color);
		$category->setParentId(1);
		//var_dump($category);

		try{
			Category::update($category); // có thể thay bằng hàm save
			header('Location: http://localhost:8080/lamsao.com/categorycontroller/index');  

		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	

	public function create()
	{
		$view = new View('admin/categories/create');
		$view->render();
	}
	public function edit($id)
	{
		$category = Category::getById($id);
		//var_dump($category);
		$view = new View('admin/categories/edit', ['category'=>$category]);
		$view->render();
	}
	public function delete($id)
	{
		echo 'categoryController@delete';
		
		$category = new Category();
		$category->setId($id);
		//var_dump($category);

		try{
			Category::delete($category); // có thể thay bằng hàm save
			header('Location: http://localhost:8080/lamsao.com/categorycontroller/index');  

		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	
}