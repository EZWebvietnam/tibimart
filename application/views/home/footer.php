<!--                 footer -->
         <!--footer info-->
         <div class="clearfix visible-xs"></div>
         <div class="well voffset2">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-6">
                  <h3>TibiMart là gì?</h3>
                  <p class="text-justify text-muted">Chúng tôi chuyên cung cấp các
                     sản phẩm, dịch vụ theo tiêu chí tiện lợi, thiết thực và giá cả
                     tốt nhất cho quý khách hàng. Với TibiMart, mỗi khách hàng là một
                     người bạn thâm giao.
                  </p>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 ovhand-extra-2">
                  <h3>Phía Bắc</h3>
                  <ul class="list-unstyled">
                     <li><span class="glyphicon glyphicon-envelope"></span>&nbsp;tibimarthcm@gmail.com</li>
                     <li><span class="glyphicon glyphicon-phone"></span>&nbsp;<?php echo $about[1]['phone']?></li>
                     <li><span class="glyphicon glyphicon-info-sign"></span>&nbsp;<?php echo nl2br($about[1]['address']);?></li>
                  </ul>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 ovhand-extra-3">
                  <h3>Phía Nam</h3>
                  <ul class="list-unstyled">
                     <li><span class="glyphicon glyphicon-envelope"></span>&nbsp;tibimarthcm@gmail.com</li>
                     <li><span class="glyphicon glyphicon-phone"></span>&nbsp;<?php echo $about[0]['phone']?></li>
                     <li><span class="glyphicon glyphicon-info-sign"></span>&nbsp;<?php echo nl2br($about[0]['address']);?></li>
                  </ul>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6">
                  
                 
                  <h3>Facebook</h3>
                  <a target="_blank" href="https://www.facebook.com/tibimarthcm" data-toggle="tooltip" data-placement="top" title="Tibimart Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
               </div>
            </div>
         </div>
         <!--container-->
      </div>
      <!--content-->
      <div id="footer">
         <div class="container">
            <p class="text-muted text-center">
               &copy;<?php echo date('Y');?> bản quyền thuộc về TiBiMart. Website đã được làm bởi <a target="_blank"
                  href='https://www.facebook.com/ezwebvietnam'>EZWeb Việt Nam</a>
            </p>
         </div>
      </div>
      <!--[if lt IE 9]><script type="text/javascript" src="/js/html5shiv.js"></script><![endif]-->
      <!--[if lt IE 9]><script type="text/javascript" src="/js/respond.min.js"></script><![endif]-->
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/holder.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/ovhand.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/tibimart_orange/js/script.js"></script>
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42117385-2', 'tibimart.com');
  ga('send', 'pageview');

</script>
   </body>
</html>