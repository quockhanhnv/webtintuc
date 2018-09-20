<?php 

class Database
{

	private static $connection;

	public function __construct()
	{

	}
	// return PDI instance
	public static function getInstance()
	{
		if(!isset(self::$connection)) // if connection is not init
		{
			$driverName = 'mysql';//data source name
			$databaseName = 'demo';
			$host = '127.0.0.1'; // localhost or 127.0.0.1:3306
			$dsn = "$driverName:dbname=$databaseName;host = $host;charset=utf8";
			//$dsn = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
			$userName = 'root';
			$password = '';

			try
			{
				self::$connection = new PDO($dsn, $userName, $password);
				self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(Exception $e)
			{
				echo "Connection failed: " . $e->getMessage;
			}
		}
		return self::$connection;
	}
}