<?php
class Catehomemodel extends CI_Model
{
	private $_name ='cate_product';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function list_cate_nav()
	{
		$this->db->select();
		$query = $this->db->get("$this->_name");
		return $query->result_array();
	}
	public function list_cate_home()
	{
		$this->db->select();
		$this->db->where('show_home',1);
		$query = $this->db->get("$this->_name");
		return $query->result_array();
	}
}
?>