<?php
class Page extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index($c_id = " ",$c = " ",$i ="0")
	{
		$this->load->library('pagination');
		$this->load->library('table');

		$c_id=urldecode($c_id);
		$c=urldecode($c);
		$this->load->model('page_m');

		$totle=$this->page_m->totle($c_id,$c);

		if($totle == 0)
			echo "无该项信息或者您的输入有误！";
		else
		{
		$config['base_url'] =base_url().'index.php/page/index/'.$c_id.'/'.$c;
		$config['total_rows'] = $totle;
		$config['per_page'] = 20;
		$config['uri_segment'] = '5';
		//设为页面的参数，如果不添加这个参数分页用不了 
		$config['first_link'] = '首页';
		$config['last_link'] = '末 页';
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$this->pagination->initialize($config);

		$data['cur_page']=$this->uri->segment(5)/20+1;
		$data['news']=$this->page_m->get_shebei($config['per_page'],$this->uri->segment(5),$c_id,$c);
		$data['differ']=1;

		$this->table->set_heading('设备编号','领用单位名','仪器名称','型号','规格','单价','厂家','购置日期','现状名','经费科目名','分类号','领用人','经手人');
		$tmp=array(
				'table_open'=>'<table style="width:120%;text-align:center; border-collapse: collapse;">',
				'cell_alt_start' =>'<td style="border:1px #ccc solid;margin:0px;">',
				'cell_start' =>'<td style="border:1px #ccc solid;margin:0px;">'
			);
		$this->table->set_template($tmp);

		$this->load->view('page',$data);
		}
	}
	public function view($c,$i ="0")
	{
		$this->load->model('page_m');

		$data['news']=$this->page_m->get_detail($c);
		$this->load->view('view',$data);
	}
	public function query($s_1=" ",$s_1_t=" ",$s_2=" ",$s_2_t=" ",$i="0")
	{
		$this->load->library('pagination');
		$this->load->library('table');

		$s_1=urldecode($s_1);
		$s_1_t=urldecode($s_1_t);
		$s_2=urldecode($s_2);
		$s_2_t=urldecode($s_2_t);

		$this->load->model('page_m');

		$totle=$this->page_m->totle_0($s_1,$s_1_t,$s_2,$s_2_t);

		if($totle == 0)
			echo "无该项信息或者您的输入有误！";
		else
		{
		$config['base_url'] =base_url().'index.php/page/index/'.$s_1.'/'.$s_1_t.'/'.$s_2.'/'.$s_2_t;
		$config['total_rows'] = $totle;
		$config['per_page'] = 20;
		$config['uri_segment'] = '7';
		//设为页面的参数，如果不添加这个参数分页用不了 
		$config['first_link'] = '首页';
		$config['last_link'] = '末 页';
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$this->pagination->initialize($config);

		$data['cur_page']=$this->uri->segment(7)/20+1;
		$data['news']=$this->page_m->get_shebei_0($config['per_page'],$this->uri->segment(7),$s_1,$s_1_t,$s_2,$s_2_t);
		$data['differ']=2;
		$this->table->set_heading('设备编号','领用单位名','仪器名称','型号','规格','单价','厂家','购置日期','现状名','经费科目名','分类号','领用人','经手人');
		$tmp=array(
				'table_open'=>'<table style="width:120%;text-align:center; border-collapse: collapse;">',
				'cell_alt_start' =>'<td style="border:1px #ccc solid;margin:0px;">',
				'cell_start' =>'<td style="border:1px #ccc solid;margin:0px;">'
			);
		$this->table->set_template($tmp);

		$this->load->view('page',$data);
		}
	}
}
?>