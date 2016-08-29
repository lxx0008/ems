<?php
class Excel extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index($s_1=" ",$s_1_t=" ",$s_2=" ",$s_2_t=" ")
	{
		$this->load->model('page_m');

		$data['s_1']=urldecode($s_1);
		$data['s_2']=urldecode($s_2);
		$data['s_1_t']=urldecode($s_1_t);
		$data['s_2_t']=urldecode($s_2_t);
		

		$this->load->view('excel',$data);
	}
}
?>