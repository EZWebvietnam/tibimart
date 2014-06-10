<?php 
include('header.php');
?>
      <div class="content">
      <div class="container">
         <link href="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/css/jquery.fancybox.css" media="screen" rel="stylesheet" type="text/css">
         <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-3">
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
            <div class="col-md-9 col-lg-9 col-sm-9">
               <div class="row">
                  <div class="col-md-7 col-lg-7 col-sm-8 ">
                     <div class="row">
					 <?Php 
					 if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_detail[0]['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_detail[0]['image']) && $product_detail[0]['image']!='')
					 {
					 
					 ?>
                        <img class="text-center"
                           src="<?php echo base_url();?>file/uploads/product/<?php echo $product_detail[0]['image']?>"
                           height="300" />
						<?php } else { ?>
						<img class="text-center"
                           src="<?php echo base_url();?>file/uploads/no_image.gif"
                           height="300" />
						<?php } ?>
                     </div>
                     
                  </div>
                  <div class="col-md-5 col-lg-5 col-sm-4 ">
                     <form name="addToCart" id='myform' method="post" action="<?php echo full_url_($_SERVER);?>">
                        <div class="well">
                           <h1><?php echo $product_detail[0]['title']?></h1>
                           <div class="text-muted">
                              <span class="glyphicon glyphicon-eye-open"></span>Lượt xem : 43                            &nbsp;&nbsp;<span
                                 class="glyphicon glyphicon-signal"></span>Số lượng : 1000
                           </div>
                           
                           <?php 
						   $product_detail_sale = $this->producthomemodel->get_sale_off_product($product_detail[0]['id_product']);
						   if(!empty($product_detail_sale))
						   {
						   		$price = $product_detail[0]['price'] - $product_detail[0]['price']*$product_detail_sale[0]['percent'];
						   }
						   else
						   {
						   	$price = $product_detail[0]['price'];
						   }
							if(!empty($product_detail_sale))
							{
							
						   ?>
                           <h4 class="text-muted">
                              <strike></strong>Giá gốc: <?php echo number_format($product_detail[0]['price']);?> ₫</strike>
                           </h4>
						   <?php } ?>
                           <h4>
                              <strong>Giá bán:</strong> <?php echo number_format($price)?> ₫
                           </h4>
                           <input type="hidden" name='price'
                              value='179000' />
                           <p>
                              <strong></strong>
                           <p>
                           <div class="row">
                              <div class="col-md-4">Số lượng</div>
                              <div class="col-md-4">
                                 <input class="form-control" type="text" name="quantity" placeholder="Số lượng cần mua"	value=1 />						
                              </div>
                           </div>
                           <input type="hidden" name='id_product'
                              value='<?php echo $product_detail[0]['id_product'];?>' />
							<input type="hidden" name='cart'
                              value='1' />
                           <div class="row voffset2">
                              <div class=" col-md-11 ">
                                 <input  class="btn btn-primary" id='quick-buy' name="quick-buy" type="submit" value='Mua ngay' />
                                 
                              </div>
                           </div>
                           
                        </div>
                     </form>
					  
                  </div>
               </div>
               <!--</div>-->
               <div class="row voffset2">
                  <div class="col-md-12 col-lg-12 col-sm-12">
                    <?php echo $product_detail[0]['content']?>
                  </div>
               </div>
               <div class="row voffset2 ">
                  <hr />
                  <h3>Đánh giá bình luận</h3>
                  <div class="col-md-12 col-lg-12 col-sm-12 ">
                     <div class="fb-comments thumbnail"
                        data-href="<?php echo full_url_($_SERVER);?>"
                        data-width="835" data-numposts="5" data-colorscheme="light"></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="fb-root"></div>
         <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
         </script>
         <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/jquery.fancybox.pack.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/product.js"></script>                
          <?php 
		 include('footer.php');
		 ?>