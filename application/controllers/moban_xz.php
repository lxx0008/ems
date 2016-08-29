<?php
	class Moban_xz extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('download');
		}
		public function index($i){
			switch($i)
			{
				case '1':
					{
					$data = file_get_contents("moban/sqwxmb.doc");
					$name = 'sqwxmb.doc';break;
					}
				case '2':
					{
					$data = file_get_contents("moban/sqbfmb.doc");
					$name = 'sqbfmb.doc';
					}
			}
			force_download($name,$data);
		}
	}
?>