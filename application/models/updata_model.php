<?php
	class Updata_model extends CI_model{
		public function __construct()
		{
			$this->load->database();
		}
		//查询报废仪器的信息
		public function bf_info()
		{			
			$this->db->select('设备编号,申请人,申请时间');
			$this->db->order_by('设备编号 asc');
			$query=$this->db->get_where('repair',array('申请事件'=>'报废','申请状态'=>'1'));
			return $query->result_array();
		}
		//查询报修仪器的信息
		public function bx_info()
		{
			$this->db->select('设备编号,申请人,申请时间');
			$this->db->order_by('设备编号 asc');
			$query=$this->db->get_where('repair',array('申请事件'=>'报修','申请状态'=>'1'));
			return $query->result_array();
		}
		//查询正在维修仪器的信息
		public function wx_info()
		{
			$this->db->select('设备编号,仪器名称,型号,现状');
			$this->db->order_by('设备编号 asc');
			$query=$this->db->get_where('shebei',array('现状'=>'2'));
			return $query->result_array();
		}
	}
?>