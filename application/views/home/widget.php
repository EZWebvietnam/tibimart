<style>
                .support_widget {
                text-align: left;
                border-top: 1px solid #d5d5d5;
                border-left: 1px solid #d5d5d5;
                border-bottom: 1px solid #d5d5d5;
                border-radius: 5px 0 0 5px;
                -moz-border-radius: 5px 0 0 5px;
                -webkit-border-radius: 5px 0 0 5px;
                width: 33px;
                padding: 2px;
                position: fixed;
                z-index: 50;
                right: 0;
                bottom: 200px;
                background: #f5f5f5;
                }
                .support_widget .link {
                border-radius: 15px;
                -moz-border-radius: 15px;
                -webkit-border-radius: 15px;
                width: 25px;
                height: 25px;
                border: 1px solid #d5d5d5;
                background: #fff;
                margin: 3px;
                position: relative;
                }
                .support_widget .home {
                background: url(<?php echo base_url();?>template/ezwebvietnam/home/support/wg_home.png) no-repeat center center;
                opacity: .5;
                display: block;
                width: 25px;
                height: 25px;
                }
                .support_widget .phone {
                text-align: left;
                background: url(<?php echo base_url();?>template/ezwebvietnam/home/support/wg_phone.png) no-repeat center center;
                opacity: .5;
                display: block;
                width: 25px;
                height: 25px;
                }
                .support_widget .link .content {
                background: #fff;
                position: absolute;
                min-width: 200px;
                top: -10px;
                right: 35px;
                z-index: 9999;
                border-radius: 5px;
                -moz-border-radius: 5px;
                -webkit-border-radius: 5px;
                border: 1px solid #999;
                min-height: 35px;
                padding: 5px;
                display: none;
                font-size: 12px;
                font-weight: 700;
                }
                .support_widget .link .content {
                font-size: 12px;
                font-weight: 700;
                }
                .support_widget .chat {
                text-align: left;
                background: url(<?php echo base_url();?>template/ezwebvietnam/home/support/wg_chat.png) no-repeat center center;
                opacity: .5;
                display: block;
                width: 25px;
                height: 25px;
                }
                .support_widget .link:hover>.content {
                display: block;
                }
                .support_widget .top {
                background: url(<?php echo base_url();?>template/ezwebvietnam/home/support/wg_top.png) no-repeat center center;
                opacity: .5;
                display: block;
                width: 25px;
                height: 25px;
                }
                .support_widget .link .content:after {
                content: "";
                position: absolute;
                width: 0;
                height: 0;
                border-width: 13px;
                border-style: solid;
                border-color: transparent transparent transparent #999;
                top: 10px;
                right: -27px;
                }
                .support_widget {
                text-align: left;
                }
                </style>
				<div class="support_widget">
                <div class="link">
                    <a href="<?php echo base_url();?>" class="home"></a>
                </div>
                <div class="link">
                    <a class="phone" tabindex="1"></a>
                    <div class="content">
                        <!--Widget-->
                        <p><span style="font-size:18px;"><span style="font-size:16px;"><span style="color:#FF0000;"><strong><span style="font-size:20px;">Hotline:</span> &nbsp;</strong></span></span><span style="color:#0066cc;"><strong><?php echo $about[0]['phone']?></strong></span></span></p>


                        <!--/Widget-->
                    </div>
                </div>
                <div class="link">
                    <a class="chat" tabindex="2"></a>
                    <div class="content">
                        <!--Widget-->
                        <p>
						<span style="color:#FF0000;">
						<strong>
						<span style="font-size:20px;">Chat: &nbsp;&nbsp;</span>
						</strong>
						</span>
						<?php 
	            		foreach($list_yahoo as $yahoo_)
	            		{
						
	            		?>
						<a href="ymsgr:sendIM?<?php echo $yahoo_['nick']?>&amp;m=Chào bạn ! Tôi đang cần giúp đỡ!" style="line-height: 1.6em;"><img  border="0" height="30" src="<?php echo base_url();?>template/ezwebvietnam/home/support/yahoo.png" width="30"></a>
						<?php } ?>
						</p>


                        <!--/Widget-->
                    </div>
                </div>
                <div class="link">
                    <a href="#top" class="top"></a>
                </div>
            </div>  