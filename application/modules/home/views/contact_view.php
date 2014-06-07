<form method="post" name="contact_form">
                     <div style="padding: 5px;">
                        <div style="padding: 20px; overflow: hidden">
                          
                           <div style="padding-top: 0px;">
                              <div class="validation">
                                 <div id="ContentPlaceHolder1_ValidationSummary1" style="display:none;">
                                 </div>
                              </div>
                              <div style="float: left">
                                 <table width="650">
                                    <tr>
                                       <td style="width: 180px; height: 30px">
                                          Email:
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
                                          Nội dung:
                                       </td>
                                       <td>
                                          <textarea name="noi_dung" style="margin: 2px; width: 248px; height: 180px;"></textarea>
                                       </td>
                                       </tr>
                                       <tr>
                                       <td style="height: 30px">
                                          1+1 = ? :
                                       </td>
                                       <td>
                                          <input type="text" id="question"/>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                       </td>
                                       <td style="padding: 10px 0">
                                          <input type="button" id="submitbt" value="Hoàn tất"  class="btn floatLeft" />
                                       </td>
                                    </tr>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
					 </form>
<script>
	jQuery(document).ready(function(){
		$('#submitbt').click(function(){
			var result = $('#question').val();
			if(result!=2)
			{
				alert('Câu hỏi bảo mật không đúng');
			}	
			else
			{	
				document.forms.contact_form.submit();
			}
		});	
	});
</script>