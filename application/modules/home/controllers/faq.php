<?php
class Faq extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		parent::list_cate();
		parent::count_cart();
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
}
?>