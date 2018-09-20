<?php 
class Article
{
	private $id;
	private $title;
	private $slug;
	private $short_description;
	private $content;
	private $feature_image;
	private $view_count;
	private $category;
	private $category_id;
	private $created_at;
	private $updated_at;
	private $deleted_at;

	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setViewCount($viewCount)
	{
		$this->view_count = $viewCount;
	}
	public function getViewCount()
	{
		return $this->view_count;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function setSlug($slug)
	{
		return $this->slug = $slug;
	}
	public function getSlug()
	{
		return $this->slug;
	}
	public function setContent($content)
	{
		return $this->content = $content;
	}
	public function getContent()
	{
		return $this->content;
	}
	public function setFeatureImage($featureImage)
	{
		return $this->feature_image = $featureImage;
	}
	public function getFeatureImage()
	{
		return $this->feature_image;
	}
	public function setShort_description($short_description)
	{
		$this->short_description = $short_description;
	}
	public function getShort_description()
	{
		return $this->short_description;
	}
	//.... get set
	public function setCategory_id($category_id)
	{
		$this->category_id = $category_id;
	}
	public function getCategory_id()
	{
		return $this->category_id;
	}
	public function setCategory($category)
	{
		$this->category = $category;
	}
	public function getCategory()
	{
		return $this->category;
	}
	public function setCreated_at($created_at)
	{
		$this->created_at = $created_at;
	}
	public function getCreated_at()
	{
		return $this->created_at;
	}

	public static function save(Article $article) // chỉ định là category object
	{
		$connection = Database::getInstance();
		//var_dump($connection);
		$title = $article->getTitle();
		$slug = $article->getSlug();
		$category_id = $article->getCategory_id();
		$shortDescription = $article->getShort_description();
		$content = $article->getContent();
		$viewCount = $article->getViewCount();
		$featureImage = $article->getFeatureImage();

		$sql = 
		"insert into articles(title, slug, category_id, short_description, content, view_count, feature_image  )
		 values('$title', '$slug', '$category_id', '$shortDescription', '$content', '$viewCount', '$featureImage'  )";
		//echo $sql;

		$connection->exec($sql);
	}
	public static function update(Article $article)
	{
		$connection = Database::getInstance();
		$id  = $article->getId();
		$title  = $article->getTitle();
		$slug  = $article->getSlug();
		$category_id = $article->getCategory_id();
		$sql = 
		"update articles set title = '$title', slug = '$slug', category_id = '$category_id' where id=$id ";
		// echo $sql; 
		// die();
		$connection->exec($sql);

	}

	public static function delete(Article $article)
	{
		$connection = Database::getInstance();
		$id  = $article->getId();
		// $sql = 
		// "delete from categories where id= '$id' ";
		$sql = 
		 "update articles set deleted_at = sysdate() where id= '$id' ";
		//echo $sql; 
		//die();
		$connection->exec($sql);
	}

	public static function getById($id)
	{
		$connection = Database::getInstance();
		$sql = 'select * from articles where id = ' . $id;
		// $categories = $connection->query($sql)->fetchAll();
		// 			// trả về PDO object        // trả về 1 array chứa các array

		$article = $connection->query($sql, PDO::FETCH_CLASS, __CLASS__)->fetch();
		// vì lấy theo  id nên chỉ trả về 1 dòng nên dùng hàm fetch
		//trả về 1 array chứa các Chứa các object
		return $article; 	
	}

	public static function all() // lấy ra tất cả dl trên database lên
	{
		$connection = Database::getInstance();
		//$sql = 'select * from categories';
		$sql = 'select * from articles where deleted_at is null';
		// $categories = $connection->query($sql)->fetchAll();
		// 			// trả về PDO object        // trả về 1 array chứa các array

		$articles = $connection->query($sql, PDO::FETCH_CLASS, __CLASS__)->fetchAll();

		//trả về 1 array chứa các Chứa các object
		return $articles; // trả về 1 array chứa tất cả các dữ liệu của bảng categories;
	}
	public static function find($slug)
	{
		$connection = Database::getInstance();
		$sql = "select * from articles where deleted_at is null and slug =   '$slug'";
		// echo $sql;
		// die();
		// $categories = $connection->query($sql)->fetchAll();
		// 			// trả về PDO object        // trả về 1 array chứa các array

		$article = $connection->query($sql, PDO::FETCH_CLASS, __CLASS__)->fetch();
		// vì lấy theo  id nên chỉ trả về 1 dòng nên dùng hàm fetch
		//trả về 1 array chứa các Chứa các object
		return $article;
	}


}