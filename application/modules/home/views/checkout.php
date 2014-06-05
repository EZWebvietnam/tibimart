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