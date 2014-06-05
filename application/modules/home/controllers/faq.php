<?php
class Faq extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		parent::list_cate();
		parent::count_cart();
		parent::load_faq();
		parent::load_header();
		$this->load->model('faqhomemodel');
	}
	public function list_faq()
	{
		$this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(5);
        $config['per_page'] = 12;
        $config['total_rows'] = $this->faqhomemodel->count_list_faq();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->faqhomemodel->list_faq($config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list'] = $array_sv;
		 $this->load->view('home/layout_faq',$this->data);
	}
	public function faq_detail($id = null)
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
			show_404();exit;
		}
		$faq_detail = $this->faqhomemodel->faq_detail($id);
		$this->data['faq_detail'] = $faq_detail;
		$this->load->view('home/layout_faq_detail',$this->data);
	}
	public function faq_post()
	{
		if($this->input->post())
		{
			$email = $this->input->post('email');
			$fullname = $this->input->post('fullname');
			$title = $this->input->post('title');
			$noi_dung = $this->input->post('noi_dung');
			$data_save = array('name'=>$fullname,'title'=>$title,'email'=>$email,'question'=>$noi_dung,'status'=>0,'create_date'=>strtotime('now'));
			$this->faqhomemodel->insert($data_save);
		}
		
			$this->data['title']='Gửi câu hỏi';
			$this->data['gui_cau_hoi'] = 1;
			$this->data['main_content']='postfaq';
			$this->load->view('home/layout_check_out',$this->data);
		
	}
}
?>