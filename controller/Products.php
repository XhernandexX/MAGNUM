<?php session_start();
	class Products {
		// private $module;
		// public function __construct(){
		// 	$this->module = $_SESSION['module'];
		// }
		public function index(){			
			require_once 'view/roles/admin/header.php';
			require_once 'view/modules/3_products/products.view.php';
			require_once 'view/roles/admin/header.php';
		}
	}
?>