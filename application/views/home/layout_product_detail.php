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
			    <li>
                     <a href="<?php echo base_url();?>sp-khuyen-mai">
                     KHUYẾN MẠI	               </a>
                     <ul class="dropdown-menu">
					 	                     </ul>
                  </li> 
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
            <?php echo $this->load->view($main_content);?>
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
		  include('widget.php');
		 include('footer.php');
		 ?>