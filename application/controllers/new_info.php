<?php
	class New_info extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
	  		$this->load->library('session');
		}
		public function view()
		{
			$this->load->model('master_model');
			$data['error']="";
			$this->load->view('new_info',$data);
		}
		public function form1(){
		$config['upload_path'] = './uploads/';
 		$config['allowed_types'] = 'xls|csv';
 		$config['file_name']  = time();
 		$config['allow_no_file']=TRUE;
		$this->load->library('upload');
		$this->upload->initialize($config);
 		 if ($this->upload->do_upload('excel_file'))
					  {
					   
					   $data = array('upload_data' => $this->upload->data());
					   $this->load->view('lead_in',$data);
					  } 
					  else
					  {
					  	$error=array('error'=>$this->upload->display_errors());
					  	$this->load->view('new_info',array('error'=>$error));
 					  }
		}
		public function form2(){
			$this->load->model('insert_model');
			$res=$this->insert_model->insert_sb();
			if($res)
				echo "<script>alert('数据上传成功!');history.go(-1);</script>";
			else
				echo "<script>alert('您的输入有误!');history.go(-1);</script>";
		}
	}
?>