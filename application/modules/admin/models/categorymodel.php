<?php
class Categorymodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_category()
    {
        $sql="SELECT * FROM cate_product";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	public function load_cate($number, $offset) {
        $sql = "SELECT * FROM cate_product LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function count_cate() {
        $sql = "SELECT * FROM cate_product";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
	public function delete_cate($id) {
        $this->db->delete('cate_product', array('id_cate' => $id));
    }
	public function add(array $data)
	{
		$this->db->insert('cate_product',$data);
		return $this->db->insert_id();
	}
	public function edit($id,array $data);
	{
		$this->db->where('id_cate',$id);
		$this->db->update('cate_product',$data);
	}
}
?>