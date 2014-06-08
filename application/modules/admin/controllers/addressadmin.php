<?php
class Addressadmin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('faqmodel');
	}
	public function address()
	{
		$this->data['addressseting']=$this->faqmodel->list_address();
		$this->load->view('address/ajax_admin_address',$this->data);
	}
	public function edit($id = null)
	{
		if($this->input->post())
		{
			$address = $this->input->post('address');
			$phone = $this->input->post('phone');
			$data_save = array('address'=>$address,'phone'=>$phone);
			$this->faqmodel->edit_address($id,$data_save);
			echo json_encode(array('error'=>'0','msg'=>'Update thành công'));
		}
		else
		{
			$this->data['address_detail']=$this->faqmodel->detail_address($id);	
			$this->load->view('address/ajax_admin_edit_address',$this->data);
		}	
	}
}
?>