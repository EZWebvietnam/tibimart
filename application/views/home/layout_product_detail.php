<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title><?php echo $product_detail[0]['title']?></title>
      <meta name="keywords" content="<?php echo $product_detail[0]['title']?>" />
     <meta name="title" content="<?php echo $header['title']?>" />
	<meta name="ROBOTS" content="<?php echo $header['robots']?>" />
	<meta name="google-site-verification" content="WlnQ-eKKwnhOw3DVTstkNknRMNzlwQ8tHc3znnVab6o" />
	<link rel="canonical" href="<?php echo full_url_($_SERVER);?>"/>		
	<meta property="og:url" content="<?php echo full_url_($_SERVER);?>" />
	<meta property="og:title" content="<?php echo $header['title']?>" />
	<meta property="og:description" content="<?php echo $header['description']?>" />
	<meta property="og:image" content="<?php echo base_url();?>file/uploads/logo/<?php echo $header['logo']?>" />
	<meta name="description" content="<?php echo $header['description']?>" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/lightbox.js"></script>
      <link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/css/lightbox.css" type="text/css"
         media="screen" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta http-equiv="Content-Language" content="vn" />
      <link href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/css/style.css" rel="stylesheet" type="text/css" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/BannerFloat.js"></script>
      <link href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/favicon.ico" rel="shortcut icon" type="image/x-icon" />
      <link href="" rel="author" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jCarousel/jquery.jcarousel.min.js"></script>
      <link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jCarousel/skin.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jquery.hoveraccordion.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/tooltip/stickytooltip.js"></script>
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
      <script src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/WebResource.axd?d=yH_knO62dgSkZMJdrAv-q4eO7fAzdf6_1UFo6wJYLFlP9s8LZlN3GXfPR3q9ohlmcUtdXiM7vLnAlTZho5JPp7NQfPs1&amp;t=635217244340000000" type="text/javascript"></script>
      <script src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/ScriptResource.axd?d=FT0sZ6DJXh88_he9K3y35Ha_j3Oy-HTL25Wn9D-sv3b8ZQ7IsY5mzvxKrithbaC10wEBLvEgFkg5z3OVAApfG2fYwU4YHufYH1sHNpboiljAPH2GlE4rzCNjbyknYJFFENJ_kQ2&amp;t=3a1336b1" type="text/javascript"></script>
      <script src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/ScriptResource.axd?d=InATtBY9SMXMN6YiHFOAM3tAqg1Ul9dJyaVMGpekziepxg5Nux7tpo7AKWKfCViLmDyrDq2aKjc2WLg2ULQfV9mnOL-b-ZbflY-jU7Tc9CNluJbfak0H4M5MutuktCg9szivHV5PsyAZvTZro1cEUOyWnpU1&amp;t=3a1336b1" type="text/javascript"></script>
      <div id="container">
         <div id="head">
            <a href="/">
            <img width="288" height="80" id="HeaderControl1_imgLogo" title="<?php echo $header['title']?>" class="logo" src="<?php echo base_url();?>file/uploads/logo/<?php echo $header['logo']?>" />
            </a>
            <div class="hotline-head">
               <div class="hotline">
	<span>Phía Bắc:</span> <?php echo $about[1]['phone']?><br />
	<span>Phía Nam:</span> <?php echo $about[0]['phone']?></div>
               <div class="opentime">
                  Giờ mở cửa: <b>8h00 - 18h00</b> <i>(tất cả các ngày trong tuần)</i><br />
                  
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
                    <a id="MenuTopControl1_rptTopMenu2_hplLink_0" title="Trang chủ" href="<?php echo base_url();?>">Trang chủ</a></li>
            
                <li id="MenuTopControl1_rptTopMenu2_li_1">
                    <a id="MenuTopControl1_rptTopMenu2_hplLink_1" title="Giới thiệu" href="<?php echo base_url();?>san-pham">Sản phẩm</a></li>
            
                <li id="MenuTopControl1_rptTopMenu2_li_2">
                    <a id="MenuTopControl1_rptTopMenu2_hplLink_2" title="Tin tức" href="<?php echo base_url();?>hoi-dap">Hỏi đáp</a></li>
            
                <li id="MenuTopControl1_rptTopMenu2_li_3">
                    <a id="MenuTopControl1_rptTopMenu2_hplLink_3" title="Thanh toán và vận chuyển" href="<?php echo base_url();?>huong-dan-thanh-toan">Thanh toán và vận chuyển</a></li>
            
            
                <li id="MenuTopControl1_rptTopMenu2_li_5">
                    <a id="MenuTopControl1_rptTopMenu2_hplLink_5" title="Liên hệ với chúng tôi" href="<?php echo base_url();?>lien-he">Liên hệ</a></li>
            
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
                     <li><a href="<?php echo full_url_($_SERVER);?>"><?php echo $product_detail[0]['title']?></a></li>
                  </ul>
                  <div class="clear">
                  </div>
                  <span id="ContentPlaceHolder1_lblNotice" style="font-weight:bold;"></span>
                  <input type="hidden" name="ctl00$ContentPlaceHolder1$hdfID" id="ContentPlaceHolder1_hdfID" value="11" />
                  <div class="details-img">
                     <a id="ContentPlaceHolder1_hplImage">
                     <?php 
                     if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_detail[0]['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_detail[0]['image']) && $product_detail[0]['image']!='')
                     {
                     ?>
                     <img id="ContentPlaceHolder1_img" src="<?php echo base_url();?>file/uploads/product/<?php echo $product_detail[0]['image'] ?>" alt="<?php echo $product_detail[0]['title'] ?>" width="200"/>
                     <?php } else { ?>
                     <img id="ContentPlaceHolder1_img" src="<?php echo base_url();?>file/uploads/no_image.gif" alt="<?php echo $product_detail[0]['title'] ?>" width="200"/>
                     <?php } ?>
                     </a>
                  </div>
                  <div class="details-info">
                     <h1>
                        <?php echo $product_detail[0]['title'] ?>
                     </h1>
                     <div class="clear">
                     </div>
                     <div class="info">
                        <div class="left">
                           Giá
                        </div>
                        <div class="right">
                           <span class="price">
						   <?php 
						   $price_sale = $this->producthomemodel->get_sale_off_product($product_detail[0]['id_product']);
							$price = 0;
							if(empty($price_sale))
							{
								$price = $product_detail[0]['price'];
							}
							else
							{
								$price = ($product_detail[0]['price'] - $product_detail[0]['price'] *($price_sale[0]['percent']/100));
							}
						   ?>
                           <?php echo number_format($price)?> VNĐ</span>
                           (Chưa VAT)
                        </div>
                        <div class="clear">
                        </div>
                        <div class="left">
                           Tình trạng
                        </div>
                        <div class="right">
                           <img id="ContentPlaceHolder1_imgStatus" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/images/ico_available.gif" />
                           &nbsp;Có hàng
                        </div><br/>
                        
                        <div class="right">
                         <b>QR Code (Scan)</b>:
                           <script type="text/javascript">

							var uri=window.location.href;

							document.write("<img src='http://api.qrserver.com/v1/create-qr-code/?data="+encodeURI(uri)+"&size=100x100'/>");

							</script>
                        </div>
                        <div class="clear">
                        </div>
                        <div class="clear">
                        </div>
                        <div class="clear">
                        </div>
                     </div>
                     <div class="clear">
                     </div>
                     <form name="addToCart" method="post">
                     <input type="hidden" name="cart" value="1"/>
                     <input type="hidden" name="id_product" value="<?php echo $product_detail[0]['id_product']?>"/>
                     <a id="ContentPlaceHolder1_btnAddCart" class="addcart" href="javascript:addToCart()">Thêm vào giỏ hàng</a>
                     <div class="info">
                    <div class="left"> Số lượng:</div>
                    <div class="right">
                    <select name="quantity" id="quantity">
                     	<option value="1">1</option>
                     	<option value="2">2</option>
                     	<option value="3">3</option>
                     	<option value="4">4</option>
                     	<option value="5">5</option>
                     </select>
                     </div>
                     </div>
                     </form>
                     <div class="action">
                        <a id="ContentPlaceHolder1_hplBaoGia" class="baogia" href="/InBaoGia/AddInfo.aspx?pid=11" target="_blank">In báo giá</a>
                        <a id="ContentPlaceHolder1_hplEdit" class="edit">Sửa</a>
                     </div>
                     <div class="clear">
                     </div>
                     <input type="hidden" name="ctl00$ContentPlaceHolder1$RatingControl1$hdfID" id="ContentPlaceHolder1_RatingControl1_hdfID" value="0" />
                     <input type="hidden" name="ctl00$ContentPlaceHolder1$RatingControl1$HdfModuls" id="ContentPlaceHolder1_RatingControl1_HdfModuls" />
                     <input type="hidden" name="ctl00$ContentPlaceHolder1$RatingControl1$hdfTotalRating" id="ContentPlaceHolder1_RatingControl1_hdfTotalRating" value="23" />
                     <div class="ratinglike">
                        <div style="padding: 5px 0 0px 0; width: 370px; float: right;">
                           <div class="demoarea" style="width:200px; float:left; margin-top:2px">
                              <div id="ContentPlaceHolder1_RatingControl1_up1">
                                 <div id="ContentPlaceHolder1_RatingControl1_ratingControl" style="float: left; padding-right: 5px">
                                    <input type="hidden" name="ctl00$ContentPlaceHolder1$RatingControl1$ratingControl_RatingExtender_ClientState" id="ContentPlaceHolder1_RatingControl1_ratingControl_RatingExtender_ClientState" value="8" /><a href="javascript:void(0)" id="ContentPlaceHolder1_RatingControl1_ratingControl_A" title="8" style="text-decoration:none"><span id="ContentPlaceHolder1_RatingControl1_ratingControl_Star_1" class="rating ratingFill" style="float:left;">&nbsp;</span><span id="ContentPlaceHolder1_RatingControl1_ratingControl_Star_2" class="rating ratingFill" style="float:left;">&nbsp;</span><span id="ContentPlaceHolder1_RatingControl1_ratingControl_Star_3" class="rating ratingFill" style="float:left;">&nbsp;</span><span id="ContentPlaceHolder1_RatingControl1_ratingControl_Star_4" class="rating ratingFill" style="float:left;">&nbsp;</span><span id="ContentPlaceHolder1_RatingControl1_ratingControl_Star_5" class="rating ratingFill" style="float:left;">&nbsp;</span><span id="ContentPlaceHolder1_RatingControl1_ratingControl_Star_6" class="rating ratingFill" style="float:left;">&nbsp;</span><span id="ContentPlaceHolder1_RatingControl1_ratingControl_Star_7" class="rating ratingFill" style="float:left;">&nbsp;</span><span id="ContentPlaceHolder1_RatingControl1_ratingControl_Star_8" class="rating ratingFill" style="float:left;">&nbsp;</span><span id="ContentPlaceHolder1_RatingControl1_ratingControl_Star_9" class="rating ratingEmpty" style="float:left;">&nbsp;</span><span id="ContentPlaceHolder1_RatingControl1_ratingControl_Star_10" class="rating ratingEmpty" style="float:left;">&nbsp;</span></a>
                                 </div>
                                 <span id="ContentPlaceHolder1_RatingControl1_ltrRating" style="line-height: 12px; color: #7F7F7F">23 đánh giá</span>
                              </div>
                           </div>
                           <div style="width: 150px; float: right">
                              <!-- AddThis Button BEGIN -->
                              <div class="addthis_toolbox addthis_default_style ">
                                 <a class="addthis_button_google_plusone_share"></a><a class="addthis_button_facebook">
                                 </a><a class="addthis_button_zingme"></a><a class="addthis_button_twitter"></a><a
                                    class="addthis_button_blogger"></a><a class="addthis_button_email"></a><a class="addthis_button_compact">
                                 </a>
                              </div>
                              <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=tuanson"></script>
                              <!-- AddThis Button END -->
                           </div>
                        </div>
                        <div style="display:none" xmlns:v="http://rdf.data-vocabulary.org/#" typeof="v:Review">
                           <span property="v:itemreviewed">http://thangnhom.net.vn/</span> Đánh giá bởi <span property="v:reviewer">
                           hơn 5600 khách hàng</span>. Kết quả bình chọn: <span property="v:rating">
                           8</span> <span property="v:best">10</span>
                        </div>
                     </div>
                  </div>
                  <div class="clear">
                  </div>
                  <div id="ContentPlaceHolder1_pnlTag">
                     <div class="tagLeft">
                     </div>
                     <div class="tagMid">
                        <div class="tag">
                        </div>
                        <div class="wordTag">
                           
                        </div>
                     </div>
                     <div class="tagRight">
                     </div>
                  </div>
                  <div class="clear">
                  </div>
                  <div class="tab-product-details">
                     <ul class="tabs1">
                        <li id="ContentPlaceHolder1_li_chitiet" class="active"><a href="#chitiet">Chi tiết tính năng</a></li>
                     </ul>
                     <div class="tab_container">
                        <div class="tab_content1" id="chitiet" style="display: block;">
                           <div class="tab_content" id="chitiet" style="display: block;">
                              <?php echo $product_detail[0]['content'];?>
                           </div>
                           <p>
                              &nbsp;
                           </p>
                        </div>
                        <div class="tab_content1" id="baiviet" style="display: none;">
                        </div>
                        <div class="tab_content1" id="hinhanh" style="display: none;">
                        </div>
                        <div class="tab_content1" id="video" style="display: none;">
                        </div>
                        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=771797639499496&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="<?php echo full_url_($_SERVER);?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<g:plusone></g:plusone>
                      <center><div class="fb-comments" data-href="<?php echo full_url_($_SERVER);?>" data-numposts="5" data-colorscheme="light"></div></center>
                     </div>
                  </div>
                  <script type="text/javascript">
                     $(document).ready(function () {
                     
                         $(".tab_content1").hide();
                         $("ul.tabs1 li:first").addClass("active").show();
                         $(".tab_content1:first").show();
                     
                         //On Click Event
                         $("ul.tabs1 li").click(function () {
                             $("ul.tabs1 li").removeClass("active");
                             $(this).addClass("active");
                             $(".tab_content1").hide();
                             var activeTab = $(this).find("a").attr("href");
                             $(activeTab).fadeIn();
                     
                             return false;
                         });
                     });
                  </script>
                  <div class="clear">
                  </div>
                  <div class="module">
                     <div class="title">
                        <h2>
                           Sản phẩm cùng loại
                        </h2>
                     </div>
                     <div class="clear">
                     </div>
                     <div class="tab-products">
                        <div style="" class="tabcontainer">
                        <?php 
                        foreach($list_product_cate as $p_cate)
                        {
							 $price_sale = $this->producthomemodel->get_sale_off_product($p_cate['id_product']);
							$price = 0;
							if(empty($price_sale))
							{
								$price = $p_cate['price'];
							}
							else
							{
								$price = ($p_cate['price'] - $p_cate['price'] *($price_sale[0]['percent']/100));
							}
                        ?>
                           <div class="sanpham_tab">
                              <center>
                                 <a id="ContentPlaceHolder1_ProductListControl1_rpt1_hplImg_0" data-tooltip="sticky11-0" href="<?php echo base_url();?>san-pham/<?php echo $p_cate['id_product']?>-<?php echo mb_strtolower(url_title(removesign($p_cate['title'])));?>">
                                 <?php 
                     if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$p_cate['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$p_cate['image']) && $p_cate['image']!='')
                     {
                     ?>
                                 <img id="ContentPlaceHolder1_ProductListControl1_rpt1_img_0" src="<?php echo base_url();?>file/uploads/product/<?php echo $p_cate['image']?>" width="160" height="160" alt="<?php echo $p_cate['title']?>" />
                                 <?php } else {?>
                                   <img id="ContentPlaceHolder1_ProductListControl1_rpt1_img_0" src="<?php echo base_url();?>file/uploads/no_image.gif" width="160" height="160" alt="<?php echo $p_cate['title']?>" />
                                 <?php } ?>
                                 </a>
                              </center>
                              <p>
                                 <a id="ContentPlaceHolder1_ProductListControl1_rpt1_hplTitle_0" data-tooltip="sticky11-0" href="http://thangnhom.net.vn/thang-nhom-nhat-ban/thang-nhom-hasegawa-japan-rs-12.aspx"><?php echo $p_cate['title'];?></a>
                              </p>
                              Giá: <span class="price">
                              <?php echo number_format($price);?> VNĐ</span>
                           </div>
                         <?php } ?>  
                           
                           
                           <div id="ContentPlaceHolder1_ProductListControl1_rpt1_div_space_3" class="clear">
                           </div>
                           
                           <div id="ContentPlaceHolder1_ProductListControl1_pnlList" class="prd-list">
                              <div class="clear">
                              </div>
                           </div>
                           <div class="clear"></div>
                        </div>
                     </div>
                  </div>
                  <div class="clear">
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
                		<?php 
						foreach($list_cate as $l_cate)
						{
						?>
                        <li>
                            <a id="MenuVerticalControl1_rptParent_hplLinkParent_0" href="<?php echo base_url();?>san-pham/c/<?php echo $l_cate['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($l_cate['title'])));?>"><?php echo $l_cate['title']?></a>
                            
                        </li>
						<?php } ?>
                    
            </ul>
         
        </div>
                     </div>
                   
                  </div>
                  <div class="clear">
                  </div>
                  <a href="<?php echo base_url();?>gio-hang" class="cart"><span class="text">Giỏ hàng của quý khách</span> <span class="quantity">
    <?php echo $count_cart;?></span> </a>
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
                   Bán hàng
                </td>
</tr>

            
            <tr>
            <td style="height:2px;">
           
            </td>
            </tr>
            
                   <?php 
            		foreach($list_yahoo as $yahoo_)
            		{
					
            		?>
                    <tr>
                        <td class="nick">
                            <a href="ymsgr:sendim?<?php echo $yahoo_['nick']?>"><img border="0" align="middle" alt="Chát với Mr. Thi" src="http://opi.yahoo.com/online?u=<?php echo $yahoo_['nick']?>&amp;m=g&amp;t=5" /></a>
                            <span class="name">&nbsp;&nbsp;<?php echo $yahoo_['name']?></span> <span class="phone">
                                &nbsp;&nbsp;<?php echo $yahoo_['phone']?></span>
                        </td>
                    </tr>
                	<?php } ?>
                
        </table>
                        </div>
                     </div>
                  </div>
                  <div class="clear">
                  </div>
                  <div style="margin-top: 5px">
                     <div id="FaceBookControl1_pnlFacebook">
					 <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Ftibimarthcm&amp;width=240&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=771797639499496" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:290px;" allowTransparency="true"></iframe>
                     </div>
                  </div>
                  <div class="clear">
                  </div>
                  <div class="block">
                     <div class="title">
                        <h3>
                           Hỏi đáp
                        </h3>
                     </div>
                     <div class="news-box">
                        
                        <?php 
		foreach($list_faq_rand as $faq_rand)
		{
		?>
                <div id="NewsBoxControl1_rptArticleList_div_<?php echo $faq_rand['id']?>" class="first">
                    <a id="NewsBoxControl1_rptArticleList_hplImage_0" title="<?php echo $faq_rand['title']?>" href="<?php echo base_url();?>hoi-dap-<?php echo $faq_rand['id']?>-<?php echo mb_strtolower(url_title(removesign($faq_rand['title'])))?>">
					<img id="NewsBoxControl1_rptArticleList_img_0" src="<?php echo base_url();?>file/uploads/faq.png" height="50" alt="<?php echo $faq_rand['title']?>" style="width:50px;" />
					</a>
                    <a id="NewsBoxControl1_rptArticleList_hplTitle_0" title="<?php echo $faq_rand['title']?>" href="<?php echo base_url();?>hoi-dap-<?php echo $faq_rand['id']?>-<?php echo mb_strtolower(url_title(removesign($faq_rand['title'])))?>"><?php echo $faq_rand['title']?></a>
                </div>
            <?php } ?>
                     </div>
                  </div>
                  <div class="clear">
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
<a href="http://www.histats.com" target="_blank" title="web stats analysis" ><script  type="text/javascript" >
try {Histats.start(1,2696468,4,103,102,47,"00010000");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2696468&101" alt="web stats analysis" border="0"></a></noscript>
<!-- Histats.com  END  -->
                        </center>
                     </div>
                  </div>
               </div>
               <div class="clear">
               </div>
			   <!--
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
               </div>-->
               <div class="clear">
               </div>
            </div>
         </div>
         <div class="menu-hoz1">
            <div class="menu-horizontal1">
               <ul>
        
                <li id="MenuTopControl1_rptTopMenu2_li_0" class="first">
                    <a id="MenuTopControl1_rptTopMenu2_hplLink_0" title="Trang chủ" href="<?php echo base_url();?>">Trang chủ</a></li>
            
                <li id="MenuTopControl1_rptTopMenu2_li_1">
                    <a id="MenuTopControl1_rptTopMenu2_hplLink_1" title="Giới thiệu" href="<?php echo base_url();?>san-pham">Sản phẩm</a></li>
            
                <li id="MenuTopControl1_rptTopMenu2_li_2">
                    <a id="MenuTopControl1_rptTopMenu2_hplLink_2" title="Tin tức" href="<?php echo base_url();?>hoi-dap">Hỏi đáp</a></li>
            
                <li id="MenuTopControl1_rptTopMenu2_li_3">
                    <a id="MenuTopControl1_rptTopMenu2_hplLink_3" title="Thanh toán và vận chuyển" href="<?php echo base_url();?>huong-dan-thanh-toan">Thanh toán và vận chuyển</a></li>
            
            
                <li id="MenuTopControl1_rptTopMenu2_li_5">
                    <a id="MenuTopControl1_rptTopMenu2_hplLink_5" title="Liên hệ với chúng tôi" href="<?php echo base_url();?>lien-he">Liên hệ</a></li>
            
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
                        <b>TIBIMART.COM</b>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <p>
                           Phía Bắc: <?php echo $about[1]['address']?><br />
                           
                        </p>
                     </td>
                     <td>
                        <p style="padding-bottom: 0">
                           <b>Tại TP.HCM:</b> <?php echo $about[0]['address']?><br />
                        </p>
                       
                     </td>
                  </tr>
                  <tr>
                     <td align="center" colspan="2">
                        <p style="padding-bottom: 0">
                           <span style="font-size: small;"><span style="font-family: Arial;">Desgin by <a href="https://www.facebook.com/ezwebvietnam">EZWeb Việt Nam</a> </span></span>
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
      	function addToCart()
		{
			document.forms.addToCart.submit();
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