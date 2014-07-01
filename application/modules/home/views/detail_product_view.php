<div class="col-md-9 col-lg-9 col-sm-9">
               <div class="row">
                  <div class="col-md-7 col-lg-7 col-sm-8 ">
                     <div class="row">
					 <?Php 
					 if(file_exists(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_detail[0]['image']) && is_file(PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$product_detail[0]['image']) && $product_detail[0]['image']!='')
					 {
					 
					 ?>
                        <img class="text-center"
                           src="<?php echo base_url();?>file/uploads/product/<?php echo $product_detail[0]['image']?>"
                           height="250" width="400"/>
						<?php } else { ?>
						<img class="text-center"
                           src="<?php echo base_url();?>file/uploads/no_image.gif" width="400"
                           height="250" />
						<?php } ?>
                     </div>
                     
                  </div>
                  <div class="col-md-5 col-lg-5 col-sm-4 ">
                     <form name="addToCart" id='myform' method="post" action="<?php echo full_url_($_SERVER);?>">
                        <div class="well">
                           <h1><?php echo $product_detail[0]['title']?></h1>
                           <?php 
						   $product_detail_sale = $this->producthomemodel->get_sale_off_product($product_detail[0]['id_product']);
						   if(!empty($product_detail_sale))
						   {
						   		$price = $product_detail[0]['price'] - $product_detail[0]['price']*$product_detail_sale[0]['percent'];
						   }
						   else
						   {
						   	$price = $product_detail[0]['price'];
						   }
							if(!empty($product_detail_sale) && $product_detail_sale[0]['percent']!=0)
							{
							
						   ?>
                           <h4 class="text-muted">
                              <strike></strong>Giá gốc: <?php echo number_format($product_detail[0]['price']);?> ₫</strike>
                           </h4>
						   <?php } ?>
                           <h4>
                              <strong>Giá bán:</strong> <?php echo number_format($price)?> ₫
                           </h4>
                           <input type="hidden" name='price'
                              value='179000' />
                           <p>
                              <strong></strong>
                           <p>
                           <div class="row">
                              <div class="col-md-4">Số lượng</div>
                              <div class="col-md-4">
                                 <input class="form-control" type="text" name="quantity" placeholder="Số lượng cần mua"	value=1 />						
                              </div>
                           </div>
						   
                           <input type="hidden" name='id_product'
                              value='<?php echo $product_detail[0]['id_product'];?>' />
							<input type="hidden" name='cart'
                              value='1' />
                           <div class="row voffset2">
                              <div class=" col-md-11 ">
                                 <input  class="btn btn-primary" id='quick-buy' name="quick-buy" type="submit" value='Mua ngay' />
                                 
                              </div>
                           </div>
                           
                        </div>
                     </form>
					  
                  </div>
               </div>
               <!--</div>-->
			    
               <div class="row voffset2">
                  <div class="col-md-12 col-lg-12 col-sm-12">
				  QRCODE: <script type="text/javascript">

									var uri=window.location.href;

									document.write("<img src='http://api.qrserver.com/v1/create-qr-code/?data="+encodeURI(uri)+"&size=100x100'/>");

									</script>
                  	<?php 
                  	if(!empty($product_detail_sale))
                  	{
					
                  	?>
                  	Khuyến mại:<br>
                  	<img width="100" height="100" src="<?php echo base_url();?>file/uploads/sale_off.jpg"/><b><i>Sản phẩm này nằm trong chương trình khuyến mại <?php echo $product_detail_sale[0]['title']?>. Vui lòng click <a target="__blank" href="<?php echo base_url();?>khuyen-mai/km<?php echo $product_detail_sale[0]['id']?>-<?php echo mb_strtolower(url_title(removesign($product_detail_sale[0]['title'])))?>"><?php echo $product_detail_sale[0]['title']?></a> để biết thêm thông tin chi tiết</i></b>
                  	<?php } ?>
                    <?php echo $product_detail[0]['content']?>
                  </div>
               </div>
               <div class="row voffset2 ">
                  <hr />
                  <h3>Đánh giá bình luận</h3>
                  <div class="col-md-12 col-lg-12 col-sm-12 ">
				  <div class="fb-like" data-href="<?php echo full_url_($_SERVER);?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                  
                  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<g:plusone></g:plusone>
                     <div class="fb-comments thumbnail"
                        data-href="<?php echo full_url_($_SERVER);?>"
                        data-width="835" data-numposts="5" data-colorscheme="light"></div>
                  </div>
               </div>
            </div>