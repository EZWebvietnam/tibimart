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
		parent::load_faq();
		parent::load_header();
		parent::load_yahoo();
		parent::about();
	}
	public function product_detail($id = null)
	{
		
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
		}
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
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
			
			$this->data['header']['title'] = $product_detail[0]['title'].'-Tibimart.com';
			$this->data['product_detail'] = $product_detail;
			$this->data['main_content'] = 'detail_product_view';
			$this->load->view('home/layout_product_detail',$this->data);
		}
		else
		{
			$id_product     = $this->input->post('id_product');
			$quantity       = $this->input->post('quantity');
			$product_detail = $this->producthomemodel->product_detail($id_product);
			if(empty($product_detail))
			{
				show_404();
				exit;
			}
			$price_sale = $this->producthomemodel->get_sale_off_product($id_product);
			$price      = 0;
			if(empty($price_sale))
			{
				$price = $product_detail[0]['price'];
			}
			else
			{
				$price = ($product_detail[0]['price'] - $product_detail[0]['price'] * ($price_sale[0]['percent'] / 100));
			}
			$total_price = $quantity * $price;
			$cart_detail = $this->cartmodel->check_cart($ip,$id_product);
			if(empty($cart_detail))
			{
				$data_save = array('id_product' =>$id_product,'quantity'   =>$quantity,'price'      =>$price,'total_price'=>$total_price,'ip'         =>$ip,'create_date'=>strtotime('now'));
				$this->cartmodel->add_to_cart($data_save);
			}
			else
			{
				$data_save = array('id_product' =>$id_product,'quantity'   =>$quantity,'price'      =>$price,'total_price'=>$total_price,'ip'         =>$ip,'create_date'=>strtotime('now'));
				$this->cartmodel->update_cart($cart_detail[0]['id'],$data_save);
			}
			//redirect($_SERVER['HTTP_REFERER']);
			redirect(base_url().'thanh-toan');
		}
	}
	public function list_product($id_cate = null)
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
		$this->data['cate_detail_'] = $this->catehomemodel->cate_detail($id_cate);
		$config['total_rows'] = $this->producthomemodel->count_product_list($id_cate);
		if($page == ''){
			$page = 1;
		}
		$page1 = ($page - 1) * $config['per_page'];
		if(!is_numeric($page)){
			show_404();
			exit;
		}
		$num_pages = ceil($config['total_rows'] / $config['per_page']);
		$array_sv  = $this->producthomemodel->list_product_list($id_cate,$config['per_page'], $page1);
		$this->data['header']['title'] = $this->data['cate_detail_'][0]['title'].'- Tibimart.com';
		$this->data['total_page'] = $num_pages;
		$this->data['offset'] = $page1;
		$this->data['page'] = $page;
		$this->data['total'] = $config['total_rows'];
		$this->data['list'] = $array_sv;
		$this->load->view('home/layout_list_product',$this->data);
	}
	
	public function list_product_all()
	{

		$this->load->helper('url');
		$config['uri_segment'] = 5;
		$page = $this->uri->segment(3);
		$config['per_page'] = 12;
		$this->data['cate_detail_'][0]['title'] = 'Sản phẩm';
		$config['total_rows'] = $this->producthomemodel->count_product_list_all();
		if($page == ''){
			$page = 1;
		}
		$page1 = ($page - 1) * $config['per_page'];
		if(!is_numeric($page)){
			show_404();
			exit;
		}
		$num_pages = ceil($config['total_rows'] / $config['per_page']);
		$array_sv  = $this->producthomemodel->list_product_list_all($config['per_page'], $page1);
		$this->data['header']['title'] = 'Sản phẩm - Tibimart.com';
		$this->data['total_page'] = $num_pages;
		$this->data['offset'] = $page1;
		$this->data['page'] = $page;
		$this->data['total'] = $config['total_rows'];
		$this->data['list'] = $array_sv;
		$this->load->view('home/layout_list_product',$this->data);
	}
	public function list_product_search()
	{
		$key = $_GET['key'];
		$this->load->helper('url');
		$config['uri_segment'] = 5;
		$page = $this->uri->segment(3);
		$config['per_page'] = 12;
		$this->data['cate_detail_'][0]['title'] = 'Tìm kiếm';
		$config['total_rows'] = $this->producthomemodel->count_product_list_search($key);
		if($page == ''){
			$page = 1;
		}
		$page1 = ($page - 1) * $config['per_page'];
		if(!is_numeric($page)){
			show_404();
			exit;
		}
		$num_pages = ceil($config['total_rows'] / $config['per_page']);
		$array_sv  = $this->producthomemodel->list_product_list_search($key,$config['per_page'], $page1);
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
		}
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
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
		}
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		$list_cart = $this->cartmodel->list_cart_ip($ip);
		$this->data['list_cart'] = $list_cart;
		$this->load->view('ajax_cart',$this->data);
	}
	public function ajax_update_cart()
	{
		$quantity    = $this->input->post('quantity');
		$id_cart     = $this->input->post('id_cart');
		$this->load->model('cartmodel');
		$cart_detail = $this->cartmodel->check_cart_id($id_cart);
		if(empty($cart_detail))
		{
			show_404();exit;
		}
		else
		{
			$product_detail = $this->producthomemodel->product_detail($cart_detail[0]['id_product']);
			$price_sale = $this->producthomemodel->get_sale_off_product($cart_detail[0]['id_product']);
			$price      = 0;
			if(empty($price_sale))
			{
				$price = $cart_detail[0]['price'];
			}
			else
			{
				$price = ($product_detail[0]['price'] - $product_detail[0]['price'] * ($price_sale[0]['percent'] / 100));
			}		
			$total_price = $price * $quantity;
			$data_save   = array('quantity'   =>$quantity,'total_price'=>$total_price);
			$this->cartmodel->update_cart($id_cart,$data_save);
		}

		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		$list_cart = $this->cartmodel->list_cart_ip($ip);
		$this->data['list_cart'] = $list_cart;
		$this->load->view('ajax_cart',$this->data);
	}
	public function checkout()
	{

		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		$list_cart = $this->cartmodel->list_cart_ip($ip);
		if(empty($list_cart))
		{
			redirect('../'.ROT_DIR);
		}
		if($this->input->post())
		{
			$this->load->model('orderhomemodel');
			$ship_type = $this->input->post('radio');
			$email     = $this->input->post('email');
			$fullname  = $this->input->post('fullname');
			$phone     = $this->input->post('phone');
			$address   = $this->input->post('address');
			$lat       = LAT;
			$long      = LONG;
			$dis       = distance($this->input->post('lat'),$this->input->post('lng'),$lat,$long,'K');
			$total_fee = 0;
			if($ship_type == 1)
			{
				if($dis > 5)
				{
					$new_dis   = $dis - 5;
					$fee       = 5000;
					$total_fee = round($new_dis * $fee);
				}
			}
			$total_money_cart = 0;
			foreach($list_cart as $value)
			{
				$total_money_cart += $value['total_price'];
			}
			
			//$total_money_cart = $total_money_cart + $total_fee;
			$data_insert      = array('full_name'        =>$fullname,'address'          =>$address,'phone'            =>$phone,'email'            =>$email,'status'           =>0,'fee_ship'         =>$total_fee,'ship_type'        =>$ship_type,'create_date'      =>strtotime('now'),'total_price_order'=>$total_money_cart);
			$id_order = $this->orderhomemodel->insert_order($data_insert);
			foreach($list_cart as $value)
			{
				$data_save_order_detail = array('id_product' =>$value['id_product'],'quantity'   =>$value['quantity'],'price'      =>$value['price'],'ip_user'    =>$ip,'order_id'   =>$id_order,'create_date'=>strtotime('now'));
				$this->orderhomemodel->insert_order_detail($data_save_order_detail);
				$data_save_order_detail = array();
			}
			
			$this->_send_email('order','tibimarthcm@gmail.com','tibimarthcm@gmail.com',$data_insert,'Thông tin đơn hàng');
			
			$this->cartmodel->delete_cart_ip($ip);
			
			redirect('../'.ROT_DIR);
		}
		$this->data['title'] = 'Thông tin đặt hàng';
		$this->data['gui_cau_hoi'] = 0;
		$this->data['main_content'] = 'checkout';
		$this->load->view('home/layout_product_detail',$this->data);
	}
	public function direction()
	{
		$lat_ = LAT;
		$long = LONG;
		$lng = $this->input->get('lng');
		$lat = $this->input->get('lat');
		$dis       = distance($lat_,$long,$lat,$lng,'K');
		if($dis < 5)
		{
			$fee_ship = 0;
		}
		else
		{
			$fee_ship = ($dis - 5) * 5000;
		}
		$data= array('lat_di'  =>$lat,'long_di' =>$lng,'lat_den' =>$lat_,'long_den'=>$long,'distance'=>$dis,'fee_ship'=>$fee_ship);
		$this->data['data'] = $data;
		$this->load->view('map_view',$this->data);
	}
	public function sale_detail($id)
	{
		$detail_sale = $this->producthomemodel->detail_sale($id);
		$this->data['detail_sale'] = $detail_sale;
		$this->data['faq_detail'][0]['title'] = $detail_sale[0]['title'];
		$this->data['header']['title'] = $detail_sale[0]['title'].'-Tibimart.com';
		$this->data['main_content'] = 'sale_detail';
		$this->load->view('home/layout_product_detail',$this->data);
	}
	function _send_email($type, $to, $email, &$data, $title) {
        /*$this->load->library('email');*/
        //$this->load->library('maillinux');
       $this->load->library('mailer');
        $from = MAIL_ADMIN;
        $subject = $title;
        $messsage = $this->load->view('home/email/' . $type . '-html', $data, TRUE);
       $this->mailer->sendmail($email,$email,$subject,$messsage);
    }
}
?>