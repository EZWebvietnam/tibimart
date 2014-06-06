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
		$this->db->limit('8');
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
	public function list_product_list_all($number,$offset)
	{
		$number = intval($number);
		$offset = intval($offset);
		$sql="SELECT * FROM {$this->_name} LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();
	}
	public function count_product_list_all()
	{
		$sql="SELECT * FROM {$this->_name}";
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
	public function get_sale_off_product($id)
    {
        $id = intval($id);
        $sql ="SELECT * FROM sale_off WHERE id_product = $id AND exp_date >= now();";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	public function get_sale_off_product_()
    {
        $sql="SELECT * FROM {$this->_name} ORDER BY rand() LIMIT 4";
		$query = $this->db->query($sql);
		return $query->result_array();
    }
	public function list_sale()
	{		 
        $sql ="SELECT * FROM sale_off";
        $query = $this->db->query($sql);
        return $query->result_array();
	}
	public function detail_sale($id)
	{		
		$id = intval($id); 
        $sql ="SELECT * FROM sale_off WHERE id = ?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
	}
}
?>