<table cellspacing='0' cellpadding='0' width="475" style="float:left">
    <tr>

        <td>
            Tên sản phẩm
        </td>
        <td width="75" align="center">
            Đơn giá <br />VND
        </td>
        <td width="50" align="center">
            Số lượng
        </td>
        <td width="80" align="center">
            Thành tiền <br />VND
        </td>
        <td width="40" align="center">
            Xóa
        </td>
    </tr>

</table>
<div class="pop_content" id="cart_content">
    <div style="border-bottom:1px dotted #999;margin:2px;padding:2px" id="pro_38">
        <table cellspacing="3" cellpadding="0" width="475">
            <tbody>
                <?php
                $total_money = 0;
                foreach ($list_cart as $product) {
                    $get_sale_off = $this->productmodel->get_sale_off_product($product['id_product']);
                    if (empty($get_sale_off)) {
                        $price = $product['cost'];
                    } else {
                        $price = $product['cost'] - (($get_sale_off[0]['percent'] * $product['cost']) / 100);
                    }
                    ?>
                    <tr>
                        <td width="50">
                            <?php 
                            if($product['position']==0)
                            {
                            ?>
                            <a href="<?php echo base_url();?>">
                            <?php } else { ?>
                            <a href="<?php echo base_url();?>san-pham/<?php echo $product['id_product']?>-<?php echo mb_strtolower(url_title(removesign($product['title'])))?>">
                            <?php } ?>
                                <?php
                                if (file_exists(PATH_FOLDER . ROT_DIR . 'file/uploads/product/' . $product['img']) && is_file(PATH_FOLDER . ROT_DIR . 'file/uploads/product/' . $product['img']) && $product['img'] != '') {
                                    ?>
                                    <img src="<?php echo base_url(); ?>file/uploads/product/<?php echo $product['img'] ?>" alt="<?php echo $product['title'] ?>" width="50">
                                <?php } else { ?>
                                    <img src="<?php echo base_url(); ?>file/uploads/no_image.gif" alt="<?php echo $product['title'] ?>" width="50">
                                <?php } ?>
                            </a>
                        </td>
                        <td>
                            <?php 
                            if($product['position']==0)
                            {
                            ?>
                             <a href="<?php echo base_url();?>"><?php echo $product['title']?></a>
                            <?php } else { ?>
                            <a href="<?php echo base_url();?>san-pham/<?php echo $product['id_product']?>-<?php echo mb_strtolower(url_title(removesign($product['title'])))?>"><?php echo $product['title']?></a>
                            <?php } ?>
                        </td>
                        <td width="75" align="right"><span class="price"> <?php echo $price; ?>VND</span>
                        </td>
                        <td width="50" align="center">
                            <input size="1" id="quantity_<?php echo $product['id_cart'] ?>" onkeyup="cart_update(<?php echo $product['id_cart'] ?>,<?php echo $product['id_product'] ?>,'quantity_<?php echo $product['id_cart'] ?>','<?php echo base_url();?>')" type="" value="<?php echo $product['quantity'] ?>"/>
                        </td>
                        <td width="80" align="right"><span class="price" id="total_one_item_38"><?php echo number_format($price * $product['quantity']) ?>VND</span></td>
                        <td width="40" align="center">
                            <img onclick="delete_product(<?php echo $product['id_product'] ?>, '<?php echo base_url(); ?>');" src="<?php echo base_url(); ?>template/ezwebvietnam/home/delete.png" width="20" alt="Xóa" style="cursor:pointer" rel="delete_card_item" data-1="38">
                        </td>
                    </tr>
                    <?php $total_money +=$price * $product['quantity'];
                } ?> 
            </tbody>
        </table>
    </div>
    <table cellspacing="3" cellpadding="0" width="480">
        <tbody>
            <tr>
                <td width="50">&nbsp;</td>
                <td>&nbsp;</td>
                <td width="80" align="right">&nbsp;</td>
                <td width="50" align="center">Tổng:</td>
                <td width="80" align="right">
                    <span id="total_price" class="price"><?php echo number_format($total_money); ?></span></td>
                <td width="40" align="center"> VND</td>
            </tr>
        </tbody>
    </table>
    <div style="height:1px;clear:both"></div> </div>