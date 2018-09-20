<?php 

class LoginController
{
	public function __construct()
	{

	}
	public function index()
	{
		require_once(ROOT . '/resources/views/login.php');	
	}
	public static function edit($id)
	{
		// gõ trên thanh  địa chỉ thì gọi ra được class này
		echo "<br/>LoginController@edit" . $id;
	}
}