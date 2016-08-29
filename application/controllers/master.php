<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Master extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
		}
		public function index(){
			$this->load->model('master_model');
			$s=array(
				'0'=>'分类号',
				'1'=>'仪器名称',
				'2'=>'型号',
				'3'=>'厂家',
				'4'=>'经费科目',
				'5'=>'领用人',
				'6'=>'经手人',
				'7'=>'国际分类号',
				'8'=>'国际分类名',
				'9'=>'购置日期',
				);
			for($i=0;$i<10;$i++)
				$data[$s[$i]]=$this->master_model->get_shebei($s[$i]);
			$this->load->view('header');
			$this->load->view('main',$data);
		}
	}
?>