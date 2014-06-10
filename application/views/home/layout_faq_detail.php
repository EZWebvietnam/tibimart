<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title><?php echo $faq_detail[0]['title']?></title>
      <meta vary="User-Agent" />
	<meta name="title" content="<?php echo $header['title']?>" />
	<meta name="ROBOTS" content="<?php echo $header['robots']?>" />
	<meta name="google-site-verification" content="WlnQ-eKKwnhOw3DVTstkNknRMNzlwQ8tHc3znnVab6o" />
	<link rel="canonical" href="<?php echo full_url_($_SERVER);?>"/>		
	<meta property="og:url" content="<?php echo full_url_($_SERVER);?>" />
	<meta property="og:title" content="<?php echo $header['title']?>" />
	<meta property="og:description" content="<?php echo $header['description']?>" />
	<meta property="og:image" content="<?php echo base_url();?>file/uploads/logo/<?php echo $header['logo']?>" />
	<meta name="keywords" content="<?php echo $header['keywords']?>" />
	<meta name="description" content="<?php echo $header['description']?>" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jquery.min.js"></script>
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
               
                     <?php echo $this->load->view($main_content);?>
                  
               </div>
               <div id="small">
                  <div class="block">
                     <?php 
                        $this->load->model('catehomemodel');
                        			foreach($list_cate as $l_cate)
                        			{
                        				$cate_ = $this->catehomemodel->list_cate_lable($l_cate['id_cate']);
                        			?>
                     <div class="menu-ver">
                        <div class="title">
                           <h3>
                              <?php echo $l_cate['title']?>
                           </h3>
                        </div>
                        <div class="bd">
                           <ul id="menu-ver">
                              <?php 
                                 foreach($cate_ as $cate_l)
                                 {
                                 ?>
                              <li>
                                 <a id="MenuVerticalControl1_rptParent_hplLinkParent_0" href="<?php echo base_url();?>san-pham/c/<?php echo $cate_l['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($cate_l['title'])));?>"><?php echo $cate_l['title']?></a>
                              </li>
                              <?php	
                                 }
                                 ?>
                           </ul>
                        </div>
                     </div>
                     <?php } ?>
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
                           Tin tức
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
                  <div class="box-none-title">
                    
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
<a href="http://www.histats.com" target="_blank" title="free web stats" ><script  type="text/javascript" >
try {Histats.start(1,2696468,4,432,112,75,"00011111");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2696468&101" alt="free web stats" border="0"></a></noscript>
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
					 	<img width="350" height="200" src="http://matongsonlam.com.vn/themes/ecom_theme/images/footer_flower.png">
                     </td>
                     <td>
					  	<p>
                           <b>Phía Bắc:</b> <?php echo nl2br($about[1]['address']);?><br />
                        </p>
                        <p style="padding-bottom: 0">
                           <b>Phía Nam:</b> <?php echo nl2br($about[0]['address'])?><br />
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