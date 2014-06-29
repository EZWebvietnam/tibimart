<?php 
include('header.php');
?>
      <div class="content">
      <div class="container">
	  <?php 
	  if(!empty($rand_image))
	  {
	  	
	  ?>
      <div class="image-slide thumbnail" style="height:410px; !important;">
         <div id="carousel-slideshow-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#carousel-slideshow-generic" data-slide-to="0" class="active"></li>
			   <?php 
			   if(count($rand_image)>1)
			   {
			   	for($i = 1;$i<=count($rand_image);$i++)
				{
			   ?>
               <li data-target="#carousel-slideshow-generic" data-slide-to="<?php echo $i;?>" class=""></li>
			   <?php } } ?>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="height:400px; !important;">
               <div class="item  active">
                  <a href="" target="_blank">
                  <img src="<?php echo base_url();?>file/uploads/slide/<?php echo $rand_image[0]['image']?>" width="1140" height="400" alt="Content marketi">
                  </a>
               </div>
			   <?php 
			   foreach($rand_image as $image_slide)
			   {
			   ?>
               <div class="item ">
                  <a href="" target="_blank">
                  <img src="<?php echo base_url();?>file/uploads/slide/<?php echo $image_slide['image']?>" width="1140" height="400" alt="TIBIMART">
                  </a>
               </div>
               <?php } ?>
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
		 <?php } ?>
     
	  <!--
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
      </div>-->
      <div class="row">
         <div id="product-sidebar" class="col-md-3 col-lg-3 col-sm-3">
            <div class="navbar navbar-default background-orange">
               <ul class="nav nav-stacked">
			   <?php 
			   $this->load->model('producthomemodel');
			   foreach($list_cate as $cate)
			   {
			   		$cate_detail = $this->catehomemodel->list_cate_lable($cate['id_cate']);
			   ?>
                  <li <?Php if(!empty($cate_detail)) {?> class="dropdown  dropdown-submenu" <?php } ?>>
                     <a href="<?php echo base_url();?>san-pham/c/<?php echo $cate['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($cate['title']))) ?>">
                     <?php echo $cate['title'];?>	               </a>
                     <ul class="dropdown-menu">
					 	<?php foreach($cate_detail as $c_dt)
						{
							if($c_dt['product']==0)
							{
							?>
                        <li><a href="<?php echo base_url();?>san-pham/c/<?php echo $c_dt['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($c_dt['title']))) ?>"><?php echo $c_dt['title'];?> </a></li>
						<?Php } else {
							
							$product_detail = $this->producthomemodel->product_detail($c_dt['product']);
							
							?> 
						<li><a href="<?php echo base_url();?>san-pham/<?php echo $product_detail[0]['id_product']?>-<?php echo mb_strtolower(url_title(removesign($product_detail[0]['title']))) ?>"><?php echo $c_dt['title'];?> </a></li>
						<?php }} ?>
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
			   <center><b><font size="3">HỖ TRỢ TRỰC TUYẾN</font></b></center>  <br>
			   <?php 
            		foreach($list_yahoo as $yahoo_)
            		{
					
            		?>
                   <a href="ymsgr:sendim?<?php echo $yahoo_['nick']?>"><img border="0" align="middle" alt="Chát với Mr. Thi" src="http://opi.yahoo.com/online?u=<?php echo $yahoo_['nick']?>&amp;m=g&amp;t=1" /></a>
                            <b><font color="red"><span class="name">&nbsp;&nbsp;<?php echo $yahoo_['name']?></span> <span class="phone">
                                &nbsp;&nbsp;<?php echo $yahoo_['phone']?></span></font></b><br>                    
                	<?php } ?>
               </ul>
            </div>
			<div class="navbar navbar-default">
			<center>
               <ul class="nav nav-stacked">
			   <!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="free web stats" ><script  type="text/javascript" >
try {Histats.start(1,2696468,4,432,112,75,"00011111");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2696468&101" alt="free web stats" border="0"></a></noscript>
<!-- Histats.com  END  --> 
               </ul>
			   </center>
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
						if(!empty($product_sale) && $product_sale[0]['percent']!=0)
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
		 include('widget.php');
		 include('footer.php');
		 ?>