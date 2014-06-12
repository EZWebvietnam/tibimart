<?php 
include('header.php');
?>
      <div class="content">
      <div class="container">
      <div class="image-slide thumbnail">
         <div id="carousel-slideshow-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#carousel-slideshow-generic" data-slide-to="0" class="active"></li>
               <li data-target="#carousel-slideshow-generic" data-slide-to="1" class=""></li>
               <li data-target="#carousel-slideshow-generic" data-slide-to="2" class=""></li>
               <li data-target="#carousel-slideshow-generic" data-slide-to="3" class=""></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
               <div class="item  active">
                  <a href="" target="_blank">
                  <img src="/img/slideshow/1396249907_533915337b01e.jpg" width="1140" height="400" alt="Content marketi">
                  </a>
               </div>
               <div class="item ">
                  <a href="" target="_blank">
                  <img src="/img/slideshow/1396261072_533940d028d2d.png" width="1140" height="400" alt="KICH BAN">
                  </a>
               </div>
               <div class="item ">
                  <a href="http://www.bongdaso.com/news.aspx" target="_blank">
                  <img src="/img/slideshow/1396265048_5339505899bcb.jpg" width="1140" height="400" alt="copywriter">
                  </a>
               </div>
               <div class="item ">
                  <a href="" target="_blank">
                  <img src="/img/slideshow/1396265377_533951a1938d5.png" width="1140" height="400" alt="CTV da nang">
                  </a>
               </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-slideshow-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-slideshow-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
         </div>
      </div>
      <div class="row">
         <h1 class="text-center slogan"><img src="img/slogan.png" /></h1>
         <div class="col-md-2 col-md-offset-1 text-center">
            <a href="/application/service/write"> <img class="img-circle "
               src="/img/vietkichban.png" width="128"
               height="128">
            </a>
            <h4 class="">
               <a href="/application/service/write" class=" ">Viết kịch bản</a>
            </h4>
         </div>
         <div class="col-md-2 text-center">
            <a href="/application/service/marketing"> <img class="img-circle"
               src="/img/onlinemarketing.png"
               width="128" height="128">
            </a>
            <h4 class="">
               <a href="/application/service/marketing" class="">Online marketing</a>
            </h4>
         </div>
         <div class="col-md-2 text-center">
            <a href="/application/service/pr"> <img class="img-circle"
               src="/img/vietbaipr.png" width="128"
               height="128">
            </a>
            <h4 class="text-center text-center">
               <a href="/application/service/pr" class="">Viết bài PR</a>
            </h4>
         </div>
         <div class="col-md-2 text-center">
            <a href="/application/product/list"> <img class="img-circle"
               src="/img/gianhangtructuyen.png" width="128"
               height="128">
            </a>
            <h4 class="">
               <a href="/application/product/list" class="">Gian hàng trực tuyến</a>
            </h4>
         </div>
         <div class="col-md-2 text-center">
            <a href="/application/service/collaborator"> <img class="img-circle"
               src="/img/congtacvien.png" width="128"
               height="128">
            </a>
            <h4 class="">
               <a href="/application/service/collaborator" class="">Cộng tác viên đa năng</a>
            </h4>
         </div>
      </div>
      <div class="row">
         <div id="product-sidebar" class="col-md-3 col-lg-3 col-sm-3">
            <div class="navbar navbar-default background-orange">
               <ul class="nav nav-stacked">
			   <?php 
			   foreach($list_cate as $cate)
			   {
			   		$cate_detail = $this->catehomemodel->list_cate_lable($cate['id_cate']);
			   ?>
                  <li <?Php if(!empty($cate_detail)) {?> class="dropdown  dropdown-submenu" <?php } ?>>
                     <a href="<?php echo base_url();?>san-pham/c/<?php echo $cate['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($cate['title']))) ?>">
                     <?php echo $cate['title'];?>	               </a>
                     <ul class="dropdown-menu">
					 	<?php foreach($cate_detail as $c_dt)
						{?>
                        <li><a href="<?php echo base_url();?>san-pham/c/<?php echo $c_dt['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($c_dt['title']))) ?>"><?php echo $c_dt['title'];?> </a></li>
						<?Php } ?>
                     </ul>
                  </li>
               <?php } ?>   
               </ul>
            </div>
			<div class="navbar navbar-default">
               <ul class="nav nav-stacked">
			   <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Ftibimarthcm&amp;width=261&amp;height=300&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=771797639499496" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:261px; height:300px;" allowtransparency="true"></iframe>
               </ul>
            </div>
			<div class="navbar navbar-default">
               <ul class="nav nav-stacked">
			   HỖ TRỢ TRỰC TUYẾN  <br>
			   <?php 
            		foreach($list_yahoo as $yahoo_)
            		{
					
            		?>
                   <a href="ymsgr:sendim?<?php echo $yahoo_['nick']?>"><img border="0" align="middle" alt="Chát với Mr. Thi" src="http://opi.yahoo.com/online?u=<?php echo $yahoo_['nick']?>&amp;m=g&amp;t=1" /></a>
                            <span class="name">&nbsp;&nbsp;<?php echo $yahoo_['name']?></span> <span class="phone">
                                &nbsp;&nbsp;<?php echo $yahoo_['phone']?></span><br>                    
                	<?php } ?>
               </ul>
            </div>
         </div>
         <div class="col-lg-9 col-sm-9 col-md-9" id="feature-product">
            <h1 class="text-center text-color-orange">SẢN PHẨM NỔI BẬT</h1>
			<div class="row">
			<?php 
			$i = 1;
			foreach($list_product_random as $product_rand)
			{
				$product_sale = $this->producthomemodel->get_sale_off_product($product_rand['id_product']);
			?>
               <div class="col-md-4 col-lg-4 col-sm-4">
                  <div class="thumbnail " >
                     <div class="myhovercontent">
					 	<?php 
						if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_rand['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_rand['image']) && $product_rand['image']!='')
						{
						?>
                        <img class="text-center" src="<?php echo base_url();?>file/uploads/product/<?php echo $product_rand['image']?>"   height="150" "alt="">
						<?php } else { ?>
						<img class="text-center" src="<?php echo base_url();?>file/uploads/no_image.gif"   height="150" "alt="">
						<?php } ?>
						<?php 
						if(!empty($product_sale))
						   {
						   	
						?>
                        <div class="discount_star">-<?php echo $product_sale[0]['percent'];?>%</div>
						<?php } ?>
                     </div>
                     <div  class="contenthover">
                        <a href="<?php echo base_url();?>san-pham/<?php echo $product_rand['id_product']?>-<?php echo mb_strtolower(url_title(removesign($product_rand['title'])));?>">
                        </a>
                     </div>
                     <div class="caption">
                        <h4 class='text-center text-primary'>
                           <a href="<?php echo base_url();?>san-pham/<?php echo $product_rand['id_product']?>-<?php echo mb_strtolower(url_title(removesign($product_rand['title'])));?>">
                           <?php echo sub_string($product_rand['title'],20);?>   					       </a>
                        </h4>
                        <p class="bottom-align">
                           <a href="<?php echo base_url();?>san-pham/<?php echo $product_rand['id_product']?>-<?php echo mb_strtolower(url_title(removesign($product_rand['title'])));?>" class="btn btn-warning" role="button">
                           <i class="glyphicon glyphicon-shopping-cart"></i>Mua
                           </a>
                           <span class="text-muted pull-right">
                           <?Php 
						   if(!empty($product_sale))
						   {
						   	$price = 	$product_rand['price'] - $product_rand['price']* $product_sale[0]['percent'];
						   }
						   else
						   {
						   	$price = $product_rand['price'];
						   }
						   ?>
                           <span class="text-info"><strong><?php echo number_format($price)?> ₫</strong></span>
                           </span>
                        </p>
                     </div>
                  </div>
               </div>
			   <?php 
			   if($i%3==0)
			   {
			   ?>
               <br>
			   <?php
			   } 
              $i++;} ?>
            </div>
         </div>
         <!--end tag div-row category and feature product-->
         <!--partner slide-->
         <div class="row">
            
         </div>
         <!--end partner slide-->
         <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/jquery.contenthover.min.js"></script><script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/script.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/jquery.contenthover.min.js"></script>                
         <?php 
		 include('footer.php');
		 ?>