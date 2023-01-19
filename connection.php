<?php 

/**
* Conexão com o banco de dados
*/
class Db
{
	private static $instance=NULL;
	
	function __construct(){}

	public static function  getConnect(){
		if (!isset(self::$instance)) {
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$instance= new PDO('mysql:host=localhost;dbname=database_teste','root','',$pdo_options);
		} 
		return self::$instance;
	}
}

 ?>