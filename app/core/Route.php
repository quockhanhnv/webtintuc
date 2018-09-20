<?php 
class Route
{
	private $controller; // class chứa hàm muốn gọi
	private $action; // hàm muốn gọi
	private $params; // tham số của hàm

	
	// default : Homepagecontroller@index
	function __construct()
	{
		$this->controller = "HomepageController";
		$this->action = "index";
		$this->params = [];
	}

	public function getController(){
		return $this->controller;
	}
	public function setController($controller){
		$this->controller = $controller;
	}

	public function getAction(){
		return $this->action;
	}
	public function setAction($action){
		$this->action = $action;
	}

	public function getParams(){
		return $this->params;
	}
	public function setParams($params){
		$this->params = $params;
	}

	public static function getRouteByUrl($url) // tách URl trên tranh địa chỉ ra
	{
		$route = new Route();
		if(isset($url))
		{
			$url = trim($url, '/'); // cắt ký tự / ở đầu hoặc ở cuối
			// $url = split('/', $url);
			$url = explode('/', $url);
			//print_r($url);
			$controller = isset($url[0]) ? $url[0] : null;
			$action = isset($url[1]) ? $url[1] : null;
			unset($url[0]);
			unset($url[1]);
			$params = array_values($url);
			$route->setController($controller);
			$route->setAction($action);
			$route->setParams($params);
			//var_dump($route);
		}
		return $route;
	}
	// dynamuc call action in controller buy URL
	public function run()
	{
		$controllerPath = APP . 'controllers/' .$this->controller . '.php'; // đường dẫn của file
		if(file_exists($controllerPath)) // kiểm tra 1 file có tồn tại hay không
		{
			require_once $controllerPath;
			$controller = new $this->controller();// mang giá trị người dùng nhập trên địa chỉ
			if(method_exists($controller, $this->action)) // kiểm tra 1 hàm có tồn tại hay ko
			{
				call_user_func_array([$controller, $this->action], $this->params);
			}
			else
			{
				echo "Controller is not exists";
			}
		}	
		else
		{
			echo "Controller is not exists";
		}
	}
	


}