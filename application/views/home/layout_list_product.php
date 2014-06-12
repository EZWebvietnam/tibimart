<?php 
include('header.php');
?>
      <div class="content">
      <div class="container">
         <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-3">
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
            <div class="col-md-9 col-lg-9 col-sm-9">
               <div class="row">
                  <h1>
                     <?php echo $cate_detail_[0]['title']?> </small>		
                  </h1>
                  <div class="row">
			<?php 
			$i = 1;
			foreach($list as $product_rand)
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
                        <a href="<?php echo base_url();?>san-pham/<?php echo $product_rand['id_product']?>-<?php echo mb_strtolower(url_title(removesign($product_rand['title_product'])));?>">
                        </a>
                     </div>
                     <div class="caption">
                        <h4 class='text-center text-primary'>
                           <a href="<?php echo base_url();?>san-pham/<?php echo $product_rand['id_product']?>-<?php echo mb_strtolower(url_title(removesign($product_rand['title_product'])));?>">
                           <?php echo sub_string($product_rand['title_product'],20);?>   					       </a>
                        </h4>
                        <p class="bottom-align">
                           <a href="<?php echo base_url();?>san-pham/<?php echo $product_rand['id_product']?>-<?php echo mb_strtolower(url_title(removesign($product_rand['title_product'])));?>" class="btn btn-warning" role="button">
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
            </div>
         </div>
         <div class="row">
            <div class="text-center">
               <div>
                  <ul class="pagination">
                     <script type="text/javascript">
					var url = window.location.href;
					var res = url.split("/page/");
		                                $(function() {
		                                    $('ul.pagination').html(LoadPagging(<?php echo $page?>, <?php echo $total?>,res[0],<?php echo $total_page?>));
		                                });
		                            </script>
                  </ul>
               </div>
            </div>
         </div>
         <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/jquery.contenthover.min.js"></script><script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/script.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/jquery.contenthover.min.js"></script>                
         <?php 
		 include('widget.php');
		 include('footer.php');
		 ?>