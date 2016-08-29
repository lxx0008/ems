<?php
	class S_updata extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('updata_model');
		}
		public function index($i){
			switch($i)
			{
				case 1:$this->load->view('up_1');break;
				case 2:{$data['bf_info']=$this->updata_model->bf_info();
						$this->load->view('up_2',$data);break;}
				case 3:{$data['bx_info']=$this->updata_model->bx_info();
						$this->load->view('up_3',$data);
						break;}
				case 4:{$data['wx_info']=$this->updata_model->wx_info();
						$this->load->view('up_4',$data);		
						break;}
			}			
		}
	}
?>