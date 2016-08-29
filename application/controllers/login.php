<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login extends CI_controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->helper('form');
			$this->load->library('form_validation');
		}
		public function view(){
			$this->load->view('login',array('view'=>'view'));
				}
		public function check(){
			$this->form_validation->set_message('required', '不可以留空哟！');
			$this->form_validation->set_message('numeric', '%s只能是数字哟！');
			$this->form_validation->set_rules('user_id', '工号', 'required|numeric');
 			$this->form_validation->set_rules('pw', '密码', 'required');
 			$this->form_validation->set_rules('yzm', '验证码', 'callback_yzm_check|required');
			if($this->form_validation->run()===false)
				$this->load->view('login',array('view'=>'check'));
			else
				{
				$this->load->model('check_model');
				$res = $this->check_model->check();

				if($res){
					$u_name=$this->check_model->u_name();		
					$data = array(
					'user_id' => $this->input->post('user_id'),
					'user_name' => $u_name['UName'],
					'user_power'=>$u_name['power'],
					'is_logged_in' => true);

					$this->session->set_userdata($data);
					redirect('master','refresh');
				}
				else
					echo "<script>alert('工号与密码不匹配，请重新输入！');history.go(-1);</script>";
			}	
			
		}
		public function yzm_check($str){
			$yzm=$this->session->userdata('authnum_session');
			if($str!=$yzm)
				{
					$this->form_validation->set_message('yzm_check', ' %s错误');
  					 return FALSE;
				}
			else
				return TRUE;
		}
		public function login_out(){
			$this->session->sess_destroy();
			redirect('../','refresh');
		}
	}
?>