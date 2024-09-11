<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mngproduct extends CI_Controller {

	public function showProduct($productId = null){
		// echo "Product Id : ".$productId . "<br>";
		$this->_showProductName();
	}
	public function _showProductName(){
		$this->load->view('hello_view');
	}
}
