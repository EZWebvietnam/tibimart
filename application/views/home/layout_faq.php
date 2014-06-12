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
         <h1>
            <?php echo $cate_detail_[0]['title']?> </small>		
         </h1>
      </div>
      <div class="row">
         <?php 
            foreach($list as $faq_l)
            {
            
            ?>
         <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="media">
               <a class="pull-left" href="<?php echo base_url();?>hoi-dap-<?php echo $faq_l['id']?>-<?php echo mb_strtolower(url_title(removesign($faq_l['title'])))?>"> 
               <img class="media-object img-thumbnail " width="150" height="150" src="<?php echo base_url();?>file/uploads/faq.png" alt="...">
               </a>
               <div class="media-body">
                  <h4 class="media-heading"><a href="<?php echo base_url();?>hoi-dap-<?php echo $faq_l['id']?>-<?php echo mb_strtolower(url_title(removesign($faq_l['title'])))?>"><?php echo $faq_l['title']?></a></h4>
                  <div class="text-muted">
                     <small>
                     <span class="glyphicon glyphicon-time"></span><?php echo date('d/m/Y',$faq_l['create_date']);?></small><br>
                     <?php echo sub_string(loaibohtmltrongvanban($faq_l['answer']),200)?>
                  </div>
               </div>
            </div>
         </div>
         <?php } ?>
		 Muốn gửi câu hỏi ? <a href="<?php echo base_url();?>gui-cau-hoi">Click vào đây</a>
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
   include('footer.php');
   ?>