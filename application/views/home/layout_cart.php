<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Giỏ hàng của quý khách</title>
      <meta name="keywords" content="Giỏ hàng của quý khách, Thang nhôm, thang các loại, thang chất lượng cao, thang giá rẻ, thang nhật bản" />
      <meta name="description" content="Giỏ hàng của quý khách, Website Thang nhôm của công ty Cổ Phần Thương Mại và dịch vụ kỹ thuật Thành Đạt mang đến cho quý khách những sản phẩm thang nhôm chất lượng cao, giá cả phải chăng" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jquery.min.js"></script>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta http-equiv="Content-Language" content="vn" />
      <link href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/css/style.css" rel="stylesheet" type="text/css" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/BannerFloat.js"></script>
      <link href="/upload/files/icon/favicon.png" rel="shortcut icon" type="image/x-icon" />
      <link href="" rel="author" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jCarousel/jquery.jcarousel.min.js"></script>
      <link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jCarousel/skin.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jquery.hoveraccordion.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/tooltip/stickytooltip.js"></script>
	  <?php
	  if($_SERVER['SERVER_NAME'] == 'localhost')
		 {
		      ?> 
			  <script>
			  	var app_main_url ="http://localhost/tibimart";
			  </script>
			  <?php
		 }
		 else
		 {
		    ?> 
			 <script>
			  	var app_main_url ="http://tibimart.com";
			  </script>
			<?php
		 }
		 ?>
      <script type="text/javascript">
         function mycarousel_initCallback(carousel) {
             carousel.buttonNext.bind('click', function () {
                 carousel.startAuto(0);
             });
             carousel.buttonPrev.bind('click', function () {
                 carousel.startAuto(0);
             });
             carousel.clip.hover(function () {
                 carousel.stopAuto();
             }, function () {
                 carousel.startAuto();
             });
         };
         jQuery(document).ready(function () {
             jQuery('#mycarousel').jcarousel({
                 auto: 0,
                 wrap: 'last',
                 initCallback: mycarousel_initCallback
             });
         });
         
         
      </script>
   </head>
   <body>
      <div id="container">
         <div id="head">
            <a href="/">
            <img id="HeaderControl1_imgLogo" title="Thang nhom, Thang nhôm các loại" class="logo" src="/upload/images/logo/logo-thadaco.jpg" />
            </a>
            <div class="hotline-head">
               <div class="hotline">
                  <span>Phía Bắc:</span> 043 7671380 - 0912.385.909 - 0906.261.381<br />
                  <span>Phía Nam:</span> 08 3514 4875 - 09.456.11011
               </div>
               <div class="opentime">
                  Giờ mở cửa: <b>8h00 - 18h00</b> <i>(tất cả các ngày trong tuần)</i><br />
                  <i><a href="http://thadaco.vn/contact.html" target="_blank">Để mua hàng ngoài giờ hành chính, quý khách vui lòng click vào đây...</a></i>
               </div>
            </div>
            <div class="ads">
            </div>
         </div>
         <div class="clear">
         </div>
         <div class="menu-hoz">
            <div class="menu-horizontal">
               <ul>
                  <li id="MenuTopControl1_rptTopMenu2_li_0" class="first">
                     <a id="MenuTopControl1_rptTopMenu2_hplLink_0" title="Trang chủ" href="http://thangnhom.net.vn/">Trang chủ</a>
                  </li>
                  <li id="MenuTopControl1_rptTopMenu2_li_1">
                     <a id="MenuTopControl1_rptTopMenu2_hplLink_1" title="Giới thiệu" href="http://thangnhom.net.vn/m2/Gioi-thieu.aspx">Giới thiệu</a>
                  </li>
                  <li id="MenuTopControl1_rptTopMenu2_li_2">
                     <a id="MenuTopControl1_rptTopMenu2_hplLink_2" title="Tin tức" href="http://thangnhom.net.vn/c7/tin-tuc.aspx">Tin tức</a>
                  </li>
                  <li id="MenuTopControl1_rptTopMenu2_li_3">
                     <a id="MenuTopControl1_rptTopMenu2_hplLink_3" title="Thanh toán và vận chuyển" href="http://thangnhom.net.vn/m8/Thanh-toan-va-van-chuyen.aspx">Thanh toán và vận chuyển</a>
                  </li>
                  <li id="MenuTopControl1_rptTopMenu2_li_4">
                     <a id="MenuTopControl1_rptTopMenu2_hplLink_4" title="Bản đồ" href="http://thangnhom.net.vn/Maps.aspx">Bản đồ</a>
                  </li>
                  <li id="MenuTopControl1_rptTopMenu2_li_5">
                     <a id="MenuTopControl1_rptTopMenu2_hplLink_5" title="Liên hệ với chúng tôi" href="/contact.aspx">Liên hệ với chúng tôi</a>
                  </li>
               </ul>
            </div>
            <div class="search">
               <input name="ctl00$SearchBoxControl1$txtSearch" type="text" value="tìm kiếm..." maxlength="27" id="SearchBoxControl1_txtSearch" class="inputbox" onfocus="if(this.value==&#39;tìm kiếm...&#39;) this.value=&#39;&#39;;" onblur="if(this.value==&#39;&#39;) this.value=&#39;tìm kiếm...&#39;;" />
               <input type="submit" name="ctl00$SearchBoxControl1$btnSearch" value="" id="SearchBoxControl1_btnSearch" />
            </div>
         </div>
         <div class="clear">
         </div>
         <div id="content">
            <div class="wraper">
               <div id="large">
                  <ul id="crumbs">
                     <li><a href="/">Trang chủ</a></li>
                     <li>Giỏ hàng của quý khách</li>
                  </ul>
                  <div class="clear">
                  </div>
                  <div class="module">
                     <div class="title" style="border-top: none">
                        <h3>
                           Giỏ hàng của quý khách
                        </h3>
                     </div>
                     <div class="clear" style="height: 20px">
                     </div>
                     <span id="ContentPlaceHolder1_MyError" class="validators" style="color:Red;"></span>
					 <div id="cart_content">
                     <table cellspacing="10" cellpadding="10" rules="all" border="1" bordercolor="#DBDBDB" border="1" id="ContentPlaceHolder1_dgShopCart" style="width:100%;border-collapse: collapse;">
                        <tr align="center" style="background-color:#EFF9FF;font-weight:bold;">
                           <td style="height:35px;">Ảnh</td>
                           <td>Sản phẩm</td>
                           <td>Số lượng</td>
                           <td>Đơn giá</td>
                           <td>Thành tiền</td>
                           <td>Xóa</td>
                        </tr>
						<?php 
						$total_price = 0;
						foreach($list_cart as $cart)
						{
						?>
                        <tr align="center">
                           <td style="height:80px;">
                              <a id="ContentPlaceHolder1_dgShopCart_hplThumb_0">
							  <img id="ContentPlaceHolder1_dgShopCart_imgProduct_0" src="<?php echo base_url();?>file/uploads/product/<?php echo $cart['image']?>" width="80" style="width:100px;" />
							 
							  </a>
                           </td>
                           <td align="left">
                              <span id="ContentPlaceHolder1_dgShopCart_ProductName_0"><?php echo $cart['title']?></span>
                           </td>
                           <td>
                              <input id="quantity_<?php echo $cart['id']?>" name="quantity" type="text" value="<?php echo $cart['quantity']?>" maxlength="4" id="quantity" style="width:20px;text-align: center" />
                           </td>
                           <td align="right">
                              <span id="ContentPlaceHolder1_dgShopCart_lblUnitPriceVND_0" class="price"><?php echo number_format($cart['price'])?> VNĐ</span>
                           </td>
                           <td align="right">
                              <span id="ContentPlaceHolder1_dgShopCart_lblTotalPalVND_0" class="price"><?php echo number_format($cart['total_price'])?> VNĐ</span>
                           </td>
                           <td>
                              <a href="javascript:deleteItem(<?php echo $cart['id']?>)">Xóa</a>
                           </td>
                        </tr>
						<script>
							 jQuery(document).ready(function () {
								$('#quantity_'+<?php echo $cart['id']?>).keyup(function(){
									var quantity = $('#quantity_'+<?php echo $cart['id']?>).val();
									$.ajax({
							            url: app_main_url + '/home/product/ajax_update_cart',
							            type: 'POST',
							            dataType: "html",
							            data: {
											quantity:quantity,
							                id_cart: <?php echo $cart['id']?>,
							            },
							            success: function(response) {
											
							                $('#cart_content').html(response)
							            },
							            error: function(XMLHttpRequest, textStatus, exception) {
							                alert("Ajax failure\n");
							            },
							            async: true
							        });
								});
							});
						</script>
						<?php 
						$total_price +=$cart['total_price'];
						} ?>
                     </table>
                     <div id="ContentPlaceHolder1_pnlTotal">
                        <div style="float: right; clear: both; margin: 10px 5px 5px;">
                           <p style="margin-left: 10px; margin-top: 7px">
                              Tổng tiền: <span class="price">
                              <span id="ContentPlaceHolder1_lblTotalVND"><?php echo number_format($total_price);?> VNĐ</span></span><span style="color: rgb(240, 34, 34);">
                              </span>
                           </p>
                        </div>
                        <div class="clearBoth">
                        </div>
                        <div style="float: right;">
                           <input type="submit" name="ctl00$ContentPlaceHolder1$btnUpdateCart" value="Cập nhật" id="ContentPlaceHolder1_btnUpdateCart" class="btn floatLeft" />
                           <input type="submit" name="ctl00$ContentPlaceHolder1$btnHome" value="Tiếp tục mua" id="ContentPlaceHolder1_btnHome" class="btn-120 floatLeft" />
                           <input type="submit" name="ctl00$ContentPlaceHolder1$ibtnOrder" value="Thanh Toán" id="ContentPlaceHolder1_ibtnOrder" class="btn floatLeft" />
                        </div>
                     </div>
					 </div>
                  </div>
               </div>
               <div id="small">
                  <div class="block">
                     <div class="menu-ver">
                        <div class="title">
                           <h3>
                              Danh mục sản phẩm
                           </h3>
                        </div>
                        <div class="bd">
                           <ul id="menu-ver">
                              <li>
                                 <a id="MenuVerticalControl1_rptParent_hplLinkParent_0" href="http://thangnhom.net.vn/thang-nhom-nhat-ban.aspx">Thang nhôm Hasegawa - Nhật bản</a>
                              </li>
                              <li>
                                 <a id="MenuVerticalControl1_rptParent_hplLinkParent_1" href="http://thangnhom.net.vn/thang-nhom-dai-loan.aspx">Thang nhôm PAL - Đài Loan</a>
                              </li>
                              <li>
                                 <a id="MenuVerticalControl1_rptParent_hplLinkParent_2" href="http://thangnhom.net.vn/thang-nhom-tungshing.aspx">Thang nhôm Tungshing - Việt Nam</a>
                              </li>
                              <li>
                                 <a id="MenuVerticalControl1_rptParent_hplLinkParent_3" href="http://thangnhom.net.vn/thang-nhom-rut-gon.aspx">Thang nhôm rút Salvo</a>
                              </li>
                              <li>
                                 <a id="MenuVerticalControl1_rptParent_hplLinkParent_4" href="http://thangnhom.net.vn/thang-ghe-salvo.aspx">Thang nhôm Little - Mỹ</a>
                              </li>
                              <li>
                                 <a id="MenuVerticalControl1_rptParent_hplLinkParent_5" href="http://thangnhom.net.vn/thang-nhom-poongsan-han-quoc.aspx">Thang nhôm Poongsan-Hàn Quốc</a>
                              </li>
                              <li>
                                 <a id="MenuVerticalControl1_rptParent_hplLinkParent_6" href="http://thangnhom.net.vn/thang-nhom-nikawa-nhat-ban.aspx">Thang nhôm Nikawa-Nhật Bản</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="menu-ver">
                        <div class="title">
                           <h3>
                              Kiểu thiết kế
                           </h3>
                        </div>
                        <div class="bd">
                           <ul id="Ul1">
                              <li>
                                 <a id="MenuVerticalControl1_rptType_hpl_0" href="http://thangnhom.net.vn/type/2/Thang-nhom-gap.aspx">Thang nhôm gấp</a>
                              </li>
                              <li>
                                 <a id="MenuVerticalControl1_rptType_hpl_1" href="http://thangnhom.net.vn/type/3/Thang-nhom-rut.aspx">Thang nhôm rút</a>
                              </li>
                              <li>
                                 <a id="MenuVerticalControl1_rptType_hpl_2" href="http://thangnhom.net.vn/type/5/Thang-nhom-rut-day.aspx">Thang nhôm rút dây</a>
                              </li>
                              <li>
                                 <a id="MenuVerticalControl1_rptType_hpl_3" href="http://thangnhom.net.vn/type/4/Thang-nhom-tay-vin.aspx">Thang nhôm tay vịn</a>
                              </li>
                              <li>
                                 <a id="MenuVerticalControl1_rptType_hpl_4" href="http://thangnhom.net.vn/type/1/Thang-nhom-chu-A.aspx">Thang nhôm chữ A</a>
                              </li>
                              <li>
                                 <a id="MenuVerticalControl1_rptType_hpl_5" href="http://thangnhom.net.vn/type/6/Thang-nhom-ghe-tay-vin.aspx">Thang nhôm ghế-tay vịn</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="clear">
                  </div>
                  <a href="/Shopping-cart.aspx" class="cart"><span class="text">Giỏ hàng của quý khách</span> <span class="quantity">
                  1</span> </a>
                  <div class="clear">
                  </div>
                  <div class="block">
                     <div class="support">
                        <div class="title">
                           <h3>
                              Hỗ trợ trực tuyến
                           </h3>
                        </div>
                        <div class="bd">
                           <table width="238">
                              <tr id="SupportOnlineControl1_tr_Bac">
                                 <td class="region">
                                    Phía Bắc
                                 </td>
                              </tr>
                              <tr>
                                 <td style="height:2px;">
                                 </td>
                              </tr>
                              <tr>
                                 <td class="nick">
                                    <a href="ymsgr:sendim?kd3.thanhdat"><img border="0" align="middle" alt="Chát với Mr. Sự" src="http://opi.yahoo.com/online?u=kd3.thanhdat&amp;m=g&amp;t=5" /></a>
                                    <span class="name">&nbsp;&nbsp;Mr. Sự</span> <span class="phone">
                                    &nbsp;&nbsp;0906.261.381</span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="nick">
                                    <a href="ymsgr:sendim?hunglc1001"><img border="0" align="middle" alt="Chát với Mr. Hưng" src="http://opi.yahoo.com/online?u=hunglc1001&amp;m=g&amp;t=5" /></a>
                                    <span class="name">&nbsp;&nbsp;Mr. Hưng</span> <span class="phone">
                                    &nbsp;&nbsp;0912.385.909</span>
                                 </td>
                              </tr>
                              <tr id="SupportOnlineControl1_tr_Nam">
                                 <td class="region">
                                    Phía Nam
                                 </td>
                              </tr>
                              <tr>
                                 <td style="height:2px;">
                                 </td>
                              </tr>
                              <tr>
                                 <td class="nick">
                                    <a href="ymsgr:sendim?dai.thanhdat"><img border="0" align="middle" alt="Chát với Mr. Đại" src="http://opi.yahoo.com/online?u=dai.thanhdat&amp;m=g&amp;t=5" /></a>
                                    <span class="name">&nbsp;&nbsp;Mr. Đại</span> <span class="phone">
                                    &nbsp;&nbsp;09.456.11011</span>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="nick">
                                    <a href="ymsgr:sendim?nham.thadaco"><img border="0" align="middle" alt="Chát với Mr Nhậm" src="http://opi.yahoo.com/online?u=nham.thadaco&amp;m=g&amp;t=5" /></a>
                                    <span class="name">&nbsp;&nbsp;Mr Nhậm</span> <span class="phone">
                                    &nbsp;&nbsp;0966.688.169</span>
                                 </td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="clear">
                  </div>
                  <div style="margin-top: 5px">
                     <div id="FaceBookControl1_pnlFacebook">
                        <iframe width="240" scrolling="no" height="290" frameborder="0" src="/FacebookFrame.aspx">
                        </iframe>
                     </div>
                  </div>
                  <div class="clear">
                  </div>
                  <div class="block">
                     <div class="title">
                        <h3>
                           Tin tức
                        </h3>
                     </div>
                     <div class="news-box">
                        <div id="NewsBoxControl1_rptArticleList_div_0" class="first">
                           <a id="NewsBoxControl1_rptArticleList_hplImage_0" title="Tin triển lãm" href="http://thangnhom.net.vn/18/tin-trien-lam.aspx"><img id="NewsBoxControl1_rptArticleList_img_0" src="/upload/images/article/Tin-trien-lam.jpg?width=50&amp;height=50&amp;mode=crop" alt="Tin triển lãm" style="width:50px;" /></a>
                           <a id="NewsBoxControl1_rptArticleList_hplTitle_0" title="Tin triển lãm" href="http://thangnhom.net.vn/18/tin-trien-lam.aspx">Tin triển lãm</a>
                        </div>
                        <div id="NewsBoxControl1_rptArticleList_div_1">
                           <a id="NewsBoxControl1_rptArticleList_hplImage_1" title="Thang nhôm ghế, thang chữ A cố định" href="http://thangnhom.net.vn/30/thang-nhom-ghe-thang-chu-a-co-dinh.aspx"><img id="NewsBoxControl1_rptArticleList_img_1" src="/upload/images/article/Thang-nhom-ghe-thang-chu-A-co-dinh.jpg?width=50&amp;height=50&amp;mode=crop" alt="Thang nhôm ghế, thang chữ A cố định" style="width:50px;" /></a>
                           <a id="NewsBoxControl1_rptArticleList_hplTitle_1" title="Thang nhôm ghế, thang chữ A cố định" href="http://thangnhom.net.vn/30/thang-nhom-ghe-thang-chu-a-co-dinh.aspx">Thang nhôm ghế, thang chữ A cố định</a>
                        </div>
                        <div id="NewsBoxControl1_rptArticleList_div_2">
                           <a id="NewsBoxControl1_rptArticleList_hplImage_2" title="Chọn thang nhôm cho người lớn tuổi ?" href="http://thangnhom.net.vn/35/chon-thang-nhom-cho-nguoi-lon-tuoi.aspx"><img id="NewsBoxControl1_rptArticleList_img_2" src="/upload/images/article/Chon-thang-nhom-cho-nguoi-lon-tuoi.jpg?width=50&amp;height=50&amp;mode=crop" alt="Chọn thang nhôm cho người lớn tuổi ?" style="width:50px;" /></a>
                           <a id="NewsBoxControl1_rptArticleList_hplTitle_2" title="Chọn thang nhôm cho người lớn tuổi ?" href="http://thangnhom.net.vn/35/chon-thang-nhom-cho-nguoi-lon-tuoi.aspx">Chọn thang nhôm cho người lớn tuổi ?</a>
                        </div>
                        <div id="NewsBoxControl1_rptArticleList_div_3">
                           <a id="NewsBoxControl1_rptArticleList_hplImage_3" title="Thông báo lịch Nghỉ Tết Nguyên Đán năm 2014" href="http://thangnhom.net.vn/38/thong-bao-lich-nghi-tet-nguyen-dan-nam-2014.aspx"><img id="NewsBoxControl1_rptArticleList_img_3" src="/upload/images/article/nopic.gif?width=50&amp;height=50&amp;mode=crop" alt="Thông báo lịch Nghỉ Tết Nguyên Đán năm 2014" style="width:50px;" /></a>
                           <a id="NewsBoxControl1_rptArticleList_hplTitle_3" title="Thông báo lịch Nghỉ Tết Nguyên Đán năm 2014" href="http://thangnhom.net.vn/38/thong-bao-lich-nghi-tet-nguyen-dan-nam-2014.aspx">Thông báo lịch Nghỉ Tết Nguyên Đán năm 2014</a>
                        </div>
                        <div id="NewsBoxControl1_rptArticleList_div_4">
                           <a id="NewsBoxControl1_rptArticleList_hplImage_4" title="Thang nhôm sử dụng trong nhà kho" href="http://thangnhom.net.vn/39/thang-nhom-su-dung-trong-nha-kho.aspx"><img id="NewsBoxControl1_rptArticleList_img_4" src="/upload/images/article/Thang-nhom-su-dung-trong-nha-kho.jpg?width=50&amp;height=50&amp;mode=crop" alt="Thang nhôm sử dụng trong nhà kho" style="width:50px;" /></a>
                           <a id="NewsBoxControl1_rptArticleList_hplTitle_4" title="Thang nhôm sử dụng trong nhà kho" href="http://thangnhom.net.vn/39/thang-nhom-su-dung-trong-nha-kho.aspx">Thang nhôm sử dụng trong nhà kho</a>
                        </div>
                        <div id="NewsBoxControl1_rptArticleList_div_5">
                           <a id="NewsBoxControl1_rptArticleList_hplImage_5" title="HASEGAWA – Thương hiệu thang nhôm chất lượng và uy tín" href="http://thangnhom.net.vn/40/hasegawa-%e2%80%93-thuong-hieu-thang-nhom-chat-luong-va-uy-tin.aspx"><img id="NewsBoxControl1_rptArticleList_img_5" src="/upload/images/article/HASEGAWA-%e2%80%93-Thuong-hieu-thang-nhom-chat-luong.jpg?width=50&amp;height=50&amp;mode=crop" alt="HASEGAWA – Thương hiệu thang nhôm chất lượng và uy tín" style="width:50px;" /></a>
                           <a id="NewsBoxControl1_rptArticleList_hplTitle_5" title="HASEGAWA – Thương hiệu thang nhôm chất lượng và uy tín" href="http://thangnhom.net.vn/40/hasegawa-%e2%80%93-thuong-hieu-thang-nhom-chat-luong-va-uy-tin.aspx">HASEGAWA – Thương hiệu thang nhôm chất lượng và uy tín</a>
                        </div>
                        <div id="NewsBoxControl1_rptArticleList_div_6">
                           <a id="NewsBoxControl1_rptArticleList_hplImage_6" title="Ưu và nhược điểm của mỗi loại thang" href="http://thangnhom.net.vn/44/uu-va-nhuoc-diem-cua-moi-loai-thang.aspx"><img id="NewsBoxControl1_rptArticleList_img_6" src="/upload/images/article/Uu-va-nhuoc-diem-cua-moi-loai-thang.jpg?width=50&amp;height=50&amp;mode=crop" alt="Ưu và nhược điểm của mỗi loại thang" style="width:50px;" /></a>
                           <a id="NewsBoxControl1_rptArticleList_hplTitle_6" title="Ưu và nhược điểm của mỗi loại thang" href="http://thangnhom.net.vn/44/uu-va-nhuoc-diem-cua-moi-loai-thang.aspx">Ưu và nhược điểm của mỗi loại thang</a>
                        </div>
                     </div>
                  </div>
                  <div class="clear">
                  </div>
                  <div class="box-none-title">
                     <a id="AdsControl1_rptAdvertise_hpl_0" href="http://thangnhom.net.vn/m8/Thanh-toan-va-van-chuyen.aspx"><img alt="Máy quẹt thẻ" src="http://danguitar.vn/upload/images/ads/mayquetthe.jpg?width=200&quality=100" /></a>
                     <a id="AdsControl1_rptAdvertise_hpl_1"><img alt="Thang gấp" src="/upload/images/ads/thang-gap-28.jpg?width=200&quality=100" /></a>
                     <a id="AdsControl1_rptAdvertise_hpl_2"><img alt="" src="/upload/images/ads/thang-nhom-43.jpg?width=200&quality=100" /></a>
                     <a id="AdsControl1_rptAdvertise_hpl_3"><img alt="" src="/upload/images/ads/20000697.jpg?width=200&quality=100" /></a>
                  </div>
                  <div class="block">
                     <div class="title">
                        <h3>
                           Thống kê truy cập
                        </h3>
                     </div>
                     <div class="link">
                        <center>
                           <!-- Histats.com  START  (standard)-->
                           <script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
                           <a href="http://www.histats.com" target="_blank" title="web statistics" >
                              <script  type="text/javascript" >
                                 try {Histats.start(1,2171565,4,471,112,61,"00011111");
                                 Histats.track_hits();} catch(err){};
                              </script>
                           </a>
                           <noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2171565&101" alt="web statistics" border="0"></a></noscript>
                           <!-- Histats.com  END  -->
                        </center>
                     </div>
                  </div>
               </div>
               <div class="clear">
               </div>
               <div class="thumb-slider">
                  <ul id="mycarousel" class="jcarousel-skin-tango">
                     <li>
                        <a id="LogoControl1_rptAdvertise2_hpl1_0" href="http://thadaco.vn" target="_new"><img alt="" src="/upload/images/ads/logo.png?width=160&height=80&quality=100" height="80" width="160" /></a>
                     </li>
                     <li>
                        <a id="LogoControl1_rptAdvertise2_hpl1_1" href="http://nhaccu.com.vn"><img alt="" src="/upload/images/ads/tidaco.png?width=160&height=80&quality=100" height="80" width="160" /></a>
                     </li>
                     <li>
                        <a id="LogoControl1_rptAdvertise2_hpl1_2" href="http://thangnhom.net.vn/thang-nhom-tungshing.aspx"><img alt="" src="/upload/images/ads/tungshing.jpg?width=160&height=80&quality=100" height="80" width="160" /></a>
                     </li>
                     <li>
                        <a id="LogoControl1_rptAdvertise2_hpl1_3" href="http://thangnhom.net.vn/thang-nhom-dai-loan.aspx"><img alt="" src="/upload/images/ads/PAL(1).gif" height="80" width="160" /></a>
                     </li>
                     <li>
                        <a id="LogoControl1_rptAdvertise2_hpl1_4" href="http://thangnhom.net.vn/thang-nhom-nhat-ban.aspx"><img alt="" src="/upload/images/ads/hasigawa.gif" height="80" width="160" /></a>
                     </li>
                     <li>
                        <a id="LogoControl1_rptAdvertise2_hpl1_5" href="http://www.microsoft.com/net" target="_new"><img alt="công nghệ asp.net" src="/upload/images/ads/NetLogo.jpg?width=160&height=80&quality=100" height="80" width="160" /></a>
                     </li>
                     <li>
                        <a id="LogoControl1_rptAdvertise2_hpl1_6" href="http://www.microsoft.com/sqlserver/"><img alt="công nghệ Sql Server" src="/upload/images/ads/sql-server-logo.png?width=160&height=80&quality=100" height="80" width="160" /></a>
                     </li>
                  </ul>
               </div>
               <div class="clear">
               </div>
            </div>
         </div>
         <div class="menu-hoz1">
            <div class="menu-horizontal1">
               <ul>
                  <li id="MenuTop2Control1_rptTopMenu2_li_0" class="first">
                     <a id="MenuTop2Control1_rptTopMenu2_hplLink_0" title="Trang chủ" href="http://thangnhom.net.vn/">Trang chủ</a>
                  </li>
                  <li id="MenuTop2Control1_rptTopMenu2_li_1">
                     <a id="MenuTop2Control1_rptTopMenu2_hplLink_1" title="Giới thiệu" href="http://thangnhom.net.vn/m2/Gioi-thieu.aspx">Giới thiệu</a>
                  </li>
                  <li id="MenuTop2Control1_rptTopMenu2_li_2">
                     <a id="MenuTop2Control1_rptTopMenu2_hplLink_2" title="Tin tức" href="http://thangnhom.net.vn/c7/tin-tuc.aspx">Tin tức</a>
                  </li>
                  <li id="MenuTop2Control1_rptTopMenu2_li_3">
                     <a id="MenuTop2Control1_rptTopMenu2_hplLink_3" title="Thanh toán và vận chuyển" href="http://thangnhom.net.vn/m8/Thanh-toan-va-van-chuyen.aspx">Thanh toán và vận chuyển</a>
                  </li>
                  <li id="MenuTop2Control1_rptTopMenu2_li_4">
                     <a id="MenuTop2Control1_rptTopMenu2_hplLink_4" title="Bản đồ" href="http://thangnhom.net.vn/Maps.aspx">Bản đồ</a>
                  </li>
                  <li id="MenuTop2Control1_rptTopMenu2_li_5">
                     <a id="MenuTop2Control1_rptTopMenu2_hplLink_5" title="Liên hệ với chúng tôi" href="/contact.aspx">Liên hệ với chúng tôi</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="clear">
         </div>
         <div class="clear">
         </div>
         <div id="footer">
            <table border="0" width="100%">
               <tbody>
                  <tr>
                     <td align="center" colspan="2">
                        <b>Công ty Cổ phần Thương mại và Dịch vụ Kỹ thuật THÀNH ĐẠT</b>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <p>
                           Trụ sở: Số 71 Đường bờ sông Quan Hoa - Phường Quan Hoa - Cầu Giấy - Hà Nội<br />
                           Điện thoại: (84-4) 37671380 / Fax:(84-4) 37671381- 0902122585<br />
                           website: <a href="http://sieuthitructuyen.net.vn/">http://sieuthitructuyen.net.vn</a>/ - Email: <a href="mailto:thanhdat@thadaco.vn">thanhdat@thadaco.vn</a>
                        </p>
                     </td>
                     <td>
                        <p style="padding-bottom: 0">
                           <b>Tại TP.HCM:</b> 207 Điện Biên Phủ – P.15 – Q. Bình Thạnh – TPHCM<br />
                           Điện thoại: 08.35144875 - 09456.11011 / Fax: 0835118092
                        </p>
                        <p style="padding-bottom: 0">
                           <strong>Tại Miền Trung:</strong> 109 Đường Cao xuân Huy, TP Vinh, Nghệ An<br />
                           &nbsp;Điện thoại: 0386.253.189 - Fax: 0386.253.198 - 0989343585
                        </p>
                     </td>
                  </tr>
                  <tr>
                     <td align="center" colspan="2">
                        <p style="padding-bottom: 0">
                           <span style="font-size: small;"><span style="font-family: Arial;">Giấy chứng nhận đăng ký kinh doanh số: </span></span><span style="font-size: small;"><span style="font-family: Arial;">0101516915<br />
                           Do: Sở kế hoạch và đầu tư thành phố Hà Nội cấp ngày 30 tháng 07 năm 2004</span></span>
                        </p>
                     </td>
                  </tr>
               </tbody>
            </table>
            <p>
               &nbsp;
            </p>
         </div>
         <div id="divBannerFloatLeft">
         </div>
         <div id="divBannerFloatRight">
         </div>
      </div>
	  
	  <script>
	  
	  function deleteItem(id)
	  {
	  	 $.ajax({
            url: app_main_url + '/home/product/ajax_delete_cart',
            type: 'POST',
            dataType: "html",
            data: {
                id_cart: id,
            },
            success: function(response) {
				
                $('#cart_content').html(response)
            },
            error: function(XMLHttpRequest, textStatus, exception) {
                alert("Ajax failure\n");
            },
            async: true
        });
	  }
	  </script>
      <script type="text/javascript">
         var _gaq = _gaq || [];
         _gaq.push(['_setAccount', 'UA-21718856-13']);
         _gaq.push(['_trackPageview']);
         
         (function() {
           var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
           ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
           var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
         })();
         
      </script>
      <script type="text/javascript">
         /* <![CDATA[ */
         var google_conversion_id = 982332647;
         var google_custom_params = window.google_tag_params;
         var google_remarketing_only = true;
         /* ]]> */
      </script>
      <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
      <noscript>
         <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/982332647/?value=0&amp;guid=ON&amp;script=0"/>
         </div>
      </noscript>
   </body>
</html>