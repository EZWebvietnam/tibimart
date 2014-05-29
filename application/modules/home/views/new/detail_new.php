<div class="product_detail_1">
    
    

    <div class="pro_name">
        <?php echo $detail[0]['title'] ?>
    </div>
    
   
</div>
<div style="hight:1px">&nbsp;</div>
<div style="clear:both"></div>
<div class="product_detail_2" style="float:left;">
    <div class="right_header"> <?php echo $detail[0]['title'] ?></div>
    <div style="padding:10px; float:left;">
<?php echo $detail[0]['content'] ?>
    </div>
    <div id="main2"></div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-share-button" data-href="<?php echo full_url_($_SERVER)?>" data-type="button_count"></div>
    <div class="fb-like" data-href="<?php echo full_url_($_SERVER) ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
    <!-- Đặt thẻ này vào nơi bạn muốn Nút +1 kết xuất. -->
<div class="g-plusone" data-annotation="inline" data-width="37" data-href="<?php echo full_url_($_SERVER)?>"></div>

<!-- Đặt thẻ này sau thẻ Nút +1 cuối cùng. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'vi'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
    <div class="fb-comments" data-href="<?php echo full_url_($_SERVER)?>" data-numposts="5" data-colorscheme="light"></div>
</div>	
