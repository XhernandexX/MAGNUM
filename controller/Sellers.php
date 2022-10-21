<?php session_start();
	class Sellers {
		// private $module;
		// public function __construct(){
		// 	$this->module = $_SESSION['module'];
		// }
		public function index(){			
			require_once 'view/roles/admin/header.php';
			require_once 'view/modules/2_sellers/sellers.view.php';
			require_once 'view/roles/admin/header.php';
		}
	}
?>