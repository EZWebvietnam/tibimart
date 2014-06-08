<meta charset="utf-8" />
<script type="text/javascript">
   $(document).ready(function() {
       $.ajaxSetup({ cache: false });
       $("a.grouped_elements").fancybox({
           'padding'            : 0,
           'autoScale'            : false,
           'transitionIn'        : 'none',
           'transitionOut'        : 'none'
       });
   });
</script>
<div id="address_content">
   <table class="table_full" style="width: 100%;">
      <tr>
         <td style="background: #FFF;padding: 5px 5px 5px 5px;" valign="top">
            <table style="width: 100%;">
               <tr>
                  <td>
                     <div class="h-title">Địa chỉ</div>
                  </td>
                  <td style="float: right;">
                     
                  </td>
               </tr>
            </table>
            <div class="box-content">
               <div class="box_find">
               </div>
               <form  method="post" accept-charset="utf-8" id="admindata_kh">
                  <input type="hidden" id="page" value="0"/>
                  <input type="hidden" id="callback" value="<?php echo base_url();?>admin/addressadmin/list_setting"/>
                  <table class="admindata">
                     <thead>
                        <tr>
                           <th class="head" colspan="7">
                                                          
                           </th>
                        </tr>
                        <tr>
                           
                           <th class="id">Phía</th>
                           <th>Địa chỉ</th>
                           <th>Điện thoại</th>
                           
                           <th class="publish">Chức năng</th>
                        </tr>
                     </thead>
                    <?php 
                    $array = array('2'=>'Phía Bắc','1'=>'Phía Nam');
                    foreach($addressseting as $addr)
                    {
					
                    ?>
                     <tr class="row1 ">
                        <td><?php echo $array[$addr['type']]?></td>
                        <td><?php echo $addr['address'];?></td>
                        <td><?php echo $addr['phone'];?></td>
                        <td align="center">
                            <a class="grouped_elements" href="<?php echo base_url();?>admin/addressadmin/edit/<?php echo $addr['id']?>" title="Sửa"><img width="16" height="16" src="<?php echo base_url();?>template/ezwebvietnam/admin_cp/icon/edit.png"></a>
                        </td>
                     </tr>
                    <?php } ?>  
                     <tfoot>
                        <td colspan="7">
                                                   
                           
                           
                        </td>
                     </tfoot>
                  </table>
               </form>
                
               
            </div>
         </td>
      </tr>
   </table>
</div>
