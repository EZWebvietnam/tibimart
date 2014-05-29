<?php 
class Productmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function load_top_clip()
    {
        $sql ="SELECT * FROM clip_marketing INNER JOIN product ON product.id_product = clip_marketing.id_product AND clip_marketing.id_product = 1 ORDER BY rand() LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function load_top_right()
    {
        $sql ="SELECT * FROM clip_marketing INNER JOIN product ON product.id_product = clip_marketing.id_product ORDER BY rand() LIMIT 6";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function list_product_home()
    {
        $sql ="SELECT * FROM product INNER JOIN cate_product ON cate_product.id_cate = product.id_cate";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function product_detail($id)
    {
        $id = intval($id);
         $sql ="SELECT * FROM product  WHERE id_product = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function list_product_id_cate($number,$offset)
    {
        //$id = intval($id);
        $number = intval($number);
        $offset = intval($offset);
        $sql ="SELECT * FROM product WHERE id_product NOT IN(1) LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_list_product_id_cate()
    {
        $sql ="SELECT * FROM product WHERE id_product NOT IN(1)";
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
    public function get_list_product_sale_off()
    {
         $sql ="SELECT * FROM sale_off INNER JOIN product ON sale_off.id_product = product.id_product AND sale_off.exp_date >=now()  ORDER BY rand() LIMIT 2";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function insert_cart(array $data)
    {
        $this->db->insert('cart',$data);
        return $this->db->insert_id();
    }
    public function update_cart($id,array $data)
    {
        $this->db->where('id',$id);
        $this->db->update('cart',$data);
       
    }
    public function check_cart($ip_user,$id_product)
    {
        $sql = "SELECT * FROM cart WHERE ip_user = '$ip_user' AND id_product = $id_product";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function load_cart($ip_user)
    {
        $sql = "SELECT *,cart.id as id_cart FROM cart INNER JOIN product ON product.id_product = cart.id_product WHERE ip_user = '$ip_user'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function cart_detail($id_cart)
    {
        $sql = "SELECT * FROM cart  WHERE id = $id_cart";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
   
    public function delete_from_cart($ip_user,$id_product)
    {
        $this->db->delete('cart',array('ip_user'=>$ip_user,'id_product'=>$id_product));
    }
    public function delete_cart($ip_user)
    {
        $this->db->delete('cart',array('ip_user'=>$ip_user));
    }
    public function insert_order(array $data)
    {
        $this->db->insert('order_customer',$data);
        return $this->db->insert_id();
    }
    public function insert_order_detail(array $data)
    {
        $this->db->insert('order_detail',$data);
        return $this->db->insert_id();
    }
    public function load_clip()
    {
        $sql="SELECT * FROM clip_marketing ORDER BY rand() LIMIT 8";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_order_product($id)
    {
        $sql="SELECT * FROM order_detail WHERE id_product = $id";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
    public function load_random_clip($id)
    {
        $sql="SELECT * FROM clip_marketing WHERE id_product = $id ORDER BY rand() LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function random_mail_book()
    {
        $sql="SELECT * FROM mail_book ORDER BY rand() LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function insert_data_recei_book(array $data)
    {
        $this->db->insert('mail_book_customer',$data);
    }
    public function random_captcha()
    {
        $sql="SELECT * FROM captcha_question ORDER BY rand() LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>