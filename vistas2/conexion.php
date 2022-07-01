  	
  	
<?php

class Conexion{

	public static function conectar(){

		$link = new PDO("mysql:host=sql306.epizy.com;dbname=epiz_31562680_tecno",
			            "epiz_31562680",
			            "MJ49EHQlTIHqjlF");

		$link->exec("set names utf8");

		return $link;

	}

}

