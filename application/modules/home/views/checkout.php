  <link href="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/css/jquery.ui.all.css" rel="stylesheet" type="text/css" />
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
 <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
   <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home_tibimart/js/jquery.ui.addresspicker.js"></script>
   <style>
  	#map {
  border: 1px solid #DDD; 
  width:300px;
  height: 300px;
  margin: 10px 0 10px 0;
  -webkit-box-shadow: #AAA 0px 0px 15px;
}
  </style>
  <?php
	  if($_SERVER['SERVER_NAME'] == 'localhost')
		 {
		      ?> 
			  <script>
			  	var app_main_url ="http://localhost/tibimart";
			  </script>
			  <?php
		 }
		 else
		 {
		    ?> 
			 <script>
			  	var app_main_url ="http://tibimart.com";
			  </script>
			<?php
		 }
		 ?>
<script>
  $(function() {
    var addresspicker = $( "#addresspicker" ).addresspicker({
      componentsFilter: 'country:FR'
    });
    var addresspickerMap = $( "#addresspicker_map" ).addresspicker({
      regionBias: "fr",
      updateCallback: showCallback,
      mapOptions: {
        zoom: 4,
        center: new google.maps.LatLng(46, 2),
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      },
      elements: {
        map:      "#map",
        lat:      "#lat",
        lng:      "#lng",
      }
    });

    var gmarker = addresspickerMap.addresspicker( "marker");
    gmarker.setVisible(true);
    addresspickerMap.addresspicker( "updatePosition");

    $('#reverseGeocode').change(function(){
      $("#addresspicker_map").addresspicker("option", "reverseGeocode", ($(this).val() === 'true'));
    });

    function showCallback(geocodeResult, parsedGeocodeResult){
      $('#callback_result').text(JSON.stringify(parsedGeocodeResult, null, 4));
    }
    // Update zoom field
    var map = $("#addresspicker_map").addresspicker("map");
    google.maps.event.addListener(map, 'idle', function(){
      $('#zoom').val(map.getZoom());
    });

  });
  </script>
  <script>
	  	jQuery(document).ready(function(){
			$('#chi_duong').click(function(){
				var lat = $('#lat').val();
				var lng = $('#lng').val();
				url =app_main_url+'/chi-duong/?lng='+lng+'&lat='+lat;
				window.open(url,'_blank');
		});
		});
	  	
		
	  </script>
<div class="col-md-9 col-lg-9 col-sm-9">
            <form method="post">
                     <div style="padding: 5px;">
                        <div style="padding: 20px; overflow: hidden">
                           <p style="padding-top: 10px; padding-bottom: 20px">
                              <b>Xin vui lòng điền đầy đủ thông tin dưới đây, chúng tôi sẽ liên hệ cho quý khách trước khi giao hàng</b><br/> Khi quý khách điền địa chỉ, chúng tôi sẽ hiển thị vị trí trên bản đồ, nếu thấy không đúng, quý khách vui lòng click chuột vào icon màu đỏ, di chuột đến địa chỉ chính xác.
                           </p>
                           <div style="padding-top: 0px;">
                              <div class="validation">
                                 <div id="ContentPlaceHolder1_ValidationSummary1" style="display:none;">
                                 </div>
                              </div>
                              <div style="float: left">
                                 <table width="650">
                                    <tr>
                                       <td style="width: 180px; height: 30px">
                                          Email người mua:
                                       </td>
                                       <td>
                                          <input name="email" type="text" id="ContentPlaceHolder1_txtEmail" style="width:250px;" />
                                          
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="height: 30px">
                                          Họ tên:
                                       </td>
                                       <td>
                                          <input name="fullname" type="text" id="ContentPlaceHolder1_txtFullName" style="width:250px;" />
                                          
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="height: 30px">
                                          Số điện thoại:
                                       </td>
                                       <td>
                                          <input name="phone" type="text" id="ContentPlaceHolder1_txtPhone" style="width:250px;" />
                                       </td>
                                    </tr>
									<tr>
                                       <td style="height: 30px">
                                          Hình thức giao hàng:
                                       </td>
                                       <td>
                                          <input  type="radio" name="radio" value="1"/>Giao hàng tận nơi<input  type="radio" name="radio" value="0"/>Nhận hàng tại shop
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="height: 30px">
                                          Địa chỉ nhận hàng:
                                       </td>
                                       <td>
                                          <input id="addresspicker_map" name="address" style="width:250px;"/>
										  <input id="addresspicker" type="hidden"/>
										  <input id="lat" name="lat" type="hidden"/>
										  <input id="lng" name="lng" type="hidden"/>
                                       </td>
                                    </tr>
									<tr>
                                       <td style="height: 30px">
                                          Map
                                       </td>
                                       <td>
                                          <div id="map"></div>
                                       </td>
                                    </tr>
									<tr>
                                       <td style="height: 30px">
                                          Chỉ dẫn đường đi tới shop
                                       </td>
                                       <td>
                                          <a id="chi_duong" href="#">Chỉ đường</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                       </td>
                                       <td style="padding: 10px 0">
                                          <input type="button" onclick="window.location.href='<?php echo base_url();?>gio-hang'"  value="Quay lại"  class="btn floatLeft" />
                                          <input type="submit" value="Hoàn tất"  class="btn floatLeft" />
                                       </td>
                                    </tr>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
					 </form>   
            </div>
