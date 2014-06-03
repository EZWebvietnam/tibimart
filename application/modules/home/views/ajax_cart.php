                     <table cellspacing="10" cellpadding="10" rules="all" border="1" bordercolor="#DBDBDB" border="1" id="ContentPlaceHolder1_dgShopCart" style="width:100%;border-collapse: collapse;">
                        <tr align="center" style="background-color:#EFF9FF;font-weight:bold;">
                           <td style="height:35px;">Ảnh</td>
                           <td>Sản phẩm</td>
                           <td>Số lượng</td>
                           <td>Đơn giá</td>
                           <td>Thành tiền</td>
                           <td>Xóa</td>
                        </tr>
						<?php 
						$total_price = 0;
						$i = 1;
						foreach($list_cart as $cart)
						{
							
						?>
                        <tr align="center">
                           <td style="height:80px;">
                              <a id="ContentPlaceHolder1_dgShopCart_hplThumb_0">
							  <img id="ContentPlaceHolder1_dgShopCart_imgProduct_0" src="<?php echo base_url();?>file/uploads/product/<?php echo $cart['image']?>" width="80" style="width:100px;" />
							 
							  </a>
                           </td>
                           <td align="left">
                              <span id="ContentPlaceHolder1_dgShopCart_ProductName_0"><?php echo $cart['title']?></span>
                           </td>
                           <td>
                              <input id="quantity_<?php echo $cart['id']?>" name="quantity" type="text" value="<?php echo $cart['quantity']?>" maxlength="4" id="quantity" style="width:20px;text-align: center" />
                           </td>
                           <td align="right">
                              <span id="ContentPlaceHolder1_dgShopCart_lblUnitPriceVND_0" class="price"><?php echo number_format($cart['price'])?> VNĐ</span>
                           </td>
                           <td align="right">
                              <span id="ContentPlaceHolder1_dgShopCart_lblTotalPalVND_0" class="price"><?php echo number_format($cart['total_price'])?> VNĐ</span>
                           </td>
                           <td>
                              <a href="javascript:deleteItem(<?php echo $cart['id']?>)">Xóa</a>
                           </td>
                        </tr>
						<script>
							jQuery(document).ready(function () {
								$('#quantity_'+<?php echo $cart['id']?>).keyup(function(){
									var quantity = $('#quantity_'+<?php echo $cart['id']?>).val();
									$.ajax({
							            url: app_main_url + '/home/product/ajax_update_cart',
							            type: 'POST',
							            dataType: "html",
							            data: {
											quantity:quantity,
							                id_cart: <?php echo $cart['id']?>,
							            },
							            success: function(response) {
											
							                $('#cart_content').html(response)
							            },
							            error: function(XMLHttpRequest, textStatus, exception) {
							                alert("Ajax failure\n");
							            },
							            async: true
							        });
								});
							});
						</script>
						<?php 
						$total_price +=$cart['total_price'];
						$i++;} ?>
                     </table>
                     <div id="ContentPlaceHolder1_pnlTotal">
                        <div style="float: right; clear: both; margin: 10px 5px 5px;">
                           <p style="margin-left: 10px; margin-top: 7px">
                              Tổng tiền: <span class="price">
                              <span id="ContentPlaceHolder1_lblTotalVND"><?php echo number_format($total_price);?> VNĐ</span></span><span style="color: rgb(240, 34, 34);">
                              </span>
                           </p>
                        </div>
                        <div class="clearBoth">
                        </div>
                        <div style="float: right;">
                          
                           <input type="button" value="Tiếp tục mua" onclick="window.location.href='<?php echo base_url();?>'"  class="btn-120 floatLeft" />
                           <input type="button" value="Thanh Toán" onclick="window.location.href='<?php echo base_url();?>thanh-toan'" class="btn floatLeft" />
                        </div>
                     </div>