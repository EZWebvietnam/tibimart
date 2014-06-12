<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title><?php echo $header['title']?></title>
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
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link href="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/css/ovhand.min.css" media="screen" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/css/ovhand-theme.min.css" media="screen" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/css/style.css" media="screen" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/favicon.ico" rel="shortcut icon" type="image/x-icon" />
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/jquery.min.js"></script>
	  <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/paging.js"></script>   </head>
   <body>
      <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-4 col-lg-3 logo">
                  <a href="/"><img width="152" height="90"
                     src="<?php echo base_url();?>file/uploads/logo/<?php echo $header['logo']?>" /></a>
               </div>
               <div class="col-md-9 col-sm-8 col-lg-9">
                  <div class="pull-right">
                     <ul class="nav nav-pills">
                        <li class="active"><a href="#"><i
                           class="glyphicon glyphicon-phone"></i>&nbsp;Hotline : <?php echo $about[0]['phone']?></a></li>
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
                     href="<?php echo base_url();?>san-pham">Sản phẩm</a>
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
                     action="/application/product/search">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm"
                           name="search" id="srch-term"
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