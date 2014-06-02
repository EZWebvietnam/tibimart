<?php
class Product extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('producthomemodel');
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
		if(!$this->input->post('cart'))
		{
			
			$product_detail = $this->producthomemodel->product_detail($id);
			if(empty($product_detail))
			{
				show_404();
				exit;
			}	
			$this->data['product_detail']=$product_detail;
			$this->load->view('home/layout_product_detail',$this->data);
		}
	}
}
?>