<?php

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
        parent::list_cate();
        parent::info_company();
        parent::load_clip();
        parent::load_header();
        parent::list_province();
        parent::captcha_random();
        $this->load->model('productmodel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
    }

    public function index() {
        /*$this->data['clip_top'] = $this->productmodel->load_top_clip();
        $this->data['list_clip_right'] = $this->productmodel->load_top_right();
        $this->data['list_product'] = $this->productmodel->list_product_home();
        $this->data['main_content'] = 'home_view/home';
        $this->load->view('home/layout_home', $this->data);*/
        $this->data['clip_top'] = $this->productmodel->load_top_clip();
        $detail_product = $this->productmodel->product_detail(1);
        $this->data['image']=$this->_create_captcha();
        $this->data['main_content']='home_view/detail_home';
        $this->data['product_detail']=$detail_product;
        $this->load->view('home/layout_home',$this->data);
    }

    public function contact() {
        if ($this->input->post()) {
            $full_name = $this->input->post('full_name');
            $email = $this->input->post('email');
            $content = $this->input->post('noi_dung');
            if ($full_name != '' && $email != '' && $content != '') {
                $data_save = array();
                $data_save = array('full_name' => $full_name, 'email' => $email, 'noi_dung' => $content);
                $this->load->model('faq');
                $id = $this->faq->insert_contact($data_save);
                if ($id > 0) {
                    redirect('..' . ROT_DIR);
                }
            }
        } else {
            $this->load->model('productmodel');
            $this->data['image']=$this->_create_captcha();
            $this->data['list_product_sale'] = $this->productmodel->get_list_product_sale_off();
            $this->data['main_content'] = 'home_view/contact';
            $this->load->view('home/layout_detail', $this->data);
        }
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

    function _send_email($type, $to, $email, &$data, $title) {
        /*$this->load->library('email');
        $this->load->library('maillinux');*/
        $this->load->library('mailer');
        $from = MAIL_ADMIN;
        $subject = $title;
        $messsage = $this->load->view('email/' . $type . '-html', $data, TRUE);
        $this->mailer->sendmail($email, $email, $subject, $messsage);
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
}
?>