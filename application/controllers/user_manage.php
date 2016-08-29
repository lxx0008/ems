<?php
	class User_manage extends CI_controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('master_model');
		}
		public function index(){
			$data['user'] = $this->master_model->get_admin($this->session->userdata('user_id'));
			$data['user_all'] = $this->master_model->get_admin_all();
				$this->load->view('user_manage',$data);
		}
		public function update_user(){
			$res = $this->master_model->update();
			if($res){
				echo "<script>alert('修改成功！');history.go(-1);</script>";
			}
			else
				echo "<script>alert('您的输入有误！');history.go(-1);</script>";
		}
		public function new_user(){
			$check = $this->master_model->check_new();
			if($check)
				echo "<script>alert('该工号已经被注册了！');history.go(-1);</script>";
			else
				{$res = $this->master_model->insert();
							if($res && ($this->input->post('choose')=='accept')){
								echo "<script>alert('添加新用户成功！');history.go(-1);</script>";
							}
							else
								echo "<script>alert('您的输入有误！');history.go(-1);</script>";}
		}
	}

?>