<?php
class Abouthomemodel extends CI_Model
{
	private $_name = "gioi_thieu";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();	
	}	
	public function get_about($id_about)
	{
		$sql="SELECT * FROM {$this->_name} WHERE id_gioithieu = ?";
		$query = $this->db->query($sql,array($id_about));
		return $query->result_array();
	}
}
?>