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
	public function list_product_by_cate_detail($id_cate)
	{
		$id_cate = intval($id_cate);
		$this->db->select();
		$this->db->where('id_cate',$id_cate);
		$this->db->order_by('rand()');
		$this->db->limit('4');
		$query = $this->db->get("{$this->_name}");
		return $query->result_array();
	}
	public function product_detail($id)
	{
		$id = intval($id);
		$this->db->select();
		$this->db->where('id_product',$id);
		$query = $this->db->get("{$this->_name}");
		return $query->result_array();
	}
	public function list_product_list($id_cate,$number,$offset)
	{
		$id_cate = intval($id_cate);
		$number = intval($number);
		$offset = intval($offset);
		$sql="SELECT * FROM {$this->_name} WHERE id_cate = ? LIMIT ?,?";
		$query = $this->db->query($sql,array($id_cate,$offset,$number));
		return $query->result_array();
	}
	public function count_product_list($id_cate)
	{
		$id_cate = intval($id_cate);
		$sql="SELECT * FROM {$this->_name} WHERE id_cate = ?";
		$query = $this->db->query($sql,array($id_cate));
		return count($query->result_array());
	}
}
?>