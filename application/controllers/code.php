<?php 
	class Code extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
		}
		public function verify_img(){
			$this->load->view('code');
		}
	}
?>