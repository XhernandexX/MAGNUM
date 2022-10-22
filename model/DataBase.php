<?php 
	class DataBase{		
		public function __construct(){}
		public static function conexion(){
			$pdo = new PDO('mysql:host=bq36b1laj9tspvtyfk0a-mysql.services.clever-cloud.com;dbname=bq36b1laj9tspvtyfk0a;charset=utf8','uextwwe1soc1adhw','0EyhOqBvwyFjCE7HWZTh');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	}
?>