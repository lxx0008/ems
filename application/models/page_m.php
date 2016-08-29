<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	 class Page_m extends CI_Model
	 {
	 	public function __construct()
		{
			$this->load->database();
		}
		function get_shebei($per_page,$offset,$c_id,$c)//获取设备信息,仪器自编分类
		{
			$this->db->select('设备编号,领用单位名,仪器名称,型号,规格,单价,厂家,购置日期,现状名,经费科目名,分类号,领用人,经手人');
			$this->db->order_by('分类号,设备编号','asc');
			if($c_id=='现状')
				$query=$this->db->get_where('shebei',array('现状'=>$c),$per_page,$offset);
			else
				$query=$this->db->get_where('shebei',array($c_id=>$c,'现状'=>'1'),$per_page,$offset);
			return $query->result_array();
		}
		function get_shebei_0($per_page,$offset,$s_1,$s_1_t,$s_2,$s_2_t)//获取设备信息,自定义查询
		{
			$this->db->select('设备编号,领用单位名,仪器名称,型号,规格,单价,厂家,购置日期,现状名,经费科目名,分类号,领用人,经手人');
			$this->db->order_by('分类号,设备编号','asc');
			if($s_1_t=="0")
					$query=$this->db->get_where('shebei',array($s_2=>$s_2_t,'现状'=>'1'),$per_page,$offset);
			else if($s_2_t=="0")
				$query=$this->db->get_where('shebei',array($s_1=>$s_1_t,'现状'=>'1'),$per_page,$offset);
			else
				$query=$this->db->get_where('shebei',array($s_1=>$s_1_t,$s_2=>$s_2_t,'现状'=>'1'),$per_page,$offset);
			return $query->result_array();
		}
		function totle($s_1,$s_1_t)
		{
			$this->db->select('领用单位名');
			$query=$this->db->get_where('shebei',array($s_1=>$s_1_t));
			return $query->num_rows();
		}
		function totle_0($s_1,$s_1_t,$s_2,$s_2_t)
		{
			if($s_1_t=="0")
				$sql = "select * from shebei where ".$s_2." = '".$s_2_t."'";
			else if($s_2_t=="0")
				$sql = "select * from shebei where ".$s_1." = '".$s_1_t."'";
			else
				$sql = "select * from shebei where ".$s_2." = '".$s_2_t."' and ".$s_1."= '".$s_1_t."'";
			$query=$this->db->query($sql);
			return $query->num_rows();
		}
		function get_detail($c)
		{
			$query=$this->db->get_where('shebei',array('设备编号'=>$c));
			return $query->row_array();
		}
	 }
 ?>