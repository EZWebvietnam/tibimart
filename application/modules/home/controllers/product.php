<?php
class Product extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('producthomemodel');
		$this->load->model('cartmodel');
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
}
?>