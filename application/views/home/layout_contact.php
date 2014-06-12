<?php 
include('header.php')
?>
      <div class="content">
      <div class="container">
         <div class="row">
            <div class="col-sm-8">
               <h3></h3>
              
               <form role="form" method="POST">
                  <div class="row">
                     <div class="form-group col-lg-4">
                        <label for="input1">Tên</label>
                        <input type="text" name="fullname" class="form-control" id="input1">
                     </div>
                     <div class="form-group col-lg-4">
                        <label for="input2">Địa chỉ email</label>
                        <input type="email" name="email" class="form-control" id="input2">
                     </div>
                     <div class="form-group col-lg-4">
                        <label for="input3">Số điện thoại</label>
                        <input type="phone" name="phone" class="form-control" id="input3">
                     </div>
                     <div class="clearfix"></div>
                     <div class="form-group col-lg-12">
                        <label for="input4">Nội dung</label>
                        <textarea name="noi_dung" class="form-control" rows="6" id="input4"></textarea>
                     </div>
                     <div class="form-group col-lg-12">
                        <input type="hidden" name="save" value="contact">
                        <button type="submit" class="btn btn-primary">Gửi</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-sm-4">
               <h3>TiBiMart</h3>
               <h4>Tiện ích trong từng sản phẩm</h4>
			   <p><b>Phía Bắc:</b></p>
               <p>
                 <?php echo nl2br($about[1]['address']);?>     
               </p>
               <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: <?php echo $about[1]['phone']?></p>
               <p><b>Phía Nam:</b></p>
               <p>
                 <?php echo nl2br($about[0]['address']);?>     
               </p>
               <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: <?php echo $about[0]['phone']?></p>
               <ul class="list-unstyled list-inline list-social-icons">
                  <li class="tooltip-social facebook-link"><a target="__blank" href="https://www.facebook.com/tibimarthcm" data-toggle="tooltip" data-placement="top" title="TibiMart Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
               </ul>
            </div>
         </div>
         <!-- /.row -->                
         <?php 
		 include('widget.php');
		 include('footer.php');?>