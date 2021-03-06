<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title><?php echo $header['title']?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="title" content="<?php echo $header['title']?>" />
		<meta name="ROBOTS" content="<?php echo $header['robots']?>" />
		<meta name="google-site-verification" content="3bw3BmjnA7mCnF4wmWLh1HTdWVFT-ClaJ0uxDDy3_r4" />
		<link rel="canonical" href="<?php echo full_url_($_SERVER);?>"/>		
		<meta property="og:url" content="<?php echo full_url_($_SERVER);?>" />
		<meta property="og:title" content="<?php echo $header['title']?>" />
		<meta property="og:description" content="<?php echo $header['description']?>" />
		<meta property="og:image" content="<?php echo base_url();?>file/uploads/logo/<?php echo $header['logo']?>" />
		<meta name="keywords" content="<?php echo $header['keywords']?>" />
		<meta name="description" content="<?php echo $header['description']?>" />
    
      <link href="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/css/ovhand.min.css" media="screen" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/css/ovhand-theme.min.css" media="screen" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/css/style.css" media="screen" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/favicon.ico" rel="shortcut icon" type="image/x-icon" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/jquery.min.js"></script>
	  <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/paging.js"></script>   
	  <link href="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/popup/linhnguyen.css" media="screen" rel="stylesheet" type="text/css">
	  <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/popup/jquery.popup.js"></script> 
	  </head>
   <body>
   <?php 
   if(!empty($sale_list_rand))
   {
   ?>
   <script type="text/javascript">
			$(window).load(function() {
			 if(document.cookie.indexOf("adf") == -1)
	       	 {
	            document.cookie = "popunder1=adf";
	            jQuery('#myModal').linhnguyen(jQuery('#myModal').data());
	         }
			});
		</script>
   <div id="myModal" class="linhnguyen-modal" style="top: 300px !important;">
			<a href="<?php echo $sale_list_rand[0]['url']?>">
			<img width="600" height="450" src="<?php echo base_url();?>file/uploads/slide/<?php echo $sale_list_rand[0]['image']?>" />
			</a>
			<a class="close-linhnguyen-modal">X</a>
		</div>	
		<?php } ?>
   <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5SBRV2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5SBRV2');</script>
<!-- End Google Tag Manager -->

   <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=771797639499496&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
      <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-4 col-lg-3 logo">
                  <a href="/"><img width="130" height="130"
                     src="<?php echo base_url();?>file/uploads/logo/<?php echo $header['logo']?>" /></a>
               </div>
               <div class="col-md-9 col-sm-8 col-lg-9">
                  <div class="pull-right">
                     <ul class="nav nav-pills">
					 <?php 
					  $this->load->model('faqhomemodel');
					  $list_phia_nam = $this->faqhomemodel->about(1);
					  ?>
                        <li class="active"><a href="#"><i
                           class="glyphicon glyphicon-phone"></i>&nbsp;Hotline : <?php echo $list_phia_nam[0]['phone']?></a></li>
                        <li><a
                           href="<?php echo base_url();?>gio-hang"><i
                           class="glyphicon glyphicon-shopping-cart"></i>&nbsp;Giỏ hàng</a></li>
                        
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="navbar navbar-default background-orange">
               <!--                 <div class="navbar navbar-inverse"> -->
               <ul class="nav navbar-nav">
                  <li class=""><a href="<?php echo base_url();?>"><i
                     class="glyphicon glyphicon-home"></i>&nbsp;Trang chủ</a></li>
					<li><a
                     href="<?php echo base_url();?>gioi-thieu">Giới thiệu</a>
                  </li> 
                  <li><a
                     href="<?php echo base_url();?>san-pham">Sản phẩm</a>
                  </li>
				  <li><a
                     href="<?php echo base_url();?>cong-dung">Công dụng</a>
                  </li>
				  <li><a
                     href="<?php echo base_url();?>huong-dan-thanh-toan">Phương thức thanh toán</a>
                  </li>
				  <li><a
                     href="<?php echo base_url();?>sp-khuyen-mai">Khuyến mại</a>
                  </li>
                  <li><a
                     href="<?php echo base_url();?>hoi-dap">Hỏi đáp</a>
                  </li>
                  <li><a
                     href="<?php echo base_url();?>lien-he">Liên
                     hệ</a>
                  </li>
               </ul>
               <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
                  <form class="navbar-form" role="search"
                     action="<?php echo base_url();?>tim-kiem" method="get">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm"
                           name="key" id="srch-term"
                           value="">
                        <div class="input-group-btn">
                           <button class="btn btn-default" type="submit">
                           <i class="glyphicon glyphicon-search"></i>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>