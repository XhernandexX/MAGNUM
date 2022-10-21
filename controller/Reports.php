<?php session_start();
	class Reports {
		// private $module;
		// public function __construct(){
		// 	$this->module = $_SESSION['module'];
		// }
		public function index(){			
			require_once 'view/roles/admin/header.php';
			require_once 'view/modules/4_reports/reports.view.php';
			require_once 'view/roles/admin/header.php';
		}
	}
?>