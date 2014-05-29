
<div class="product_detail_1">
    <div class="cat_title">
        <a href="<?php echo base_url(); ?>san-pham">Sản Phẩm</a>
    </div>
    <div class="mainimages">
        <?php
        if (file_exists(PATH_FOLDER . ROT_DIR . 'file/uploads/product/' . $product_detail[0]['img']) && is_file(PATH_FOLDER . ROT_DIR . 'file/uploads/product/' . $product_detail[0]['img']) && $product_detail[0]['img'] != '') {
            ?>
            <img src="<?php echo base_url(); ?>file/uploads/product/<?php echo $product_detail[0]['img'] ?>" alt="<?php echo $product_detail[0]['title'] ?>" width="490">
        <?php } else { ?>
            <img src="<?php echo base_url(); ?>file/uploads/no_image.gif" alt="<?php echo $product_detail[0]['title'] ?>" width="490">
        <?php } ?>
    </div>

    <div class="pro_name">
        <?php echo $product_detail[0]['title'] ?>
    </div>
    <div class="quick_descript">
        <p><span style="color: rgb(68, 68, 68); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11.818181991577148px; line-height: 17.99715805053711px; text-align: justify;"><?php echo $product_detail[0]['description'] ?></span></p>  
    </div>
    <br>
    <?php
    $detail_sale_off = $this->productmodel->get_sale_off_product($product_detail[0]['id_product']);
    $count_buy = $this->productmodel->count_order_product($product_detail[0]['id_product']);
    if (empty($detail_sale_off)) {
        $price = $product_detail[0]['cost'];
        ?>
        <center>
            Giá gốc: <span class="orgin_price"><?php echo number_format($product_detail[0]['cost']) ?></span>  VND
        </center>

        <?php
    } else {
        $price = ($product_detail[0]['cost'] - ($product_detail[0]['cost'] * $detail_sale_off[0]['percent']) / 100);
        ?>
        <center>
            Giá gốc: <span class="orgin_price"><strike><?php echo number_format($product_detail[0]['cost']) ?></strike></span>  VND
        </center>
        <div class="price_detail">

            <center>
                <span class="price2"><?php echo number_format(($product_detail[0]['cost'] - ($product_detail[0]['cost'] * $detail_sale_off[0]['percent']) / 100)) ?></span> <span class="price2">(-<?php echo $detail_sale_off[0]['percent'] ?>%)</span> 
            </center>
        </div>
        <div>
            <br>
            <center>
                  <font size="5px">
                Số người đã mua:<br><span class="price2"> <?php echo $count_buy; ?> </span><br>
                Thời gian khuyến mại còn lại:
                <?php
                $date = $detail_sale_off[0]['exp_date'];
                $date_ex = explode('-', $date);
                $date = explode(' ', $date_ex[2]);
                ?>
                <script type="text/javascript">
                    $(function() {
                        var liftoffTime = new Date(<?php echo $date_ex[0] ?>,<?php echo $date_ex[1] - 1 ?>,<?php echo $date[0] ?>);
                        $('#defaultCountdown274').countdown({until: liftoffTime, padZeroes: true});
                    });


                </script>
                <div id="defaultCountdown274" style="text-align:center;font-size:10px" class="hasCountdown"></div>
                </font>

            </center>
        </div>
    <?php } ?>
    <div>
        <br>
        <center>
            <div>
                <br>
                <img id="btn_mua" width="200" height="109" src="<?php echo base_url(); ?>template/ezwebvietnam/home/template/template_1/images/mua_1.png" onclick="add_to_card_form(<?php echo $product_detail[0]['id_product'] ?>,<?php echo $price ?>);" class="add_cart_button">
            </div>
        </center>
    </div>
    <?php
    $this->load->helper('cookie'); 
    if ($this->uri->segment(4) != '' || $this->uri->segment(4) != null) {
        $cookie = array(
                    'name'   => 'id_ref',
                    'value'  => base64_encode($this->uri->segment(4)),
                    'expire' =>  2592000,
                    'secure' => false
                );
        $this->input->set_cookie($cookie);
        ?>
        <input type="hidden" name="id_ref" id="id_ref" value="<?php echo base64_encode($this->uri->segment(4)); ?>" />
        <?php
    } else {
        if($this->input->cookie('id_ref', false))
        {
        ?>
        <input type="hidden" name="id_ref" id="id_ref" value="<?php echo $this->input->cookie('id_ref', false)?>" />
    <?php } else { ?> 
         <input type="hidden" name="id_ref" id="id_ref" value="0" />
        <?php } } ?>

    <div style="height:1px;clear:both"></div>
</div>
<div style="hight:1px">&nbsp;</div>
<div style="clear:both"></div>

<div class="product_detail_2">
    <div class="right_header">NỘI DUNG CHI TIẾT</div>
    <div style="padding:10px">
        <?php echo $product_detail[0]['content'] ?>
    </div>
    <script>
    $(document).ready(function() {
        $('.add_cart_button').click(function(){
            add_to_card_form(<?php echo $product_detail[0]['id_product'] ?>,<?php echo $price ?>);
        });
    });
    </script>
    <?php 
    if(!empty($list_clip))
    {
    ?>
    <div style="background:#fff;margin:0;padding:10px 10px 10px 0;">
        <div style="moz-border-radius: 5px;-webkit-border-radius: 5px;padding: 10px;">
            <div style="clear:both">
                <div style="background:url(<?php echo base_url();?>template/ezwebvietnam/home/uploads/tivi.png) top left no-repeat;width:603px;height:401px;padding:36px 36px 36px 38px">
                    <?php 
                    foreach($list_clip as $clip)
                    {
                    ?>
                    <iframe allowfullscreen="" frameborder="0" height="338" name="video" src="//www.youtube.com/embed/<?php echo $clip['code']?>" width="600"></iframe>
                    <?php }  ?>
                </div>    
            </div>

        </div>
    </div>
    <?php } ?>
    <div id="main2"></div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-share-button" data-href="<?php echo full_url_($_SERVER) ?>" data-type="button_count"></div>
    <div class="fb-like" data-href="<?php echo full_url_($_SERVER) ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
    <!-- Đặt thẻ này vào nơi bạn muốn Nút +1 kết xuất. -->
    <div class="g-plusone" data-annotation="inline" data-width="37" data-href="<?php echo full_url_($_SERVER) ?>"></div>

    <!-- Đặt thẻ này sau thẻ Nút +1 cuối cùng. -->
    <script type="text/javascript">
        window.___gcfg = {lang: 'vi'};

        (function() {
            var po = document.createElement('script');
            po.type = 'text/javascript';
            po.async = true;
            po.src = 'https://apis.google.com/js/platform.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(po, s);
        })();
    </script>
    <div class="fb-comments" data-href="<?php echo full_url_($_SERVER) ?>" data-numposts="5" data-colorscheme="light"></div>
</div>	
