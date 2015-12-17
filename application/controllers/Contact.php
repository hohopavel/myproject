<?php
class Contact extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper(['url']);
		$this->load->library('session');
	}

	public function index(){
		$menu = 'contact';
		$this->load->view('page/header', ['menu'=>$menu]);
	      $this->load->view('page/contact-us');
	}
}
?>