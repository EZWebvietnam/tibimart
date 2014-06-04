<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Thông tin đặt hàng</title>
      <meta name="keywords" content="Checkout, Thang nhôm, thang các loại, thang chất lượng cao, thang giá rẻ, thang nhật bản" />
      <meta name="description" content="Checkout, Website Thang nhôm của công ty Cổ Phần Thương Mại và dịch vụ kỹ thuật Thành Đạt mang đến cho quý khách những sản phẩm thang nhôm chất lượng cao, giá cả phải chăng" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jquery.min.js"></script>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta http-equiv="Content-Language" content="vn" />
      
	   <link href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/css/style.css" rel="stylesheet" type="text/css" />
	  <link href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/css/jquery.ui.all.css" rel="stylesheet" type="text/css" />
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/BannerFloat.js"></script>
      <link href="/upload/files/icon/favicon.png" rel="shortcut icon" type="image/x-icon" />
      <link href="" rel="author" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jCarousel/jquery.jcarousel.min.js"></script>
      <link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jCarousel/skin.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jquery.hoveraccordion.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/tooltip/stickytooltip.js"></script>
	   <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	     
	  <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jquery.ui.addresspicker.js"></script>
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
	  <script>
  $(function() {
    var addresspicker = $( "#addresspicker" ).addresspicker({
      componentsFilter: 'country:FR'
    });
    var addresspickerMap = $( "#addresspicker_map" ).addresspicker({
      regionBias: "fr",
      updateCallback: showCallback,
      mapOptions: {
        zoom: 4,
        center: new google.maps.LatLng(46, 2),
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      },
      elements: {
        map:      "#map",
        lat:      "#lat",
        lng:      "#lng",
      }
    });

    var gmarker = addresspickerMap.addresspicker( "marker");
    gmarker.setVisible(true);
    addresspickerMap.addresspicker( "updatePosition");

    $('#reverseGeocode').change(function(){
      $("#addresspicker_map").addresspicker("option", "reverseGeocode", ($(this).val() === 'true'));
    });

    function showCallback(geocodeResult, parsedGeocodeResult){
      $('#callback_result').text(JSON.stringify(parsedGeocodeResult, null, 4));
    }
    // Update zoom field
    var map = $("#addresspicker_map").addresspicker("map");
    google.maps.event.addListener(map, 'idle', function(){
      $('#zoom').val(map.getZoom());
    });

  });
  </script>
  <style>
  	#map {
  border: 1px solid #DDD; 
  width:300px;
  height: 300px;
  margin: 10px 0 10px 0;
  -webkit-box-shadow: #AAA 0px 0px 15px;
}
  </style>
   </head>
   <body>
      <script src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/WebResource.axd?d=yH_knO62dgSkZMJdrAv-q4eO7fAzdf6_1UFo6wJYLFlP9s8LZlN3GXfPR3q9ohlmcUtdXiM7vLnAlTZho5JPp7NQfPs1&amp;t=635217244340000000" type="text/javascript"></script>
      <script src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/WebResource.axd?d=WUv4yxUpEd_cInXPTm2CZjcNpmpyabkHn_31UEPNd8ew8U7qQLd5oumu8IQMR1kPe6z7oSuePfAAiIGfNQH4nRTBHe6Jqmm57H2tpWshoYWAajEL0&amp;t=635217244340000000" type="text/javascript"></script>
      
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
               <input type="submit" name="ctl00$SearchBoxControl1$btnSearch" value="" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SearchBoxControl1$btnSearch&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="SearchBoxControl1_btnSearch" />
            </div>
         </div>
         <div class="clear">
         </div>
         <div id="content">
            <div class="wraper">
               <div id="large">
                  <ul id="crumbs">
                     <li><a href="/">Trang chủ</a></li>
                     <li>Checkout</li>
                  </ul>
                  <div class="clear">
                  </div>
                  <div class="module">
                     <div class="title" style="border-top: none">
                        <h3>
                           Thông tin đơn hàng
                        </h3>
                     </div>
                     <div class="clear">
                     </div>
					 <form method="post">
                     <div style="padding: 5px;">
                        <div style="padding: 20px; overflow: hidden">
                           <p style="padding-top: 10px; padding-bottom: 20px">
                              <b>Xin vui lòng điền đầy đủ thông tin dưới đây, chúng tôi sẽ liên hệ cho quý khách trước khi giao hàng</b><br/> Khi quý khách điền địa chỉ, chúng tôi sẽ hiển thị vị trí trên bản đồ, nếu thấy không đúng, quý khách vui lòng click chuột vào icon màu đỏ, di chuột đến địa chỉ chính xác.
                           </p>
                           <div style="padding-top: 0px;">
                              <div class="validation">
                                 <div id="ContentPlaceHolder1_ValidationSummary1" style="display:none;">
                                 </div>
                              </div>
                              <div style="float: left">
                                 <table width="650">
                                    <tr>
                                       <td style="width: 180px; height: 30px">
                                          Email người mua:
                                       </td>
                                       <td>
                                          <input name="email" type="text" id="ContentPlaceHolder1_txtEmail" style="width:250px;" />
                                          
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="height: 30px">
                                          Họ tên:
                                       </td>
                                       <td>
                                          <input name="fullname" type="text" id="ContentPlaceHolder1_txtFullName" style="width:250px;" />
                                          
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="height: 30px">
                                          Số điện thoại:
                                       </td>
                                       <td>
                                          <input name="phone" type="text" id="ContentPlaceHolder1_txtPhone" style="width:250px;" />
                                       </td>
                                    </tr>
									<tr>
                                       <td style="height: 30px">
                                          Hình thức giao hàng:
                                       </td>
                                       <td>
                                          <input  type="radio" name="radio" value="1"/>Giao hàng tận nơi<input  type="radio" name="radio" value="0"/>Nhận hàng tại shop
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="height: 30px">
                                          Địa chỉ nhận hàng:
                                       </td>
                                       <td>
                                          <input id="addresspicker_map" style="width:250px;"/>
										  <input id="addresspicker" type="hidden"/>
										  <input id="lat" name="lat" type="hidden"/>
										  <input id="lng" name="lng" type="hidden"/>
                                       </td>
                                    </tr>
									<tr>
                                       <td style="height: 30px">
                                          Map
                                       </td>
                                       <td>
                                          <div id="map"></div>
                                       </td>
                                    </tr>
									<tr>
                                       <td style="height: 30px">
                                          Chỉ dẫn đường đi tới shop
                                       </td>
                                       <td>
                                          <a id="chi_duong" href="#">Chỉ đường</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                       </td>
                                       <td style="padding: 10px 0">
                                          <input type="button" onclick="window.location.href='<?php echo base_url();?>gio-hang'"  value="Quay lại"  class="btn floatLeft" />
                                          <input type="submit" value="Hoàn tất"  class="btn floatLeft" />
                                       </td>
                                    </tr>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
					 </form>
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
	  	jQuery(document).ready(function(){
			$('#chi_duong').click(function(){
				var lat = $('#lat').val();
				var lng = $('#lng').val();
				url =app_main_url+'/chi-duong/?lng='+lng+'&lat='+lat;
				window.open(url,'_blank');
		});
		});
	  	
		
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