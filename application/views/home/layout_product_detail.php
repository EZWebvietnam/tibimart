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
		 include('footer.php');
		 ?>