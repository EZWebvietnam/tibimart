<?php
class Aboutmodel extends CI_Model
{
	private $_name ="gioi_thieu";
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }	
	public function load_club($number, $offset) {
        $sql = "SELECT * FROM {$this->_name} LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_club() {
        $sql = "SELECT * FROM {$this->_name}";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
	public function club_detail($id)
	{
		$sql = "SELECT * FROM {$this->_name} WHERE id_gioithieu = ?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
	}
	public function edit($id,array $data)
	{
		$this->db->where('id_gioithieu',$id);
		$this->db->update("{$this->_name}",$data);
	}
}
?>