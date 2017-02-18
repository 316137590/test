    <div id="container">

  		<div class="clearfix">
            <div class="content_l">
            	<div class="fl" id="resume_name">
	            	<div class="nameShow fl">
	            		<h1 title="jason的简历">jason的简历</h1>
	            		<span class="rename">重命名</span> | <a target="_blank" href="h/resume/preview.html">预览</a>
            		</div>
            		<form class="fl dn" id="resumeNameForm">
            			<input type="text" value="jason的简历" name="resumeName" class="nameEdit c9">
            			<input type="submit" value="保存"> | <a target="_blank" href="h/resume/preview.html">预览</a>
            		</form>
            	</div><!--end #resume_name-->
            	<div class="fr c5" id="lastChangedTime">最后一次更新：<span>2014-07-01 15:14 </span></div><!--end #lastChangedTime-->
            	<div id="resumeScore">
            		<div class="score fl">
            			<canvas height="120" width="120" id="doughnutChartCanvas" style="width: 120px; height: 120px;"></canvas>
           				<div style="" class="scoreVal"><span>15</span>分</div>
            		</div>

            		<div class="which fl">
            			<div>工作经历最能体现自己的工作能力，且完善后才可投递简历哦！</div>
            										<span rel="workExperience"><a>马上去完善</a></span>
						            		</div>
            	</div><!--end #resumeScore-->



                <form  action="?r=resume/index" method="post">
                    <div class="profile_box" id="expectJob">
                        <h2>个人简介</h2>
                        <span class="c_edit dn"></span>
                        <table>
                            <tbody>
                            <tr>
                                <td><input type="text" placeholder="请输入您的姓名" value="" name="username" id="expectPosition"></td>
                                <td></td>
                            </tr>

                            <tr>

                                <td><ul class="profile_radio clearfix reset">
                                    <li class="current">
                                        男<em></em>
                                        <input type="radio" checked="" name="sex" value="男">
                                    </li>
                                    <li>
                                        女<em></em>
                                        <input type="radio" name="sex" value="女">
                                    </li>
                                </ul> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="出生日期，如：1993-12" value="" name="birthday" id="expectPosition"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" placeholder="期望城市，如：北京" value="" name="home" >

                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" placeholder="个人邮件，如：xxx@qq.com" value="" name="email" >

                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" placeholder="个人联系方式，如：x手机号" value="" name="tel" >

                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="profile_box" id="expectJob">
                        <h2>教育经验</h2>
                        <span class="c_edit dn"></span>
                        <table>
                            <tbody>
                            <tr>
                                <td><input type="text" placeholder="请输入您的最高学历" value="" name="education" id="expectPosition"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="毕业时间，如：1993-12" value="" name="finshtime" id="expectPosition"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" placeholder="就读的大学，如：北京" value="" name="school" >

                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="profile_box" id="expectJob">
                        <h2>期望工作</h2>
                        <span class="c_edit dn"></span>
                        <table>
                            <tbody>

                            <tr>
                                <td><ul class="profile_radio clearfix reset">
                                    <li class="current">
                                        全职<em></em>
                                        <input type="radio" checked="" name="job" value="全职">
                                    </li>
                                    <li>
                                        兼职<em></em>
                                        <input type="radio" name="job" value="兼职">
                                    </li>
                                    <li>
                                        实习<em></em>
                                        <input type="radio" name="job" value="实习">
                                    </li>
                                </ul> </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td><input type="text" placeholder="期望职位，如：产品经理" value="" name="duty" id="expectPosition"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" placeholder="期望城市，如：北京" value="" name="place" >

                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" placeholder="期望薪资" value="" name="money">
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                    </div><!--end #expectJob-->

                    <div class="profile_box" id="">
                        <h2>工作经历</h2>
                        <span class="c_edit dn"></span>
                        <table>
                            <tbody><tr>
                                <td valign="top">
                                    <input type="text" placeholder="公司名称" name="companyName" class="companyName">
                                </td>
                                <td>

                                </td>

                            </tr>
                            <tr>
                                <td valign="top">
                                    <input type="text" placeholder="职位名称，如：产品经理" name="positionName" class="positionName"></span>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <input type="text" name="jobstime" placeholder="开始时间"/>
                                </td>
                                <td></td>


                            </tr>
                            <tr>
                                <td valign="top">
                                    <input type="text" name="jobetime" placeholder="结束时间"/>
                                </td>
                                <td></td>


                            </tr>

                            </tbody></table>
                    </div><!--end #expectJob-->

                    <div class="profile_box">
                        <h2>项目经验</h2>
                        <span class="c_edit dn"></span>
                        <table>
                            <tbody><tr>
                                <td valign="top">
                                    <input type="text" placeholder="项目名称" name="projectName" class="projectName">
                                </td>
                                <td>

                                </td>


                            </tr>
                            <tr>
                                <td valign="top">
                                    <input type="text" placeholder="担任职务，如：产品负责人" name="thePost" class="thePost">
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <input type="text" name="pstime" placeholder="开始时间"/>
                                </td>
                                <td></td>


                            </tr>
                            <tr>
                                <td valign="top">
                                    <input type="text" name="petime" placeholder="结束时间"/>
                                </td>
                                <td></td>


                            </tr>
                            <tr>

                                <td colspan="3">
                                    <textarea class="pdesc" name="projectdesc" placeholder="项目描述"></textarea>
                                    <div class="word_count">你还可以输入 <span>500</span> 字</div>
                                </td>
                                <td></td>
                            </tr>


                            </tbody></table>
                    </div>
                      <div class="profile_box">
                        <h2>自我描述</h2>
                        <span class="c_edit dn"></span>
                          <table>
                              <tbody>
                              <tr>
                                  <td colspan="2">
                                      <textarea class="selfDescription s_textarea" name="selfdesc" placeholder=""></textarea>
                                      <div class="word_count">你还可以输入 <span>500</span> 字</div>
                                  </td>
                              </tr>
                              <tr>
                                  <td colspan="2">
                                      <input type="submit" value="保 存 啊" class="btn_profile_save">
                                  </td>
                              </tr>
                              </tbody></table>
                    </div>
                    </form>




























        </form><!--end #expectForm-->









            </div><!--end .content_l-->
            <div class="content_r">
            	<div class="mycenterR" id="myInfo">
            		<h2>我的信息</h2>
            		<a target="_blank" href="collections.html">我收藏的职位</a>
            		<br>
            		            		            		<a target="_blank" href="subscribe.html">我订阅的职位</a>
            	</div><!--end #myInfo-->

				<div class="mycenterR" id="myResume">
            		<h2>我的附件简历
            			            			<a title="上传附件简历" href="#uploadFile" class="inline cboxElement">上传简历</a>
            			            		</h2>
            		<div class="resumeUploadDiv">
	            			            		暂无附件简历
	            		            		</div>
            	</div><!--end #myResume-->

            	<div class="mycenterR" id="resumeSet">
            		<h2>投递简历设置  <span>修改设置</span></h2>
            		<!-- -1 (0=附件， 1=在线， 其他=未设置) -->
            		            		            			<div class="noSet set0 dn">默认使用<span>附件简历</span>进行投递</div>
            			<div class="noSet set1 dn">默认使用<span>在线简历</span>进行投递</div>
						<div class="noSet">暂未设置默认投递简历</div>
            		            		<input type="hidden" class="defaultResume" value="-1">
            		<form class="dn" id="resumeSetForm">
	            		<label><input type="radio" value="1" class="resume1" name="resume">默认使用<span>在线简历</span>进行投递</label>
	            		<label><input type="radio" value="0" class="resume0" name="resume">默认使用<span>附件简历</span>进行投递</label>
	            		<span class="setTip error"></span>
	            		<div class="resumeTip">设置后投递简历时将不再提醒</div>
	            		<input type="submit" value="保 存" class="btn_profile_save">
						<a class="btn_profile_cancel" href="javascript:;">取 消</a>
	            	</form>
            	</div><!--end #resumeSet-->

				<div class="mycenterR" id="myShare">
            		<h2>当前每日投递量：10个</h2>
            		<a target="_blank" href="h/share/invite.html">邀请好友，提升投递量</a>
            	</div><!--end #myShare-->


				<div class="greybg qrcode mt20">
                	<img width="242" height="242" alt="拉勾微信公众号二维码" src="style/images/qr_resume.png">
                    <span class="c7">微信扫一扫，轻松找工作</span>
                </div>
            </div><!--end .content_r-->
        </div>

      <input type="hidden" id="userid" name="userid" value="314873">

<!-------------------------------------弹窗lightbox ----------------------------------------->
<div style="display:none;">
	<!-- 上传简历 -->
	<div class="popup" id="uploadFile">
	    <table width="100%">
	    	<tbody><tr>
	        	<td align="center">
	                <form>
	                    <a class="btn_addPic" href="javascript:void(0);">
	                    	<span>选择上传文件</span>
	                        <input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload')" class="filePrew" id="resumeUpload" name="newResume" size="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" tabindex="3">
	                    </a>
	                </form>
	            </td>
	        </tr>
	    	<tr>
	        	<td align="left">支持word、pdf、ppt、txt、wps格式文件<br>文件大小需小于10M</td>
	        </tr>
	        <tr>
	        	<td align="left" style="color:#dd4a38; padding-top:10px;">注：若从其它网站下载的word简历，请将文件另存为.docx格式后上传</td>
	        </tr>
	    	<tr>
	        	<td align="center"><img width="55" height="16" alt="loading" style="visibility: hidden;" id="loadingImg" src="style/images/loading.gif"></td>
	        </tr>
	    </tbody></table>
	</div><!--/#uploadFile-->

	<!-- 简历上传成功 -->
	<div class="popup" id="uploadFileSuccess">
     	<h4>简历上传成功！</h4>
         <table width="100%">
             <tbody><tr>
                 <td align="center"><p>你可以将简历投给你中意的公司了。</p></td>
             </tr>
         	<tr>
             	<td align="center"><a class="btn_s" href="javascript:;">确&nbsp;定</a></td>
             </tr>
         </tbody></table>
     </div><!--/#uploadFileSuccess-->

	<!-- 没有简历请上传 -->
    <div class="popup" id="deliverResumesNo">
        <table width="100%">
            <tbody><tr>
                <td align="center"><p class="font_16">你在拉勾还没有简历，请先上传一份</p></td>
            </tr>
        	<tr>
            	<td align="center">
                    <form>
                        <a class="btn_addPic" href="javascript:void(0);">
                        	<span>选择上传文件</span>
                        	<input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload1')" class="filePrew" id="resumeUpload1" name="newResume" size="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M">
                        </a>
                    </form>
                </td>
            </tr>
        	<tr>
            	<td align="center">支持word、pdf、ppt、txt、wps格式文件，大小不超过10M</td>
            </tr>
        </tbody></table>
    </div><!--/#deliverResumesNo-->

    <!-- 上传附件简历操作说明-重新上传 -->
    <div class="popup" id="fileResumeUpload">
        <table width="100%">
            <tbody><tr>
                <td>
                	<div class="f18 mb10">请上传标准格式的word简历</div>
                </td>
            </tr>
            <tr>
                <td>
                	<div class="f16">
                		操作说明：<br>
                		打开需要上传的文件 - 点击文件另存为 - 选择.docx - 保存
                	</div>
                </td>
            </tr>
        	<tr>
            	<td align="center">
            		<a title="上传附件简历" href="#uploadFile" class="inline btn cboxElement">重新上传</a>
            	</td>
            </tr>
        </tbody></table>
    </div><!--/#fileResumeUpload-->

    <!-- 上传附件简历操作说明-重新上传 -->
    <div class="popup" id="fileResumeUploadSize">
        <table width="100%">
            <tbody><tr>
                <td>
                	<div class="f18 mb10">上传文件大小超出限制</div>
                </td>
            </tr>
            <tr>
                <td>
                	<div class="f16">
                		提示：<br>
                		单个附件不能超过10M，请重新选择附件简历！
                	</div>
                </td>
            </tr>
        	<tr>
            	<td align="center">
            		<a title="上传附件简历" href="#uploadFile" class="inline btn cboxElement">重新上传</a>
            	</td>
            </tr>
        </tbody></table>
    </div><!--/#deliverResumeConfirm-->

</div>
<!------------------------------------- end ----------------------------------------->

<script src="style/js/Chart.min.js" type="text/javascript"></script>
<script src="style/js/profile.min.js" type="text/javascript"></script>
<!-- <div id="profileOverlay"></div> -->
<div class="" id="qr_cloud_resume" style="display: none;">
	<div class="cloud">
		<img width="134" height="134" src="">
		<a class="close" href="javascript:;"></a>
	</div>
</div>
<script>
$(function(){
	$.ajax({
        url:ctx+"/mycenter/showQRCode",
        type:"GET",
        async:false
   	}).done(function(data){
        if(data.success){
             $('#qr_cloud_resume img').attr("src",data.content);
        }
   	});
	var sessionId = "resumeQR"+314873;
	if(!$.cookie(sessionId)){
		$.cookie(sessionId, 0, {expires: 1});
	}
	if($.cookie(sessionId) &amp;&amp; $.cookie(sessionId) != 5){
		$('#qr_cloud_resume').removeClass('dn');
	}
	$('#qr_cloud_resume .close').click(function(){
		$('#qr_cloud_resume').fadeOut(200);
		resumeQR = parseInt($.cookie(sessionId)) + 1;
		$.cookie(sessionId, resumeQR, {expires: 1});
	});
});
</script>
			<div class="clear"></div>
			<input type="hidden" value="97fd449bcb294153a671f8fe6f4ba655" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<div id="footer">
		<div class="wrapper">
			<a rel="nofollow" target="_blank" href="h/about.html">联系我们</a>
		    <a target="_blank" href="h/af/zhaopin.html">互联网公司导航</a>
		    <a rel="nofollow" target="_blank" href="http://e.weibo.com/lagou720">拉勾微博</a>
		    <a rel="nofollow" href="javascript:void(0)" class="footer_qr">拉勾微信<i></i></a>
			<div class="copyright">&copy;2013-2014 Lagou <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP备14023790号-2</a></div>
		</div>
	</div>

<script src="style/js/core.min.js" type="text/javascript"></script>
<script src="style/js/popup.min.js" type="text/javascript"></script>

<!--  -->

<script type="text/javascript">
$(function(){
	$('#noticeDot-1').hide();
	$('#noticeTip a.closeNT').click(function(){
		$(this).parent().hide();
	});
});
var index = Math.floor(Math.random() * 2);
var ipArray = new Array('42.62.79.226','42.62.79.227');
var url = "ws://" + ipArray[index] + ":18080/wsServlet?code=314873";
var CallCenter = {
		init:function(url){
			var _websocket = new WebSocket(url);
			_websocket.onopen = function(evt) {
				console.log("Connected to WebSocket server.");
			};
			_websocket.onclose = function(evt) {
				console.log("Disconnected");
			};
			_websocket.onmessage = function(evt) {
				//alert(evt.data);
				var notice = jQuery.parseJSON(evt.data);
				if(notice.status[0] == 0){
					$('#noticeDot-0').hide();
					$('#noticeTip').hide();
					$('#noticeNo').text('').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
					$('#noticeNoPage').text('').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
				}else{
					$('#noticeDot-0').show();
					$('#noticeTip strong').text(notice.status[0]);
					$('#noticeTip').show();
					$('#noticeNo').text('('+notice.status[0]+')').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
					$('#noticeNoPage').text(' ('+notice.status[0]+')').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
				}
				$('#noticeDot-1').hide();
			};
			_websocket.onerror = function(evt) {
				console.log('Error occured: ' + evt);
			};
		}
};
CallCenter.init(url);
</script>

<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>