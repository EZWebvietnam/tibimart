 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/> 
<link type="text/css" href="<?php echo base_url(); ?>template/ezwebvietnam/home/register/style.css" rel="stylesheet">		<script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/home/register/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>template/ezwebvietnam/home/register/localization/messages_vi.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $( "#birth_day" ).datepicker({ dateFormat: 'yy/mm/dd' });
        $("#contact").validate({
            errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
            rules: {
               
                min_field: {min: 5}, //Giá trị tối thiểu
                max_field: {max: 10}, //Giá trị tối đa
                range_field: {range: [4, 10]}, //Giá trị trong khoảng từ 4 - 10
                rangelength_field: {rangelength: [4, 10]} //Chiều dài chuỗi trong khoảng từ 4 - 10 ký tự
            }
        });
    });
</script>
<div id="container">
    <center>
        <form id="contact" method="post" enctype="multipart/form-data" class="contact-form" >
            <ul>
                <table border="1" bordercolor="#FFFFFF" style="background-color:#FFFFFF" width="100%" cellpadding="3" cellspacing="3">
                    <tr>
                        <td style="width: 126px;">Username <span class="rq"> * </span></td>
                        <td><input class="required" minlength="6" id="username" name="username" type="text" class="text" /></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu <span class="rq"> * </span></td>
                        <td><input class="required"  id="password" name="password" type="password" class="text"/></td>
                    </tr>
                    <tr>
                        <td> Nhập lại mật khẩu <span class="rq"> * </span></td>
                        <td><input class="required " name="cpassword" type="password" class="text" tabindex="3" /></td>
                    </tr>
                    <tr>
                        <td>Giới tính</td>
                        <td><input checked="" type="radio" name="radio" value="0"/> Nam<input type="radio" name="radio" value="1"/> Nữ</td>
                    </tr>
                    <tr>
                        <td>Họ tên</td>
                        <td><input id="full_name" class="required" name="full_name" type="text" class="text"/></td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td><input id="birth_day" class="required" name="birth_day" type="text" class="text"/></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input id="address" class="required" name="address" type="text" class="text"/></td>
                    </tr>
                    <tr>
                        <td>Tỉnh thành</td>
                        <td>
                            <select name="province">
                                <?php 
                                foreach($list_province as $province)
                                {
                                ?>
                                <option value="<?php echo $province['provinceid']?>"><?php echo $province['name']?></option>
                                <?php } ?>
                                
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><input id="mobi" class="digits" maxlength="12" name="mobi" type="text" class="text"/></td>
                    </tr>
                    <tr>
                        <td>Email<span class="rq"> * </span></td>
                        <td><input class="required email" id="email" name="email" type="text" class="text"/></td>
                    </tr>
                    <tr>
                        <td>Yahoo</td>
                        <td><input  id="yahoo" name="yahoo" type="text" class="text"/></td>
                    </tr>
                    <tr>
                        <td>Skype</td>
                        <td><input  id="skype" name="skype" type="text" class="text"/></td>
                    </tr>
                    <tr>
                        <td>Ngân hàng/Ví điện tử<span class="rq"> * </span></td>
                        <td><input class="required" id="bank" name="bank" type="text" class="text"/></td>
                    </tr>
                    <tr>
                        <td>STK/Email giao dịch<span class="rq"> * </span></td>
                        <td><input class="required" id="stk" name="stk" type="text" class="text"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Đăng ký"/></td>
                    </tr>
                </table>

            </ul>
        </form> 
    </center>
</div><!--End container-->