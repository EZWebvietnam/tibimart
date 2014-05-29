<?php
class Newshomemodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_new($number,$offset)
    {
        $sql="SELECT * FROM news LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_new()
    {
        $sql="SELECT * FROM news";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
    public function detail($id)
    {
         $sql="SELECT * FROM news WHERE id = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>
