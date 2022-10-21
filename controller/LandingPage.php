<?php
	class LandingPage {
		public function __construct(){}
		public function index(){			
			require_once 'view/roles/business/header.php';
			require_once 'view/business/index.view.php';
			require_once 'view/roles/business/footer.php';
		}
		public function nosotros(){
			require_once 'view/roles/business/header.php';
			require_once 'view/business/nosotros.view.php';
			require_once 'view/roles/business/footer.php';
		}
		public function productos(){
			require_once 'view/roles/business/header.php';
			require_once 'view/business/productos.view.php';
			require_once 'view/roles/business/footer.php';
		}
	}
?>