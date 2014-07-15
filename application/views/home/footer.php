
<!--                 footer -->
         <!--footer info-->
         <div class="clearfix visible-xs"></div>
         <div class="well voffset2">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-6">
                  <h3>TibiMart là gì?</h3>
                  <p class="text-justify text-muted"><?php echo $header['gioithieu']?>
                  </p>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 ovhand-extra-2">
                  <h3>Phía Bắc</h3>
				  <?php 
				  $this->load->model('faqhomemodel');
				  $list_phia_bac = $this->faqhomemodel->about(2);
				  ?>
                  <ul class="list-unstyled">
				  		<?php 
						foreach($list_phia_bac as $l_p_bac)
						{
						
						?>
                      <li><span class="glyphicon glyphicon-info-sign"></span>&nbsp;<?php echo nl2br($l_p_bac['address']);?></li>
                     <li><span class="glyphicon glyphicon-phone"></span>&nbsp;<?php echo $l_p_bac['phone']?></li>
                    
					 <li>-----------</li>
					 <?php } ?>
                  </ul>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 ovhand-extra-3">
                  <h3>Phía Nam</h3>
                  <ul class="list-unstyled">
				  	<?php 
				  	$list_phia_nam = $this->faqhomemodel->about(1);
					foreach($list_phia_nam as $l_p_nam)
						{
				  	?>
                      <li><span class="glyphicon glyphicon-info-sign"></span>&nbsp;<?php echo nl2br($l_p_nam['address']);?></li>
                     <li><span class="glyphicon glyphicon-phone"></span>&nbsp;<?php echo $l_p_nam['phone']?></li>
                    
					 <li>-----------</li>
					 <?php } ?>
                  </ul>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6">
                  
                 
                  <h3>Facebook</h3>
                  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyAZ7yY9gsPiLaOraj_eOfWd0e9Bidg0dPc&sensor=true" type="text/javascript"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
    var map;
    var infowindow;
    var marker = new Array();
    var old_id = 0;
    var infoWindowArray = new Array();
    var infowindow_array = new Array();
    function initialize(a, b, c) {
        var defaultLatLng = new google.maps.LatLng(a, b);
        var myOptions = { zoom: 16, center: defaultLatLng, scrollwheel: false, mapTypeId: google.maps.MapTypeId.ROADMAP };
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); map.setCenter(defaultLatLng);
        var arrLatLng = new google.maps.LatLng(a, b);
        infoWindowArray[1161] = c;
        //infoWindowArray[1161] = '<div class="inforCty"><b>HaThanhAuto.com – THẾ GIỚI PHỤ TÙNG Ô TÔ NHẬP KHẨU-DẦU NHỚT PHỤ GIA Ô TÔ.</b></div><div class="infoAdd"><b>Địa chỉ</b>: Số 2 ngõ 77 Xuân la – Tây hồ - Hà Nội</div><div class="infoAdd"><b>Điện thoại: 0942 399 366 </b><br/> <b>  Website: </b><a href="http://www.hathanhauto.com" target="_blank">www.hathanhauto.com</a></div>';
        loadMarker(arrLatLng, infoWindowArray[1161], 1161);
        moveToMaker(1161);
    }

    function loadMarker(myLocation, myInfoWindow, id) {
        marker[id] = new google.maps.Marker({ position: myLocation, map: map, visible: true });
        var popup = myInfoWindow; infowindow_array[id] = new google.maps.InfoWindow({ content: popup });
        google.maps.event.addListener(marker[id], 'mouseover', function () {
            if (id == old_id) return;
            if (old_id > 0) infowindow_array[old_id].close();
            infowindow_array[id].open(map, marker[id]);
            old_id = id;
        });
        google.maps.event.addListener(infowindow_array[id], 'closeclick', function () { old_id = 0; });
    }

    function moveToMaker(id) {
        var location = marker[id].position; map.setCenter(location);
        if (old_id > 0) infowindow_array[old_id].close();
        infowindow_array[id].open(map, marker[id]);
        old_id = id;
    }
</script>
<?php 
$title_web = $header['title'];
?>
                  <div id='map_canvas' style='width: 290px; height: 286px'></div><script type='text/javascript'>initialize(10.830202,106.713257,"<div class='inforCty' style='text-align:left;'><b>TIBIMART.COM<br/>DẦU DỪA NGUYÊN CHẤT TIBI</b><div class='infoAdd'><b>Địa chỉ</b>: Số 40, Đường 13, Quốc lộ 13, P.Hiệp Bình Chánh, Q.Thủ Đức, TPHCM</div><div class='infoAdd'>Hotline: <span style='color:Red;'><b>0906.888.545 hoặc 01679.478.959</b></span> <br/> <b>  Website: </b><a href='http://tibimart.com/' target='_blank'>www.tibimart.com</a></div></div>")</script>
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