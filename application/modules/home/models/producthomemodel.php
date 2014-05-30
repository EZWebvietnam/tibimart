<?php
class Producthomemodel extends CI_Model
{
	private $_name = 'product';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function list_product_by_cate_home($id_cate)
	{
		$id_cate = intval($id_cate);
		$this->db->select();
		$this->db->where('id_cate',$id_cate);
		$this->db->order_by('rand()');
		$this->db->limit('12');
		$query = $this->db->get("{$this->_name}");
		return $query->result_array();
	}
}
?>