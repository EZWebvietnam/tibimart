<?php
class Faq extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_faq($number,$offset)
    {
        $sql ="SELECT * FROM faq ORDER BY status DESC LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_faq()
    {
        $sql ="SELECT * FROM faq";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
    public function faq_detail($id)
    {
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('faq');
        return $query->result_array();
    }
    public function insert_faq(array $data)
    {
        $this->db->insert('faq',$data);
        return $this->db->insert_id();
    }
    public function insert_contact(array $data)
    {
        $this->db->insert('contact',$data);
        return $this->db->insert_id();
    }
    public function info_com()
    {
        $sql ="SELECT * FROM info_company";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function about()
    {
        $sql ="SELECT * FROM about WHERE id = 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>
