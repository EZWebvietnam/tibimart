
                
                 <div id="large">
                  <ul id="crumbs">
                     <li><a href="/">Trang chủ</a></li>
                     <li><a href="<?php echo base_url();?>huong-dan-thanh-toan">Hướng dẫn thanh toán</a></li>
                  </ul>
                  <div class="clear">
                  </div>
                  <div class="article-details">
       
        <div class="clear">
        </div>
        <p>
	<strong>TIBIMART.COM</strong><br>
	<br>
	Địa chỉ giao dịch:<br>
	- <b>Phía Bắc:</b> <?php echo nl2br($about[1]['address']);?><br>
	- <b>Phía Nam:</b> <span style="font-family:"><span style="font-family: Arial;"><span style="font-size: small;"><span style="line-height: 115%;"><?php echo nl2br($about[0]['address'])?></span></span></span></span><br>
	</p>
<p style="text-align: center;">
	</p>
<p>
	Đơn vị thụ hưởng TIBIMART</p>
<table border="1" bordercolor="#DBDBDB" cellpadding="10" cellspacing="10" rules="all" style="width: 100%; border-collapse: collapse;">
	<tbody>
	<?php 
	foreach($list_payment as $l_payment)
	{
	
	?>
		<tr>
			<td valign="top">
			<?php 
			if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/bank/'.$l_payment['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/bank/'.$l_payment['image']) && $l_payment['image']!='')
			{
			
			?>
				<img alt="<?php echo $l_payment['name']?>" src="<?php echo base_url();?>file/uploads/bank/<?php echo $l_payment['image']?>" width="150" height="80">
					<?php } else { ?>
					<img alt="<?php echo $l_payment['name']?>" src="<?php echo base_url();?>file/uploads/no_image.gif" width="150" height="80">
					<?php } ?>
				</td>
			<td valign="top">
				<strong>Chủ tài khoản: </strong><?php echo $l_payment['name_account'];?><br>
				<strong>Số tài khoản: </strong><?php echo $l_payment['account_number']?><br>
				<strong>Tại:</strong> <?php echo $l_payment['name']?> <!-- All --></td>
		</tr>
	<?php } ?>	
	</tbody>
</table>
<p>
	<br>
	<strong>PHƯƠNG THỨC VẬN CHUYỂN:</strong><br>
	Sản phẩm chúng tôi cung cấp sẽ được vận chuyển miễn phí trong phạm vi 5 km, ngoài phạm vi Quý khách vui lòng trả phí khi nhận hàng (phí vận chuyển ngoài phạm vi do nhà vận chuyển quy định).</p>

    </div>
                  <div class="clear">
                  </div>
                  <div class="clear">
                  </div>