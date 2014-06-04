<?php
class Faqhomemodel extends CI_Model
{
	private $_name = 'faq';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function list_faq($number,$offset)
	{
		$number = intval($number);
		$offset = intval($offset);
		$sql="SELECT * FROM {$this->_name} WHERE answer <>'' LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();
	}
	public function count_list_faq()
	{
		$sql="SELECT * FROM {$this->_name} WHERE answer <>''";
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
}
?>