<?php
	class Insert extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}
		public function index(){
			$this->load->model('insert_model');
			$res=$this->insert_model->index();
			if($res)
				echo "成功";
		}
	}
?>