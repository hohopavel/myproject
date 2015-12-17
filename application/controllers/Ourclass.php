<?php
class Ourclass extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper(['url']);
		$this->load->library('session');
	}

	public function index(){
		$menu = 'class';
		$this->load->view('page/header', ['menu'=>$menu]);
	      $this->load->view('page/class');
	}

	public function violin(){
		echo "violin";
	}

	public function cello(){
		echo "cello";
	}
}
?>