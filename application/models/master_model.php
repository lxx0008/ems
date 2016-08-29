<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Master_model extends CI_Model
 {
		public function __construct()
		{
			$this->load->database();
		}
		public function get_admin($id){
			$query=$this->db->get_where('user',array('UId' =>$id ));
			return $query->row_array();
		}
		public function get_admin_all(){
			$query=$this->db->get('user');
			return $query->result_array();
		}
		public function get_shebei($id){
			$sql="SELECT DISTINCT ".$id." from shebei where 现状 = '1'";
			$query=$this->db->query($sql);
			return $query->result_array();
		}
		public function update(){
			$data=array(
				'UId' =>$this->input->post('UId'),
				'UName'=>$this->input->post('UName'),
				'UPhone'=>$this->input->post('UPhone'),
				'UQQ'=>$this->input->post('UQQ'),
				'UEmail'=>$this->input->post('UEmail')
				);
			$query=$this->db->update('user',$data,array('UId'=>$data['UId']));
			if($query)
				return true;
			else
				return false;
		}
		public function insert(){
			$data=array(
				'UId' =>$this->input->post('new_id'),
				'UPw'=>md5($this->input->post('new_pw')),
				'power'=>$this->input->post('new_power')
				);
			$query=$this->db->insert('user',$data);
			if($query)
				return true;
			else
				return false;
		}
		public function check_new(){
			$data=array(
				'UId' =>$this->input->post('new_id'));
			$query=$this->db->get_where('user',$data);
			if($query)
				return true;
			else
				return false;
		}
 }
?>