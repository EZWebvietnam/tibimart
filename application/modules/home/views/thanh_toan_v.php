 <div class="col-md-9 col-lg-9 col-sm-9">
 <h1><?php echo $faq_detail[0]['title'];?></h1>
 <br/>
<b> Chuyển khoản:</b>
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
<br/>
<b>Thanh toán trực tiếp:</b>
<p><b>Phía Bắc:</b></p>
			   <?php 
				  $this->load->model('faqhomemodel');
				  $list_phia_bac = $this->faqhomemodel->about(2);
				  foreach($list_phia_bac as $phia_bac)
				  {
				  
				?>
               <p>
                 <?php echo nl2br($phia_bac['address']);?>     
               </p>
               <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: <?php echo $phia_bac['phone']?></p>
			   <p>-------</p>
			   <?php } ?>
               <p><b>Phía Nam:</b></p>
			   <?php 
			   $list_phia_nam = $this->faqhomemodel->about(1);
			   foreach($list_phia_nam as $phia_nam)
				  {
			   ?>
               <p>
                 <?php echo nl2br($phia_nam['address']);?>     
               </p>
               <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: <?php echo $phia_nam['phone']?></p>
			    <p>-------</p>
			   <?php } ?>
  <div class="fb-like" data-href="<?php echo full_url_($_SERVER);?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<g:plusone></g:plusone>
 </div>