<?php 
class App
{
	public function __construct() 
	{
		$url = $this-> getURL(); // gọi hàm lấy chuỗi trên thanh địa chỉ
		$route = Route::getRouteByUrl($url); // tách các tham số ngăn cách bới dấu / 
		$route->run();
	}

	// Get url which user enter
	public function getURL()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		return $url;
	}
}