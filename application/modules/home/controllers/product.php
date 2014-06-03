<?php
class Product extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('producthomemodel');
		$this->load->model('cartmodel');
		parent::list_cate();
		parent::count_cart();
	}
	public function product_detail($id = null)
	{
		//print_r($_POST);exit;	
		if(empty($id))
		{
			show_404();
			exit;
		}
		$id = explode('-',$id);
		$id = $id[0];
		if(!is_numeric($id))
		{
			show_404();
			exit;
		}
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip = $_SERVER['HTTP_CLIENT_IP'];
			}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}else{
				$ip = $_SERVER['REMOTE_ADDR'];
			}
		if(!$this->input->post('cart'))
		{
			
			$product_detail = $this->producthomemodel->product_detail($id);
			if(empty($product_detail))
			{
				show_404();
				exit;
			}	
			
			$this->data['product_detail']=$product_detail;
			$this->data['list_product_cate']=$this->producthomemodel->list_product_by_cate_detail($product_detail[0]['id_cate']);
			$this->load->view('home/layout_product_detail',$this->data);
		}
		else
		{
			$id_product = $this->input->post('id_product');
			$quantity =  $this->input->post('quantity');
			$product_detail = $this->producthomemodel->product_detail($id_product);
			if(empty($product_detail))
			{
				show_404();
				exit;
			}	
			$price = $product_detail[0]['price'];
			$total_price = $quantity*$product_detail[0]['price'];
			
			$cart_detail = $this->cartmodel->check_cart($ip,$id_product);
			if(empty($cart_detail))
			{
				$data_save = array('id_product'=>$id_product,'quantity'=>$quantity,'price'=>$price,'total_price'=>$total_price,'ip'=>$ip,'create_date'=>strtotime('now'));
				$this->cartmodel->add_to_cart($data_save);
			}
			else
			{
				$data_save = array('id_product'=>$id_product,'quantity'=>$quantity,'price'=>$price,'total_price'=>$total_price,'ip'=>$ip,'create_date'=>strtotime('now'));
				$this->cartmodel->update_cart($cart_detail[0]['id'],$data_save);
			}
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function list_product($id_cate)
	{
		$this->load->model('catehomemodel');
		if(empty($id_cate))
		{
			show_404();
			exit;
		}
		$id_cate = explode('-',$id_cate);
		$id_cate = $id_cate[0];
		if(!is_numeric($id_cate))
		{
			show_404();
			exit;
		}
		$this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(5);
        $config['per_page'] = 12;
		$this->data['cate_detail']=$this->catehomemodel->cate_detail($id_cate);
        $config['total_rows'] = $this->producthomemodel->count_product_list($id_cate);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->producthomemodel->list_product_list($id_cate,$config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list'] = $array_sv;
        $this->load->view('home/layout_list_product',$this->data);
	}
	public function cart()
	{
		$this->load->model('cartmodel');
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip = $_SERVER['HTTP_CLIENT_IP'];
			}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}else{
				$ip = $_SERVER['REMOTE_ADDR'];
			}
		$list_cart = $this->cartmodel->list_cart_ip($ip);
		$this->data['list_cart'] = $list_cart;
		$this->load->view('home/layout_cart',$this->data);
	}
	public function ajax_delete_cart()
	{
		$id_cart = $this->input->post('id_cart');
		$this->load->model('cartmodel');
		$this->cartmodel->delete_cart($id_cart);
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip = $_SERVER['HTTP_CLIENT_IP'];
			}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}else{
				$ip = $_SERVER['REMOTE_ADDR'];
			}
		$list_cart = $this->cartmodel->list_cart_ip($ip);
		$this->data['list_cart'] = $list_cart;
		$this->load->view('ajax_cart',$this->data);
	}
	public function ajax_update_cart()
	{
		$quantity = $this->input->post('quantity');
		$id_cart = $this->input->post('id_cart');
		$this->load->model('cartmodel');
		$cart_detail = $this->cartmodel->check_cart_id($id_cart);
		if(empty($cart_detail))
		{
			show_404();exit;	
		}
		else
		{
			$price = $cart_detail[0]['price'];
			$total_price = $price*$quantity;
			$data_save = array('quantity'=>$quantity,'total_price'=>$total_price);
			$this->cartmodel->update_cart($id_cart,$data_save);
		}
		
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip = $_SERVER['HTTP_CLIENT_IP'];
			}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}else{
				$ip = $_SERVER['REMOTE_ADDR'];
			}
		$list_cart = $this->cartmodel->list_cart_ip($ip);
		$this->data['list_cart'] = $list_cart;
		$this->load->view('ajax_cart',$this->data);
	}
	public function checkout()
	{
		if($this->input->post())
		{
			$lat ="10.771101";
			$long = "106.693066";
			$dis = distance($this->input->post('lat'),$this->input->post('lng'),$lat,$long,'K');
			$total_fee = 0;
			if($dis > 5)
			{
				$new_dis = $dis-5;
				$fee = 5000;
				$total_fee = round($new_dis * $fee);
			}
			echo $dis.'<br>'.$total_fee;exit;
		}
		$this->load->view('home/layout_check_out',$this->data);
	}
}
?>