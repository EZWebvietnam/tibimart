<?php

class Product extends MY_Controller {

    public function __construct() {
        parent::__construct();
        parent::list_cate();
        parent::info_company();
        parent::load_clip();
        parent::load_header();
        parent::captcha_random();
        $this->load->library('session');
        $this->load->model('productmodel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
    }

    public function detail($id = null) {

        $id = explode('-', $id);
        $id = $id[0];
        if (empty($id)) {
            show_404();
            exit;
        }
        if (!is_numeric($id)) {
            show_404();
            exit;
        }
        $detail_product = $this->productmodel->product_detail($id);
        if (empty($detail_product)) {
            show_404();
            exit;
        }
        $this->data['list_clip'] = $this->productmodel->load_random_clip($id);
        $this->data['list_product_sale'] = $this->productmodel->get_list_product_sale_off();
        $this->data['product_detail'] = $detail_product;
        $this->data['main_content'] = 'product/detail_product';
        $this->data['image'] = $this->_create_captcha();
        $this->load->view('home/layout_detail', $this->data);
    }

    public function list_product() {
        $this->load->model('catemodel');
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(3);

        $config['per_page'] = 10;
        $config['total_rows'] = $this->productmodel->count_list_product_id_cate();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->productmodel->list_product_id_cate($config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list'] = $array_sv;
        $this->data['list_product_sale'] = $this->productmodel->get_list_product_sale_off();
        $this->data['image'] = $this->_create_captcha();
        //$this->data['main_content']='product/detail_product';
        $this->load->view('home/layout_list', $this->data);
    }

    public function add_to_cart() {
        if ($this->input->is_ajax_request()) {
            $id_product = $this->input->post('productid');
            $quantity = $this->input->post('quantity');
            $id_ref = base64_decode($this->input->post('id_ref'));
            $product_detail = $this->productmodel->product_detail($id_product);
            $ip_user = $_SERVER["REMOTE_ADDR"];
            if (!empty($product_detail)) {
                $product_sale_off_check = $this->productmodel->get_sale_off_product($id_product);
                if (!empty($product_sale_off_check)) {

                    $percent_and_cost = $product_sale_off_check[0]['percent'] * $product_detail[0]['cost'];
                    $price = $product_detail[0]['cost'] - ($percent_and_cost / 100);
                } else {
                    $price = $product_detail[0]['cost'];
                }
                if ($id_ref != 0) {
                    $comission = (($price * $product_detail[0]['comission']) / 100) * $quantity;
                } else {
                    $comission = 0;
                }
                $cart_detail = $this->productmodel->check_cart($ip_user, $id_product);
                $data_save = array(
                    'id_user' => $this->session->userdata('user_id'),
                    'id_product' => $id_product,
                    'quantity' => $quantity,
                    'price' => $price,
                    'commissions' => $comission,
                    'ip_user' => $ip_user,
                    'id_ref' => $id_ref,
                    'create_date' => strtotime('now')
                );
                if (empty($cart_detail)) {
                    $id = $this->productmodel->insert_cart($data_save);
                    if ($id > 0) {
                        $data = array('msg' => TRUE);
                    }
                } else {
                    $this->productmodel->update_cart($cart_detail[0]['id'], $data_save);
                    $data = array('msg' => TRUE);
                }
            }
            echo json_encode($data);
        }
    }

    public function ajax_show_cart() {
        if ($this->input->is_ajax_request()) {
            $ip_user = $_SERVER["REMOTE_ADDR"];
            $cart_list = $this->productmodel->load_cart($ip_user);
            $this->data['list_cart'] = $cart_list;
            $this->load->view('product/ajax_show_cart', $this->data);
        }
    }

    public function ajax_update_cart() {
        if ($this->input->is_ajax_request()) {
            $id_cart = $this->input->post('id_order_detail');
            $id_product = $this->input->post('id_product');
            $quantity = $this->input->post('quantity');
            $cart_detail = $this->productmodel->cart_detail($id_cart);
            $product_sale_off_check = $this->productmodel->get_sale_off_product($id_product);
            $product_detail = $this->productmodel->product_detail($id_product);
            if (!empty($product_sale_off_check)) {
                $percent_and_cost = $product_sale_off_check[0]['percent'] * $product_detail[0]['cost'];
                $price = $product_detail[0]['cost'] - ($percent_and_cost / 100);
            } else {
                $price = $product_detail[0]['cost'];
            }
            if ($cart_detail[0]['id_ref'] != 0) {
                $comission = (($price * $product_detail[0]['comission']) / 100) * $quantity;
            } else {
                $comission = 0;
            }
            $data_update_cart = array(
                'quantity'=>$quantity,
                'price'=>$quantity*$price,
                'commissions'=>$comission
            );
            $this->productmodel->update_cart($id_cart,$data_update_cart);
            echo json_encode(array('error'=>0));
        }
    }

    public function delete_from_cart() {
        if ($this->input->is_ajax_request()) {
            $id_product = $this->input->post('productid');
            $ip_user = $_SERVER["REMOTE_ADDR"];
            $cart_list = $this->productmodel->delete_from_cart($ip_user, $id_product);
            $data = array('msg' => TRUE);
            echo json_encode($data);
        }
    }

    public function delete_cart() {
        if ($this->input->is_ajax_request()) {
            $id_product = $this->input->post('productid');
            $ip_user = $_SERVER["REMOTE_ADDR"];
            $cart_list = $this->productmodel->delete_cart($ip_user);
            $data = array('msg' => TRUE);
            echo json_encode($data);
        }
    }

    public function check_out() {
        if ($this->input->is_ajax_request()) {
            $id = 0;
            $full_name = $this->input->post('realname');
            $address = $this->input->post('address');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $yahoo = $this->input->post('yahoo');
            $ip_user = $_SERVER["REMOTE_ADDR"];
            $data_insert = array('full_name' => $full_name,
                'address' => $address,
                'phone' => $phone,
                'email' => $email,
                'yahoo' => $yahoo,
                'create_date' => strtotime('now'),
                'id_ref' => 0
            );
            $id = $this->productmodel->insert_order($data_insert);

            if ($id > 0) {
                $cart = $this->productmodel->load_cart($ip_user);
                $price_nl = 0;
                foreach ($cart as $crt) {
                    $data_order_detail = array(
                        'id_user' => $crt['id_user'],
                        'id_product' => $crt['id_product'],
                        'quantity' => $crt['quantity'],
                        'price' => $crt['price'],
                        'commissions' => $crt['commissions'],
                        'ip_user' => $crt['ip_user'],
                        'id_ref' => $crt['id_ref'],
                        'order_id' => $id,
                        'status_money' => 0,
                        'create_date' => strtotime('now')
                    );
                    $data_order_detail_send_mail[] = array(
                        'id_user' => $crt['id_user'],
                        'id_product' => $crt['id_product'],
                        'quantity' => $crt['quantity'],
                        'price' => $crt['price'],
                        'commissions' => $crt['commissions'],
                        'ip_user' => $crt['ip_user'],
                        'id_ref' => $crt['id_ref'],
                        'order_id' => $id,
                        'status_money' => 0,
                        'create_date' => strtotime('now')
                    );
                    $data_mail = array('site_name' => 'Việt Mông Cổ', 'name' => $full_name, 'order_detail' => $data_order_detail_send_mail);
                    $price_nl += $crt['price'] * $crt['quantity'];
                    $this->productmodel->insert_order_detail($data_order_detail);
                }
                $this->_send_email('order', $email, $email, $data_mail, 'Chi tiet don dat hang');

                $image_nl = base_url() . 'template/ezwebvietnam/home/nganluong.png';
                $image_bk = base_url() . 'template/ezwebvietnam/home/baokim.png';
                $link_bank = base_url().'tin-tuc-26-huong-dan-thanh-toan';
                $this->load->library('nl');
                $url = base_url() . "home/member/ket_qua";
                $receiver = "nguyendinhhan7781@gmail.com";
                $transaction_info = '';
                $order_code = 'VMC-' . $id;
                $price = $price_nl;
                $url = $this->nl->buildCheckoutUrlExpand($url, $receiver, $transaction_info, $order_code, $price);

                $this->load->library('baokim');
                $order_id = 'VMC-' . $id;
                $business = 'nguyendinhhan7781@gmail.com';
                $total_amount = $price_nl;
                $shipping_fee = 0;
                $tax_fee = 0;
                $order_description = 0;
                $url_success = base_url() . "home/member/ket_qua";
                $url_cancel = base_url();
                $url_detail = base_url();
                $url_bk = $this->baokim->createRequestUrl($order_id, $business, $total_amount, $shipping_fee, $tax_fee, $order_description, $url_success, $url_cancel, $url_detail);
                $html = "<p><span style='color: rgb(51, 51, 51);'><span style='<p><span style='color: rgb(51, 51, 51);'><span style='Chúc mừng bạn đã đặt hàng thành công!</span></span></span></p>    <p><span style='color: rgb(51, 51, 51);'><span style='font-size: medium;'><span style='font-family: Arial;'>Chúng tôi đã gửi thông tin đơn hàng về Email của bạn và chúng tôi sẽ sớm liên hệ với bạn để xác minh đơn hàng và phục vụ bạn trong thời gian sớm nhất.</span></span></span></p>    <p><span style='color: rgb(51, 51, 51);'><span style='font-size: medium;'><span style='font-family: Arial;'>Bắt đầu từ giờ phút này bạn được tham gia vào nhóm Khách Hàng của Việt Mông Cổ trên Facebook&nbsp;để được thảo luận:</span></span></span></p>    <p><span style='color: rgb(51, 51, 51);'><span style='font-size: medium;'><span style='font-family: Arial;'>Bạn hãy xin tham gia nhóm tại link sau:&nbsp;</span></span></span><a target='__blank' href='https://www.facebook.com/groups/khachhangvietmongco/'><span style='font-size:16px;'>https://www.facebook.com/groups/khachhangvietmongco</span></a></p>    <p>-----------------</p>    <p><strong><span style='font-size:20px;'>Nếu đơn hàng của bạn phải thanh toán thì bạn hãy xem hướng dẫn sau:</span></strong></p>    <p><span style='color:#FF0000;'><span style='font-size:18px;'><strong>Có 4&nbsp;phương án để bạn thanh toán đơn hàng:</strong></span></span></p>    <p><span style='font-size:16px;'><strong>Cách thứ nhất:</strong> Thanh toán tiền mặt cho&nbsp;người giao hàng&nbsp;</span></p>    <p><span style='font-size:16px;'><strong>Cách thứ 2:</strong> Thanh toán tiền mặt tại văn phòng Việt Mông Cổ</span></p>    <p><span style='font-size:16px;'><strong>Cách thứ 3:</strong> Thanh toán&nbsp;chuyển khoản ngân hàng: Xem danh sách tài khoản&nbsp;<a target='_blank' href='$link_bank'>tại đây</a></span></p>    <p><span style='font-size:16px;'><strong>Cách thứ 4:</strong> Thanh toán qua <strong><span style='color:#FF0000;'>Ngân Lượng</span></strong> hay <strong><span style='color:#FF0000;'>Bảo Kim</span></strong> ở biểu tượng dưới đây:</span></p>
            <b>Thanh toán trực tuyến:</b><br><a href='$url' id='nganluong_link' target='_blank'><img src='$image_nl' alt='Nganluong'></a><a href='$url_bk' id='baokim_link' target='_blank'><img src='$image_bk' alt='Baokim'></a>";
                echo json_encode(array('html' => $html));
            }
        }
    }

    function _send_email($type, $to, $email, &$data, $title) {
        /* $this->load->library('email');
          $this->load->library('maillinux'); */
        $this->load->library('mailer');
        $from = MAIL_ADMIN;
        $subject = $title;
        $messsage = $this->load->view('email/' . $type . '-html', $data, TRUE);
        $this->mailer->sendmail($email, $email, $subject, $messsage);
    }

    public function faq_list() {
        $this->data['list_product_sale'] = $this->productmodel->get_list_product_sale_off();
        $this->load->model('faq');
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(3);
        $config['per_page'] = 10;
        $config['total_rows'] = $this->faq->count_faq();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->faq->list_faq($config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list'] = $array_sv;
        $this->data['image'] = $this->_create_captcha();
        $this->load->view('home/layout_faq', $this->data);
    }

    public function detail_faq($id) {
        $this->load->model('faq');
        $this->data['detail'] = $this->faq->faq_detail($id);
        $this->data['list_product_sale'] = $this->productmodel->get_list_product_sale_off();
        $this->data['main_content'] = 'product/detail_faq';
        $this->data['image'] = $this->_create_captcha();
        $this->load->view('home/layout_detail', $this->data);
    }

    public function send_faq() {
        $this->load->model('faq');
        if ($this->input->post()) {
            $title = $this->input->post('title');
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $content = stripslashes($this->input->post('content'));
            $data_insert = array(
                'title' => $title,
                'name' => $name,
                'email' => $email,
                'question' => $content,
                'status' => 0,
                'create_date' => strtotime('now')
            );
            $id = $this->faq->insert_faq($data_insert);
            if ($id > 0) {
                redirect('/hoi-dap');
            }
        } else {
            $this->data['list_product_sale'] = $this->productmodel->get_list_product_sale_off();
            $this->data['main_content'] = 'product/faq_send';
            $this->load->view('home/layout_detail', $this->data);
        }
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

    public function check_captcha_ajax() {
        $captcha = $this->input->post('captcha');
        if ($this->check_captcha($captcha)) {
            $data = array('error' => '0');
        } else {
            $data = array('error' => '1');
        }
        echo json_encode($data);
    }

    public function create_captcha_ajax() {
        $this->load->helper('captcha');
        $options = array('img_path' => PATH_FOLDER . ROT_DIR . '/captcha/', 'img_url' => base_url() . "captcha/", 'img_width' => '150', 'img_height' => '40', 'expiration' => 7200);
        $cap = create_captcha($options);
        $image = $cap['image'];
        $this->session->set_userdata('captchaword', $cap['word']);
        $array = array('error' => 0, 'img' => $image);
        echo json_encode($array);
    }
    public function signupbook()
    {
        $mail = $this->input->post('useremail');
        $real_name = $this->input->post('userrealname');
        $phone = $this->input->post('userphone');
        $data = $this->productmodel->random_mail_book();
        $data_save = array('full_name'=>$real_name,'email'=>$mail,'phone'=>$phone);
        $this->productmodel->insert_data_recei_book($data_save);
        $title = 'Mail nhận sách';
        if(!empty($data))
        {
            $this->_send_email_book($real_name,$mail,$data[0]['content'],$title);
        }
    }
    function _send_email_book($to_name, $email, $messsage,$title) {
        /* $this->load->library('email');
          $this->load->library('maillinux'); */
        $this->load->library('mailer');
        $from = MAIL_ADMIN;
        $subject = $title;
        $this->mailer->sendmail($email, $to_name, $subject, $messsage);
    }
}
?>