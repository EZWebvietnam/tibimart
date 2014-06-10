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
               <h3>OvHand</h3>
               <h4>Kết nối từ đôi tay</h4>
               <p>
                  120/86A/26 Thích Quảng Đức, Phường 5, Q. Phú Nhuận, TP.HCM          
               </p>
               <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 0909.524.879</p>
               <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:contact@ovhand.com">contact@ovhand.com</a></p>
               <p><i class="fa fa-comment"></i> <abbr title="Yahoo">Yahoo</abbr>:danhvvx</p>
               <p><i class="fa fa-skype"></i> <abbr title="Skype">Skype</abbr>:danhvvx</p>
               <ul class="list-unstyled list-inline list-social-icons">
                  <li class="tooltip-social facebook-link"><a href="https://www.facebook.com/ovhand" data-toggle="tooltip" data-placement="top" title="OvHand Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
               </ul>
            </div>
         </div>
         <!-- /.row -->                
         <?php include('footer.php');?>