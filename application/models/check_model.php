<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Check_model extends CI_Model
 {
		public function __construct()
		{
			$this->load->database();
		}
		public function check()
		{
		$query = $this->db->get_where('user',array('UId'=>$this->input->post('user_id'),'UPw'=>md5($this->input->post('pw'))));
		
		if($query->num_rows == 1)
			return true;
		else
			return false;
		}
		public function u_name()
		{
			$this->db->select('UName,power');
			$query = $this->db->get_where('user',array('UId'=>$this->input->post('user_id')));
			return $query->row_array();
		}
 }
?>