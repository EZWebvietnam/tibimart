<?php
class Faqmodel extends CI_Model
{
    public  function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_faq($number,$offset)
    {
        $sql="SELECT * FROM faq LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_faq()
    {
        $sql="SELECT * FROM faq";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
    public function edit($id)
    {
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('faq');
        return $query->result_array();
    }
    public function update_faq($id,array $data)
    {
        $this->db->where('id',$id);
        $this->db->update('faq',$data);
    }
    public function delete($id)
    {
        $this->db->delete('faq',array('id'=>$id));
    }
    //Yahoo
    public function list_yahoo($number,$offset)
    {
		$sql = "SELECT * FROM support LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();
	}
	public function count_yahoo()
	{
		$sql = "SELECT * FROM support";
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
	 public function yahoo_detail($id)
    {
		$sql = "SELECT * FROM support WHERE id = ?";
		$query = $this->db->query($sql,array($id));
		return $query->result_array();
	}
	public function update_yahoo($id,array $data)
	{
		$this->db->where('id',$id);
		$this->db->update('support',$data);
	}
	public function insert_yahoo(array $data)
	{
		$this->db->insert('support',$data);
		return $this->db->insert_id();
	}
	public function delete_yahoo($id)
	{
		$this->db->delete('support',array('id'=>$id));
	}
}
?>