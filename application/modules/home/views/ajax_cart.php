<table class="table table-hover">
	<thead>
		<tr>
			<th></th>
			<th>Tên sản phẩm</th>
			<th>Số lượng</th>
			<th>Giá</th>
			<th>Thành tiền</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php 
						$total_price = 0;
						$i = 1;
						foreach($list_cart as $cart)
						{
							$price_sale = $this->producthomemodel->get_sale_off_product($cart['id_product']);
							$price      = 0;
							if(empty($price_sale))
							{
								$price = $cart['price'];
							}
							else
							{
								$price = ($cart['price'] - $cart['price'] * ($price_sale[0]['percent'] / 100));
							}
							?>
			<tr>
			<td><img src="<?php echo base_url();?>file/uploads/product/<?php echo $cart['image']?>" width="50"  height="50" "alt=""></td>
			<td><?php echo $cart['title']?></td>
			<td><input class="form-control" id="quantity_<?php echo $cart['id']?>" name="quantity" type="text" value="<?php echo $cart['quantity']?>" maxlength="4" id="quantity" style="width:50px;text-align: center" /></td>
			<td><?php echo number_format($price)?> ₫</td>
			<td><?php echo number_format($cart['total_price'])?> ₫</td>
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
			<td>
    		     
    		     <a class="btn btn-primary" onclick="javascript:deleteItem(<?php echo $cart['id']?>)" >
    		          <i class="glyphicon glyphicon-remove"></i>
    		     </a>
			</td>
		</tr>
		<?php 
						$total_price +=$cart['total_price'];
						$i++;} ?>
    	</tbody>
</table>
<div class="pull-left">
<h3><a class="btn btn-primary" href="<?php echo base_url();?>thanh-toan">Đặt hàng</a></h3>
</div>
<div class="pull-right text-success">
<h3> Tổng số tiền : <?php echo number_format($total_price);?> ₫</h3>
</div>