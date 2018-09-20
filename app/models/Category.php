<?php 

/**
* 
*/
class Category
{
	private $id;
	private $name;
	private $slug;
	private $color;
	private $type;
	private $parentId;
	private $createdAt;
	private $deletedAt;
	
	public function __construct()
	{
		# code...
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}

	public function setSlug($slug)
	{
		$this->slug = $slug;
	}
	public function getSlug()
	{
		return $this->slug;
	}
	
	public function setColor($color)
	{
		$this->color = $color;
	}
	public function getColor()
	{
		return $this->color;
	}
	public function setParentId($parentId)
	{
		$this->parentId = $parentId;
	}
	public function getParentId()
	{
		return $this->parentId;
	}
	public function setCreatedAt($createdAt)
	{
		$this->$createdAt = $createdAt;
	}
	public function getCreatedAt()
	{
		return $this->createdAt;
	}
	
	public static function save(Category $category) // chỉ định là category object
	{
		$connection = Database::getInstance();
		//var_dump($connection);
		$name  = $category->getName();
		$slug  = $category->getSlug();
		$color = $category->getColor();	
		$parentId = $category->getParentId();
		$sql = 
		"insert into categories(name, slug, color, parent_id) values('$name', '$slug', '$color', '$parentId')";
		//echo $sql;
		$connection->exec($sql);
	}
	public static function update(Category $category)
	{
		$connection = Database::getInstance();
		$id  = $category->getId();
		$name  = $category->getName();
		$slug  = $category->getSlug();
		$color = $category->getColor();	
		$parentId = $category->getParentId();
		$sql = 
		"update categories set name = '$name', slug = '$slug', color = '$color', parent_id = '$parentId' where id=$id ";
		//echo $sql; 
		//die();
		$connection->exec($sql);

	}

	public static function delete(Category $category)
	{
		$connection = Database::getInstance();
		$id  = $category->getId();
		// $sql = 
		// "delete from categories where id= '$id' ";
		$sql = 
		 "update categories set deleted_at = sysdate() where id= '$id' ";
		//echo $sql; 
		//die();
		$connection->exec($sql);
	}


	public static function all() // lấy ra tất cả dl trên database lên
	{
		$connection = Database::getInstance();
		//$sql = 'select * from categories';
		$sql = 'select * from categories where deleted_at is null';
		// $categories = $connection->query($sql)->fetchAll();
		// 			// trả về PDO object        // trả về 1 array chứa các array

		$categories = $connection->query($sql, 

			PDO::FETCH_CLASS, __CLASS__)->fetchAll();

		//trả về 1 array chứa các Chứa các object
		return $categories; // trả về 1 array chứa tất cả các dữ liệu của bảng categories;
	}
	public static function getById($id)
	{
		$connection = Database::getInstance();
		$sql = 'select * from categories where id = ' . $id;
		// $categories = $connection->query($sql)->fetchAll();
		// 			// trả về PDO object        // trả về 1 array chứa các array

		$category = $connection->query($sql, PDO::FETCH_CLASS, __CLASS__)->fetch();
		// vì lấy theo  id nên chỉ trả về 1 dòng nên dùng hàm fetch
		//trả về 1 array chứa các Chứa các object
		return $category; 	
	}

}