
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo $header['title'] ?></title>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <meta name="Author" content="<?php echo $header['author'] ?>" />
        <meta name="Publisher" content="<?php echo $header['publisher'] ?>" />
        <meta name="Copyright" content="<?php echo $header['copyright'] ?>" />
        <meta name="robots" content="<?php echo $header['robots'] ?>" />
        <meta name="distribution" content="<?php echo $header['distribution'] ?>" />
        <meta name="rating" content="<?php echo $header['rating'] ?>" />
        <meta name="keywords" content="<?php echo $header['keywords'] ?>" />
        <meta property="fb:app_id" content="150104728527998">
            <meta name="google-site-verification" content="ahbpWULSKtyvSaLhhPsdrTl_5ct4Kj1dUqoFGJzcHxc" />
            <link rel="shortcut icon" href="<?php echo base_url(); ?>template/ezwebvietnam/home/favicon.ico" type="image/x-icon"/>

            <meta name="description" content="<?php echo $header['description'] ?>" />
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/css.css" media="screen"  />
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/jquery.countdown.css" media="screen"  />
            <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/home/scripts/main.htm"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/js/jquery-1.8.3.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/js/jquery.plugin.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/js/jquery.tools.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/js/jquery.countdown.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/js/jquery-ui.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>plugin/ckeditor/ckeditor.js"></script>

            <script type="text/javascript">
                var curent_price = 0;
                var curent_product_id = 0;
                var price_unit = "VND";
                var app_main_url = "";
                var my_safecode = "view";
                var app_ext = ".htm";
                var my_url = "U1";
                try {
                    var new_reg_success = '<p><span style="color: rgb(51, 51, 51);"><span style="font-size: medium;"><span style="font-family: Arial;">Xin chúc mừng!</span></span></span></p>    <p><span style="color: rgb(51, 51, 51);"><span style="font-size: medium;"><span style="font-family: Arial;"> bạn đã đăng ký thành công.<br/> Hệ thống đã tự động gửi email có đường link tải về.Bạn nhớ kiểm tra hôp thư của bạn và mục Spam,dể đảm bảo bạn nhận được email của chúng tôi.Nếu bạn có trục trặc gì hãy liên hệ với chúng tôi qua địa chỉ email: <a href="mailto:hotro@vietmongco.vn">hotro@vietmongco.vn</a> để được trợ giúp</span></span></span></p>    ';
                } catch (e) {
                }
                var my_template = "template_1";
                var my_curent_page = "U1";
            </script>
            <script>
                (function(i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function() {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-49550436-1', 'vietmongco.vn');
                ga('send', 'pageview');

            </script>
            <script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/js/cart_script3.js"></script>
            <style>
                .support_widget {
                    text-align: left;
                    border-top: 1px solid #d5d5d5;
                    border-left: 1px solid #d5d5d5;
                    border-bottom: 1px solid #d5d5d5;
                    border-radius: 5px 0 0 5px;
                    -moz-border-radius: 5px 0 0 5px;
                    -webkit-border-radius: 5px 0 0 5px;
                    width: 33px;
                    padding: 2px;
                    position: fixed;
                    z-index: 50;
                    right: 0;
                    bottom: 200px;
                    background: #f5f5f5;
                }
                .support_widget .link {
                    border-radius: 15px;
                    -moz-border-radius: 15px;
                    -webkit-border-radius: 15px;
                    width: 25px;
                    height: 25px;
                    border: 1px solid #d5d5d5;
                    background: #fff;
                    margin: 3px;
                    position: relative;
                }
                .support_widget .home {
                    background: url(<?php echo base_url(); ?>template/ezwebvietnam/home/support/wg_home.png) no-repeat center center;
                    opacity: .5;
                    display: block;
                    width: 25px;
                    height: 25px;
                }
                .support_widget .phone {
                    text-align: left;
                    background: url(<?php echo base_url(); ?>template/ezwebvietnam/home/support/wg_phone.png) no-repeat center center;
                    opacity: .5;
                    display: block;
                    width: 25px;
                    height: 25px;
                }
                .support_widget .link .content {
                    background: #fff;
                    position: absolute;
                    min-width: 200px;
                    top: -10px;
                    right: 35px;
                    z-index: 9999;
                    border-radius: 5px;
                    -moz-border-radius: 5px;
                    -webkit-border-radius: 5px;
                    border: 1px solid #999;
                    min-height: 35px;
                    padding: 5px;
                    display: none;
                    font-size: 12px;
                    font-weight: 700;
                }
                .support_widget .link .content {
                    font-size: 12px;
                    font-weight: 700;
                }
                .support_widget .chat {
                    text-align: left;
                    background: url(<?php echo base_url(); ?>template/ezwebvietnam/home/support/wg_chat.png) no-repeat center center;
                    opacity: .5;
                    display: block;
                    width: 25px;
                    height: 25px;
                }
                .support_widget .link:hover>.content {
                    display: block;
                }
                .support_widget .top {
                    background: url(<?php echo base_url(); ?>template/ezwebvietnam/home/support/wg_top.png) no-repeat center center;
                    opacity: .5;
                    display: block;
                    width: 25px;
                    height: 25px;
                }
                .support_widget .link .content:after {
                content: "";
                position: absolute;
                width: 0;
                height: 0;
                border-width: 13px;
                border-style: solid;
                border-color: transparent transparent transparent #999;
                top: 10px;
                right: -27px;
                }
                .support_widget {
                text-align: left;
                }
            </style>

    </head>
    <body>
        <script type="text/javascript">
                 var LHCChatOptions = {};
                 LHCChatOptions.opt = {widget_height: 340, widget_width: 300, popup_height: 520, popup_width: 500};
                 (function() {
                     var po = document.createElement('script');
                     po.type = 'text/javascript';
                     po.async = true;
                     var refferer = (document.referrer) ? encodeURIComponent(document.referrer) : '';
                     var location = (document.location) ? encodeURIComponent(document.location) : '';
                     po.src = '//vietmongco.vn/livechat/index.php/vnm/chat/getstatus/(click)/internal/(position)/bottom_right/(top)/350/(units)/pixels?r=' + refferer + '&l=' + location;
                     var s = document.getElementsByTagName('script')[0];
                     s.parentNode.insertBefore(po, s);
                 })();
        </script>
        <div class="sidelinks-container"><h3><a href="#top">Top</a></h3></div>
        <div id='banner' style="min-height:80px">
            <div class='banner_content'>
                <!--Widget-->
                <div style="width:1000px">
                    <p style="margin:0;padding:0"><img alt="" src="<?php echo base_url(); ?>template/ezwebvietnam/home/bannervinamos3.png" /></p>  
                </div>
                <!--/Widget-->
            </div>
            <div class='banner_header'>
            </div>
            <div class='logo'>
                <img src='<?php echo base_url(); ?>file/uploads/logo/<?php echo $header['logo'] ?>' width='220' height='80' alt='' />
            </div>
            <div class='top_menu' >
                <a href="<?php echo base_url(); ?>" class="home">Trang chủ</a>
                <a href="<?php echo base_url(); ?>lien-he" class="contact">Liên hệ</a>
                <a href="#"  onclick="show_cart('<?php echo base_url(); ?>')"  class="cart">
                    Giỏ hàng (<span id="product_number" style="color:#ef4232;font-weight:700">0</span>)
                </a>
            </div>
            <div class='login_form'>
                <?php
                $login = array(
                    'name' => 'login',
                    'id' => 'login',
                    'value' => set_value('login'),
                    'maxlength' => 80,
                    'maxsize' => 30,
                    'class' => 'input-large span10',
                    'style' => 'width:200px;border:0;height:23px;color:#005398;font-style: italic;',
                    'placeholder' => 'Username'
                );
                $password = array(
                    'name' => 'password',
                    'id' => 'password',
                    'maxsize' => 30,
                    'class' => 'input-large span10',
                    'type' => 'password',
                    'style' => 'padding-left:10px;width:200px;border:0;height:23px;color:#005398;font-style: italic;',
                    'placeholder' => 'Password'
                );
                if (!$this->tank_auth->is_login_ctv(TRUE)) {
                    ?>
                    <form style='margin:0px;padding:0px' method='post' action='<?php echo base_url(); ?>cong-tac-vien/login'>

                        <input onclick="window.location.href = '<?php echo base_url(); ?>cong-tac-vien/register';
                                    return false;" style='float:right;margin-top:-5px' type="image" src="<?php echo base_url(); ?>template/ezwebvietnam/home/button-title-register.png" name="ss" value='ss' width="126" height="32" />
                        <input style='float:right;margin-top:-5px' type="image" src="<?php echo base_url(); ?>template/ezwebvietnam/home/button-title-login.png" name="submit" value='submit' width="126" height="32" />
                        <?php echo form_input($login); ?>
                        <?php echo form_input($password); ?>

                    </form>
                <?php } else { ?>
                    <style>
                        .setting{
                            padding-left:100px;width:160px;border:0;height:23px;color:white;font-style: italic;
                        }
                        .setting a {
                            color:white !important;
                        }

                    </style>
                    <span style="margin-top:-5px;width:160px;border:0;height:23px;color:white;font-style: italic;"> Xin chào <?php echo $this->session->userdata('username') ?> </span>

                    <?php
                    if ($this->session->userdata('role') == 4) {
                        ?>
                        <span class="setting"> <a href="<?php echo base_url(); ?>cong-tac-vien">Cộng tác viên</a></span>
                    <?php } else { ?> 
                        <span class="setting"> <a href="<?php echo base_url(); ?>quan-tri">Quản trị</a></span>
                    <?php }
                } ?>
            </div>
        </div>
        <div style='width:1000px;margin: 0 auto 0 auto;'>
            <ul id='menu'>
                <li>
                    <a href='<?php echo base_url(); ?>'>Trang Chủ</a>
                </li>
                <li>
                    <a href='<?php echo base_url(); ?>gioi-thieu'>Giới thiệu</a>
                </li>
                <li>
                    <a href='<?php echo base_url(); ?>san-pham'>Sản Phẩm</a>
                </li>
                <li>
                    <a  href='<?php echo base_url(); ?>hoi-dap'>
                        Hỏi Đáp		</a>
                </li>
                <li>
                    <a  href='<?php echo base_url(); ?>tin-tuc'>
                        Tin Tức		</a>
                </li>
                <li>
                    <a  href='<?php echo base_url(); ?>lien-he'>
                        Liên hệ		</a>
                </li>
            </ul>
            <div style='clear:both'></div>
        </div>
        <div id='hide_content' style="display:none"></div>
        <div id='process_loading' style="display:none"></div>
        <div id='emailform' style="display:none">
            <div  style="float:right;cursor:pointer;margin:0" onclick="close_form()"><b>[x]</b></div>
            <div id="email_form_content">
                <div class="content">
                    <p>Việt Mông Cổ - Khỏe từ nguồn cội </br> sẽ gửi tặng bạn cuốn sách có nội dung đầy đủ về các bài thuốc dân gian được sưu tầm.Bạn sẽ có thêm rất nhiều kiến thức để sử dụng các cây,cỏ trong vườn nhà tạo thành thuốc quý.</p>
                    <p>Hãy điền đầy đủ thông tin vào khung bên dưới để nhận quà miễn phí từ Việt Mông Cổ</p>
                </div>
                <div class="formcontent">
                    <center>
                        <form id="email_form_content_table" name='emailform2' action='' method='post' onsubmit="return checkvaliemail('<?php echo base_url(); ?>')">
                            <table width="330">
                                <tr>
                                    <td width="100">
                                        <span style="font-size:12px">Họ và tên:</span>
                                    </td>
                                    <td>
                                        <input type='text'  name='userrealname' id='userrealname' class="textbox" /><span id='userrealname_e' style="color:#f00;font-size:11px"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="100">
                                        <span style="font-size:12px">Email:</span>
                                    </td>
                                    <td>
                                        <input type='text'  name='useremail' id='useremail' class="textbox" /><span id='email_e' style="color:#f00;font-size:11px"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="100">
                                        <span style="font-size:12px">Điện thoại:</span>
                                    </td>
                                    <td>
                                        <input type='text'  name='userphone' id='userphone' class="textbox" /><span id='userphone_e' style="color:#f00;font-size:11px"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="100" valign="top">
                                        <span style="font-size:12px">Mã bảo mật:</span>
                                    </td>
                                    <td>
                                        <div style="float:left">
                                            <input type='text'  name='sercuritycode' id='sercuritycode_1'  class="textbox" style="width:50px" /><?php echo $captcha_question[0]['question']; ?>
                                        </div>
                                        <span id='sercuritycode_e' style="color:#f00;font-size:11px"></span>
                                    </td>
                                </tr>
                            </table>
                            <div style="clear:both"></div>
                            <input id="btn_submit_mail" type="submit" name="submit_email" value='   Nhận Quà   '  />
                        </form>
                        <div id="email_form_content_loading" style="display:none"><br /><br /><br /><center><img src="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/images/ajax-loader.gif" alt="loading" /></center></div>
                    </center>
                </div>
            </div>
        </div>
        <div id='cart_form' style="display:none">
            <div  style="float:right;cursor:pointer;margin:0" onclick="close_add_to_card_form()"><b>[x]</b></div>
            <div class="form_header">
                Thêm vào giỏ hàng
            </div>
            <div class="formcontent">
                <center>
                    <div id='add_to_cart_form_div'>
                        <form name='add_to_cart_form' action='' method='post'>
                            <table width="330">
                                <tr>
                                    <td width="100">
                                        <span style="font-size:12px">Số lượng:</span>
                                    </td>
                                    <td>
                                        <input type='text'  name='product_num' id='product_num' class="textbox" onkeyup="cal_price_value();" /><span id='product_num_e' style="color:#f00;font-size:11px"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="100" valign="top">
                                        <span style="font-size:12px">Thành tiền:</span>
                                    </td>
                                    <td>
                                        <span id="cash"></span><span id="price_u"></span>
                                    </td>
                                </tr>
                            </table>
                            <div style="clear:both"></div>
                            <input type="button" name="submit_email" onclick="add_to_cart_db(<?php echo $product_detail[0]['id_product'] ?>, '<?php echo base_url(); ?>');" value='Thêm vào giỏ'  />
                        </form>
                    </div>
                    <div id="add_to_cart_form_result">
                        <center>
                            <b>
                                Sản phẩm bạn vừa đặt đã được đưa vào giỏ hàng.<br />
                                Hãy vào giỏ hàng để tiến hành đặt hàng.<br />
                            </b>
                            Xin chân thành cảm ơn<br /><br />
                            <input type="submit" name="submit_email" value='   Vào giỏ hàng   ' onclick="close_add_to_card_form();
                                    show_cart('<?php echo base_url(); ?>');" /> 
                            <input type="submit" name="submit_email" value='   Mua tiếp   ' onclick="close_add_to_card_form();" />
                        </center>
                    </div>
                </center>
            </div>
        </div>
        <div id='show_cart_form' style="display:none;text-align:left">
            <div  style="float:right;cursor:pointer;margin:0" onclick="close_show_cart_form()"><b>[x]</b></div>
            <div class="form_header">Giỏ hàng <a  alt="Xóa" style="width:30px;cursor:pointer" onclick="if (confirm('Bạn có chăc muốn xóa?'))
                        clear_cart('<?php echo base_url(); ?>')">[Xóa tất cả]</a></div>
            <div id="cart_content">

            </div>
            <div class="formcontent" style="height:280px;clear:both;margin-top:25px;overflow:auto;clear:both" onmouseover='$("#show_cart_form").draggable("disable");' onmouseout='$("#show_cart_form").draggable("enable");'>



            </div>
            <img src="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/images/dathang.png" class="add_cart_button" onclick="show_order_form()" style="padding-top:5px" />
        </div>


        <div id='show_order_form' style="display:none">
            <div  style="float:right;cursor:pointer;margin:0" onclick="close_show_order_form()"><b>[x]</b></div>
            <div class="form_header">
                Đặt hàng
            </div>
            <div style="clear:both;margin-top:25px;display:none" id="o_content_result"><p><span style="color: rgb(51, 51, 51);"><span style="font-size: medium;"><span style="font-family: Arial;">Chúc mừng bạn đã đặt hàng thành công!</span></span></span></p>    </div>
            <div class="formcontent" style="clear:both;margin-top:25px" id="o_content">
                <table cellspacing='2' cellpadding='0' width="480" >
                    <tr>
                        <td width="100" align="right">

                        </td>
                        <td>
                            Bạn không thể click Đặt hàng nếu không điền hoặc điền không đúng mã bảo mật
                        </td>
                    </tr>
                    <tr>
                        <td width="100" align="right">
                            Họ và tên (*):
                        </td>
                        <td>
                            <input type="text" id="o_realname" name="o_realname" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="100" align="right">
                            Địa chỉ (*):
                        </td>
                        <td>
                            <input type="text" id="o_address" name="o_address" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="100" align="right">
                            Điện thoại (*):
                        </td>
                        <td>
                            <input type="text" id="o_phone" name="o_phone" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="100" align="right">
                            Email (*):
                        </td>
                        <td>
                            <input type="text" id="o_email" name="o_email" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="100" align="right" valign="top">
                            Mã bảo mật:
                        </td>
                        <td>
                            <div style="float:left">
                                <input type='text'  name='sercuritycode' id='o_sercuritycode'  style="width:80px" /><div id="image_cpc"><?php echo $captcha_question[0]['question']; ?></div>
                            </div>
                            <span id='sercuritycode_e' style="color:#f00;font-size:11px"></span>
                        </td>
                    </tr>
                    <tr>
                        <td width="100" align="right">
                            Yahoo:
                        </td>
                        <td>
                            <input type="text" id="o_yahoo" name="o_yahoo" size="30" />
                        </td>
                    </tr>

                </table>
                <center>
                    <img id="checkout" src="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/images/dathang.png" class="add_cart_button" onclick="order_process('<?php echo base_url(); ?>')" style="padding-top:5px" />
                </center>
            </div>
            <div id="o_email_form_content_loading" style="display:none"><br /><br /><br /><center><img src="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/images/ajax-loader.gif" alt="loading" /></center></div>
        </div>

        <script type='text/javascript'>
            $(document).ready(function() {
                $("#footer").each(function() {
                    var $this = $(this);
                    $this.html($this.html().replace(/&nbsp;/g, ''));
                });
                document.getElementById('checkout').style.pointerEvents = 'none';
                $("#o_sercuritycode").keyup(function() {
                    var code = $(this).val();
                    if (code != <?php echo $captcha_question['0']['reply'] ?>)
                    {
                        document.getElementById('checkout').style.pointerEvents = 'none';
                    }
                    else
                    {
                        document.getElementById('checkout').style.pointerEvents = 'auto';
                    }


                });
                $('#btn_submit_mail').attr('disabled', 'disabled');
                $('#sercuritycode_1').keyup(function() {
                    var code_1 = $(this).val();
                    if (code_1 == <?php echo $captcha_question['0']['reply'] ?>)
                    {
                        $('#btn_submit_mail').attr('disabled', false);
                    }
                    else
                    {
                        $('#btn_submit_mail').attr('disabled', 'disabled');
                    }
                });
                $('#change_captcha').click(function() {
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>home/product/create_captcha_ajax',
                        mimeType: "multipart/form-data",
                        dataType: "json",
                        cache: false,
                        success: function(data) {
                            if (data.error == 0)
                            {
                                $('#image_cpc').html(data.img);
                            }
                        }
                    });
                });
                $("#hide_content").css("width", screen.width + 'px');
                $("#hide_content").css("height", screen.height + 'px');
                $("#emailform").css("left", ((screen.width / 2) - 250) + 'px');
                $("#cart_form").css("left", ((screen.width / 2) - 250) + 'px');
                $("#show_cart_form").css("left", ((screen.width / 2) - 250) + 'px');
                $("#show_order_form").css("left", ((screen.width / 2) - 250) + 'px');
                var checkform_email = getCookie('closeform');

                if (checkform_email != "true") {
                    $("#emailform").css("display", "");
                    $("#hide_content").css("display", "");
                    $("#emailform").draggable();
                }
                count_product_quantity();
                $("#product_num").keydown(function(event) {
                    // Allow: backspace, delete, tab, escape, and enter
                    if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
                            // Allow: Ctrl+A
                                    (event.keyCode == 65 && event.ctrlKey === true) ||
                                    // Allow: home, end, left, right
                                            (event.keyCode >= 35 && event.keyCode <= 39)) {
                                // let it happen, don't do anything
                                return;
                            } else {
                                // Ensure that it is a number and stop the keypress
                                if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                                    event.preventDefault();
                                }
                            }
                        });
            });
        </script>
        <div id="body_bg">
            <div id='main_body_content2'>
                <div id="main_page" style="text-align: justify">
                    <div id="center222">
                        <?php echo $this->load->view($main_content); ?>

                        <div style='hight:1px'>&nbsp;</div>
                        <div style='clear:both'></div>
                        <!--Widget-->
                        <!--/Widget-->
                    </div>

                </div>
                <div id='left_block' >
                    <div style="padding:5px">
                        <!--Widget-->
                        <?php
                        foreach ($list_product_sale as $product_sale) {
                            ?>
                            <div>
                                <p style="text-align: center;">
                                    <?php
                                    if ($product_sale['position'] != 0) {
                                        ?>
                                        <a href="<?php echo base_url(); ?>san-pham/<?php echo $product_sale['id_product'] ?>-<?php echo mb_strtolower(url_title(removesign($product_sale['title']))) ?>">
                                        <?php } else { ?>
                                            <a href="<?php echo base_url(); ?>">
                                                <?php
                                            }
                                            if (file_exists(PATH_FOLDER . ROT_DIR . 'file/uploads/product/' . $product_sale['img']) && is_file(PATH_FOLDER . ROT_DIR . 'file/uploads/product/' . $product_sale['img']) && $product_sale['img'] != '') {
                                                ?>
                                                <img alt="" src="<?php echo base_url(); ?>file/uploads/product/<?php echo $product_sale['img'] ?>" style="width: 240px; height: 300px;" />
                                            <?php } else { ?>
                                                <img alt="" src="<?php echo base_url(); ?>file/uploads/no_image.gif" style="width: 240px; height: 300px;" />
                                            <?php } ?>
                                        </a></p>
                                <?php
                                if ($product_sale['position'] != 0) {
                                    ?>
                                    <p style="text-align: center;"><a href="<?php echo base_url(); ?>san-pham/<?php echo $product_sale['id_product'] ?>-<?php echo mb_strtolower(url_title(removesign($product_sale['title']))) ?>" style="line-height: 1.6em;">
                                        <?php } else { ?>
                                            <p style="text-align: center;"><a href="<?php echo base_url(); ?>" style="line-height: 1.6em;">
                                                <?php } ?>
                                            </a><br />  &nbsp;</p>  
                                        </div>
                                    <?php } ?>
                                    <div>
                                        <p style="text-align: center;"><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fvietmongco.vn&amp;width=240&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:290px;" allowTransparency="true"></iframe></p>
                                    </div>
                                    <div>
                                        <iframe target="__blank" src="http://www.youtube.com/subscribe_widget?p=vietmongco" 
                                                style="overflow: hidden; height: 105px; width: 240px; border: 0;" 
                                                scrolling="no" frameBorder="0">
                                        </iframe>
                                    </div>
                                    <!--
                                    <?php
                                    foreach ($list_clip as $clip) {
                                        ?>
                                                        <div>
                                                            <p><iframe allowfullscreen="" frameborder="0" height="200" src="//www.youtube.com/embed/<?php echo $clip['code'] ?>" width="235"></iframe></p>
                
                                                        </div>
                                    <?php } ?>
                                    -->
                                    <div>

                                    </div>
                                    <!--/Widget-->
                                    </div>
                                </div>	<div style='clear:both'></div>
                            </div>
                            <!--Widget-->
                            <!--/Widget-->
                            <div id="footer">
                                <p style="text-align: center;"><span style="color:#FFF0F5;"><span style="font-size: small; font-family: Arial; line-height: 1.6em;">    </span><span style="font-family: Arial; line-height: 1.6em; font-size: 16px;"><strong> <?php echo $info_company[0]['address'] ?></strong></span></span></p>   
                                <?php echo $info_company[0]['footer'] ?>
                                Developed by <a href="http://www.facebook.com/ezwebvietnam" target="_blank">EZWebVietnam</a>
                            </div>
                            <div class="support_widget">
                                <div class="link">
                                    <a href="<?php echo base_url(); ?>" class="home"></a>
                                </div>
                                <div class="link">
                                    <a class="phone" tabindex="1"></a>
                                    <div class="content">
                                        <!--Widget-->
                                        <p><span style="font-size:18px;"><span style="font-size:16px;"><span style="color:#FF0000;"><strong><span style="font-size:20px;">Hotline:</span> &nbsp;</strong></span></span><span style="color:#0066cc;"><strong>0918.870.781</strong></span></span></p>


                                        <!--/Widget-->
                                    </div>
                                </div>
                                <div class="link">
                                    <a class="chat" tabindex="2"></a>
                                    <div class="content">
                                        <!--Widget-->
                                        <p><span style="color:#FF0000;"><strong><span style="font-size:20px;">Chat: &nbsp;&nbsp;</span></strong></span><a href="skype:nguyendinhhan81?call"><img alt="Skype Me™!" height="30" src="<?php echo base_url(); ?>template/ezwebvietnam/home/support/skype.jpg" style="border: none;" width="30"></a>&nbsp; &nbsp; &nbsp; &nbsp;<a href="ymsgr:sendIM?quantri24&amp;m=Chào bạn ! Tôi đang cần giúp đỡ!" style="line-height: 1.6em;"><img alt="CEO chuyen nghiep" border="0" height="30" src="<?php echo base_url(); ?>template/ezwebvietnam/home/support/yahoo.png" width="30"></a></p>


                                        <!--/Widget-->
                                    </div>
                                </div>
                                <div class="link">
                                    <a href="#top" class="top"></a>
                                </div>
                            </div>   
                            </body>
                            </html>