<?php

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
		parent::list_cate();
		parent::count_cart();
		parent::load_faq();
		parent::load_header();
		parent::load_yahoo();
		parent::about();
		parent::rand_image();
    }

    public function index() {
		$this->load->model('catehomemodel');
		$this->load->model('producthomemodel');
		$this->load->model('faqhomemodel');
		$this->data['list_product_random'] = $this->producthomemodel->list_random_product();
		$this->data['list_cate_home']=$this->catehomemodel->list_cate_home();
		$this->load->view('home/layout_home_index',$this->data);
    }

    public function check_email() {
        $this->load->model('users');
        $email = $this->input->post('email');
        $result = $this->users->get_user_by_email($email);
        if (empty($result)) {
            $data = array('error' => 1);
        } else {
            $data = array('error' => 0);
        }
        echo json_encode($data);
    }

    public function register() {
        $this->load->model('productmodel');
            $this->data['list_product_sale'] = $this->productmodel->get_list_product_sale_off();
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $full_name = $this->input->post('full_name');
            $password = $this->input->post('password');
            $sex = $this->input->post('radio');
            $birth_day = $this->input->post('birth_day');
            $address = $this->input->post('address');
            $phone = $this->input->post('mobi');
            $email = $this->input->post('email');
            $yahoo = $this->input->post('yahoo');
            $skype = $this->input->post('skype');
            $bank = $this->input->post('bank');
            $email_bank = $this->input->post('stk');
            $province = $this->input->post('province');
            $email_activation = $this->config->item('email_activation', 'tank_auth');
            if (!is_null($data = $this->tank_auth->create_user2($username, $email, $password, $full_name, $phone, $sex, $birth_day, $address, $yahoo, $skype, $bank, $email_bank, '4', $email_activation,0,$province))) {
                if ($email_activation) {
                    $data['site_name'] = $this->config->item('website_name', 'tank_auth');
                    $data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;
                    $this->_send_email('activate', $email, $email, $data, 'Đăng Ký Tài Khoản Thành Công');
                }
                
                $this->data['main_content'] = 'register_success';
                $this->load->view('home/layout_detail', $this->data);
            }

        } else {
            
            $this->data['main_content'] = 'register_ctv';
            $this->load->view('home/layout_detail', $this->data);
        }
    }

    function activate() {
        $this->load->model('productmodel');
        $this->data['list_product_sale'] = $this->productmodel->get_list_product_sale_off();
        $user_id = $this->uri->segment(2);
        $user_id = addslashes($user_id);
        $user_id = intval($user_id);
        $new_email_key = $this->uri->segment(3);
        $new_email_key = addslashes($new_email_key);
        // Activate user
        if ($this->tank_auth->activate_user($user_id, $new_email_key)) {
            if ($this->tank_auth->is_logged_in()) {
                $this->tank_auth->logout();
            }
            $this->data['main_content'] = 'active_success';
            $this->load->view('home/layout_detail', $this->data);
            //$this->_show_message($this->lang->line('auth_message_activation_completed') . ' ' . anchor('/home/auth/login/', 'Login'));
            
        } else {                                                                // fail
            $this->data['main_content'] = 'active_success';
            $this->load->view('home/layout_detail', $this->data);
        }
    }

    function _show_message($message) {
        $this->session->set_flashdata('message', $message);
        redirect('/');
    }

    
    private function _create_captcha() {
        $this->load->helper('captcha');
        $options = array('img_path' => PATH_FOLDER . ROT_DIR . '/captcha/', 'img_url' => base_url() . "captcha/", 'img_width' => '150', 'img_height' => '40', 'expiration' => 7200);
        $cap = create_captcha($options);
        $image = $cap['image'];
        $this->session->set_userdata('captchaword', $cap['word']);
        return $image;
    }

    public function check_captcha($string) {

        if ($string == $this->session->userdata('captchaword')) {
            return TRUE;
        } else {
            $this->form_validation->set_message('check_captcha', 'Wrong captcha code');
            return FALSE;
        }
    }
    public function check_captcha_ajax()
    {
        $captcha = $this->input->post('captcha');
        if($this->check_captcha($captcha))
        {
            $data = array('error'=>'0');
        }
        else
        {
            $data = array('error'=>'1');
        }
        echo json_encode($data);
    }
    public function create_captcha_ajax() {
        $this->load->helper('captcha');
        $options = array('img_path' => PATH_FOLDER . ROT_DIR . '/captcha/', 'img_url' => base_url() . "captcha/", 'img_width' => '150', 'img_height' => '40', 'expiration' => 7200);
        $cap = create_captcha($options);
        $image = $cap['image'];
        $this->session->set_userdata('captchaword', $cap['word']);
        $array = array('error'=>0,'img'=>$image);
        echo json_encode($array);
    }
    public function about()
    {
        $this->load->model('faq');
        $this->load->model('productmodel');
        $this->data['image']=$this->_create_captcha();
        $this->data['list_product_sale'] = $this->productmodel->get_list_product_sale_off();
        $this->data['about'] = $this->faq->about();
        $this->data['main_content'] = 'home_view/detail_about';
        $this->load->view('home/layout_detail', $this->data);
    }
    public function payment()
    {
    	$this->load->model('orderhomemodel');
    	$this->data['faq_detail'][0]['title'] = 'Hướng dẫn thanh toán';
    	$this->data['list_payment'] = $this->orderhomemodel->load_payment();
		$this->data['main_content']='thanh_toan_view';
		$this->load->view('home/layout_faq_detail',$this->data);
	}
	public function contact()
	{
		if($this->input->post())
		{
			
			$data_mail = array('email'=>$this->input->post('email'),'full_name'=>$this->input->post('fullname'),'phone'=>$this->input->post('phone'),'noi_dung'=>loaibohtmltrongvanban($this->input->post('noi_dung')));
			$this->_send_email('contact','tibimarthcm@gmail.com','tibimarthcm@gmail.com',$data_mail,'Liên hệ');
		}
		
		
			$this->data['title'] = 'Liên hệ';
			$this->data['gui_cau_hoi'] = 1;
			$this->data['contact_'] = 1;
			$this->data['main_content']='contact_view';
			$this->load->view('home/layout_contact',$this->data);
		
		
	}
	function _send_email($type, $to, $email, &$data, $title) {
        /*$this->load->library('email');*/
       // $this->load->library('maillinux');
        $this->load->library('mailer');
        $from = MAIL_ADMIN;
        $subject = $title;
        $messsage = $this->load->view('home/email/' . $type . '-html', $data, TRUE);
        //$this->maillinux->SendMail('tibimart@nhucauvieclam.net', $email, $subject, $messsage);
		$this->mailer->sendmail($email,$email,$subject,$messsage);
    }
}
?>