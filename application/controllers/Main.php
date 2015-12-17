<?php
class Main extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper(['url']);
		$this->load->library('session');
	}

	public function index(){
		$menu = 'main';
		$this->load->view('page/header', ['menu'=>$menu]);
	      $this->load->view('page/main');
	}

	public function seolstring(){
		echo "test";
		/*$menu = 'seolstring';
		$this->load->view('page/header', ['menu'=>$menu]);
	      $this->load->view('page/seolstring');*/
		
	}

	public function classkk(){
		echo "class";
	}

	public function muse(){
		echo "muse";
	}

	public function contact(){
		echo "contact";
	}
}
?>