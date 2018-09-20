<?php 

/**
* 
*/
class HomePageController
{
	
	public function __construct()
	{
		# code...
	}
	public function index()
	{
		require_once(ROOT . 'resources/views/homepage.php');
	}
	public function edit($id)
	{
		echo "HomePageController@edit@$id";
	}
}