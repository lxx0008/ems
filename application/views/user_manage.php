	<script src="../jquery/jquery-1.7.2.min.js"></script>
	<script src="../jquery/jquery-1.7.2.js"></script>
	<style type="text/css">
		#user{
			width:800px;
			height:440px;	
		}
		#menu ul{
			padding-left: 30px;
			margin:0px;
		}
		#menu ul li{
			width:25.5%;
			font-size: 25px;
			text-align: center;
			background-color: #DDDDFF;
			list-style: none;
			float: left;
			padding: 15px 0px;
			margin:0px 30px;
		}
		#box{
			padding-top:80px;
		}
		#box table{
			border-collapse:collapse;
			margin-left: 45px;
			text-align: center;
		}
		#box table tr td{
			border:2px #ccc solid;
			width:140px;
		}
		#xiey{
			width:400px;
			height:220px;
			border:5px gray dotted;
			float:right;
		}
		#reg{
			text-align: left;
			margin-left: 50px;
		}
		#u_info{
			padding-left: 250px;
		}
		.hide{
			display:none;
		}
		span{
			color:red;
		}
		.bnt1,.bnt2{
			width:60px;
			height:30px;
			border:0px;
			cursor:pointer;
		}
		.bnt1{
			background-image:url("../images/b3.png");
		}
		.bnt2{
			background-image:url("../images/b4.png");
		}
	</style>
<div id="user">
	<div id="menu">
		<ul>
			<li>完善/修改资料</li>
			<li>联系人</li>
			<?php 
				if($this->session->userdata('user_power')==1)
					echo "<li>添加新用户</li>";
			?>
		</ul>
	</div>
	<div id="box">
		<div id="u_info">
			<form action="user_manage/update_user" name="user_info" method="POST">
				<p><label>工号：</label><input type="text" name="UId" value="<?php echo $user['UId']?>"><span ></span></p>
				<p><label>姓名：</label><input type="text" name="UName" value="<?php echo $user['UName']?>"></p>
				<p><label>电话：</label><input type="text" name="UPhone" value="<?php echo $user['UPhone']?>" /><span></span></p>
				<p><label>&nbsp;QQ ：</label><input type="text" name="UQQ" value="<?php echo $user['UQQ']?>"><span></span></p>
				<p><label>Email：</label><input type="email" name="UEmail" value="<?php echo $user['UEmail']?>"><span></span></p>
				<input class="bnt1"name="Submit" type="submit" value="" >&nbsp;
				&nbsp;
		<input class="bnt2" name="Reset" type="reset" value="" >
			</form>
		</div>
		<div class="hide">
			<table>
				<tbody>
					<tr>
						<th>工号</th>
						<th>姓名</th>
						<th>Email</th>
						<th>电话</th>
						<th>QQ</th>
					</tr>
			<?php foreach($user_all as $arr):{?>
				<?php
					if($arr['UId'] !== $user['UId'])
					{
					echo "<tr><td>".$arr['UId']."</td>";
					echo "<td>".$arr['UName']."</td>";
					echo "<td>".$arr['UEmail']."</td>";
					echo "<td>".$arr['UPhone']."</td>";
					echo "<td><a href='tencent://message/?uin=".$arr['UQQ']."&Site=www.cnblogs.com&Menu=yes' target='blank'><img alt='为您服务' src='../images/logoqq.png' /></a>".$arr['UQQ']."</td></tr>";
					}
				?>
			<?php }endforeach;?>
				</tbody>
			</table>
		</div>
		<div class="hide">
			<form action="user_manage/new_user" name="new_user" method="POST">
			<div id="xiey">
					<h3>《用户协议》</h3>
					<textarea rows="8" readonly="readonly" cols="45">
　　尊敬的客户，欢迎您注册成为本网站用户。在注册前请您仔细阅读如下服务条款： 本服务协议双方为本网站与本网站客户，本服务协议具有合同效力。您确认本服务协议后，本服务协议即在您和本网站之间产生法律效力。请您务必在注册之前认真阅读全部服务协议内容，如有任何疑问，可向本网站咨询。 无论您事实上是否在注册之前认真阅读了本服务协议，只要您点击协议正本下方的"注册"按钮并按照本网站注册程序成功注册为用户，您的行为仍然表示您同意并签署了本服务协议。 协议细则
1、本网站服务条款的确认和接纳
本网站各项服务的所有权和运作权归本网站拥有。
2、用户必须：
(1)自行配备上网的所需设备， 包括个人电脑、调制解调器或其他必备上网装置。
(2)自行负担个人上网所支付的与此服务有关的电话费用、 网络费用。
3、用户在本网站交易平台上不得发布下列违法信息：
(1)反对宪法所确定的基本原则的；
(2)危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；
(3)损害国家荣誉和利益的；
(4)煽动民族仇恨、民族歧视，破坏民族团结的；
(5)破坏国家宗教政策，宣扬邪教和封建迷信的；
(6)散布谣言，扰乱社会秩序，破坏社会稳定的；
(7)散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；
(8)侮辱或者诽谤他人，侵害他人合法权益的；
(9)含有法律、行政法规禁止的其他内容的。
4、有关个人资料
用户同意：
(1) 提供及时、详尽及准确的个人资料。
(2).同意接收来自本网站的信息。
(3) 不断更新注册资料，符合及时、详尽准确的要求。所有原始键入的资料将引用为注册资料。
5、电子邮件
用户在注册时应当选择稳定性及安全性相对较好的电子邮箱，并且同意接受并阅读本网站发往用户的各类电子邮件。如用户未及时从自己的电子邮箱接受电子邮件或因用户电子邮箱或用户电子邮件接收及阅读程序本身的问题使电子邮件无法正常接收或阅读的，只要本网站成功发送了电子邮件，应当视为用户已经接收到相关的电子邮件。电子邮件在发信服务器上所记录的发出时间视为送达时间。
6、服务条款的修改
本网站有权在必要时修改服务条款，本网站服务条款一旦发生变动，将会在重要页面上提示修改内容。如果不同意所改动的内容，用户可以主动取消获得的本网站信息服务。如果用户继续享用本网站信息服务，则视为接受服务条款的变动。本网站保留随时修改或中断服务而不需通知用户的权利。本网站行使修改或中断服务的权利，不需对用户或第三方负责。
7、用户的帐号、密码和安全性
你一旦注册成功成为用户，你将得到一个密码和帐号。如果你不保管好自己的帐号和密码安全，将负全部责任。另外，每个用户都要对其帐户中的所有活动和事件负全责。你可随时根据指示改变你的密码，也可以结束旧的帐户重开一个新帐户。用户同意若发现任何非法使用用户帐号或安全漏洞的情况，请立即通知本网站。
8、拒绝提供担保
用户明确同意信息服务的使用由用户个人承担风险。本网站不担保服务不会受中断，对服务的及时性，安全性，出错发生都不作担保，但会在能力范围内，避免出错。
9、有限责任
本网站对任何直接、间接、偶然、特殊及继起的损害不负责任，这些损害来自：不正当使用本网站服务，或用户传送的信息不符合规定等。这些行为都有可能导致本网站形象受损，所以本网站事先提出这种损害的可能性，同时会尽量避免这种损害的发生。
10、信息的储存及限制
本网站有判定用户的行为是否符合本网站服务条款的要求和精神的权利，如果用户违背本网站服务条款的规定，本网站有权中断其服务的帐号。
11、用户管理
用户必须遵循：
(1) 使用信息服务不作非法用途。
(2) 不干扰或混乱网络服务。
(3) 遵守所有使用服务的网络协议、规定、程序和惯例。用户的行为准则是以因特网法规，政策、程序和惯例为根据的。
12、保障
用户同意保障和维护本网站全体成员的利益，负责支付由用户使用超出服务范围引起的律师费用，违反服务条款的损害补偿费用，其它人使用用户的电脑、帐号和其它知识产权的追索费。
13、结束服务
用户或本网站可随时根据实际情况中断一项或多项服务。本网站不需对任何个人或第三方负责而随时中断服务。用户若反对任何服务条款的建议或对后来的条款修改有异议，或对本网站服务不满，用户可以行使如下权利：
(1) 不再使用本网站信息服务。
(2) 通知本网站停止对该用户的服务。 结束用户服务后，用户使用本网站服务的权利马上中止。从那时起，用户没有权利，本网站也没有义务传送任何未处理的信息或未完成的服务给用户或第三方。
14、通告
所有发给用户的通告都可通过重要页面的公告或电子邮件或常规的信件传送。服务条款的修改、服务变更、或其它重要事件的通告都会以此形式进行。
15、信息内容的所有权
本网站定义的信息内容包括：文字、软件、声音、相片、录象、图表；在广告中全部内容；本网站为用户提供的其它信息。所有这些内容受版权、商标、标签和其它财产所有权法律的保护。所以，用户只能在本网站和广告商授权下才能使用这些内容，而不能擅自复制、再造这些内容、或创造与内容有关的派生产品。
16、法律
本网站信息服务条款要与中华人民共和国的法律解释一致。用户和本网站一致同意服从本网站所在地有管辖权的法院管辖。
</textarea>
</br>
					<input type="radio" name="choose" value="accept" checked/>同意
					<input type="radio" name="choose" value="unaccept"/>不同意
				</div>
				<div id="reg">
				<p><label>工号：</label><input type="text" id="new_id"name="new_id" onblur="validation(0)"/><span name="v_span">*4~12个数字</span></p>
				<p><label>姓名：</label><input type="text" id="new_name"name="new_name" onblur="validation(1)"/><span name="v_span">*</span></p>
				<p><label>密码：</label><input type="password" id="new_pw"name="new_pw" onblur="validation(2)"/><span name="v_span">*4~12个数字</span></p>
				<p><label>权限：</label><input type="text" id="new_power"name="new_power" onblur="validation(3)"/><span name="v_span">*0或1</span></p>
				<p><input class="bnt1" name="Submit" type="submit" value="" >
		<input class="bnt2" name="Reset" type="reset" value="" ></p>
		</div>
				<br/>
				<br/>
				<p style="color:red;font-size:10px;">注：权限有两个选择：0或1，0为普通用户，不能添加新用户，也不能打印报表
				1为管理员，可行使所有权利。</p>
				
			</form>
		</div>
	</div>
</div>
	<script type="text/javascript">
	function validation(i)
	{
		var patt_num_0 = /\d{4,12}/g;
		var patt_num_1= /\D/g;
		var v_span=document.getElementsByName("v_span");
		switch(i)
		{
			case 0:{var $val=document.getElementById("new_id");break;}
			case 1:{var $val_n=document.getElementById("new_name");
					if($val_n.value != "")
						v_span[i].innerHTML="<img src='../images/true.jpg'>";
					break;}
			case 2:{var $val=document.getElementById("new_pw");break;}
			case 3:{var $val_p=document.getElementById("new_power");
								if($val_p.value == 0 || $val_p.value == 1)
						v_span[i].innerHTML="<img src='../images/true.jpg'>";
					else
						v_span[i].innerHTML="<img src='../images/false.jpg'>";}
		};
		if(!patt_num_0.test($val.value) || patt_num_1.test($val.value)) //当输入结果有非数字字符时
						{
							v_span[i].innerHTML="<img src='../images/false.jpg'>";
							$val.value="";
						}
					else
							v_span[i].innerHTML="<img src='../images/true.jpg'>";	
	};
		$menu_li = $("div#menu ul li");
		$menu_li.mouseover(function(){
			$(this).css({"background-color":"#FF5151","color":"white","font-weight":"bold"})
				.siblings().css({"background-color":"#DDDDFF","color":"black","font-weight":"normal"});
			var index=$menu_li.index(this);
			$("div#box > div")
				.eq(index).show()
				.siblings().hide();
		});
		var $UId=$("input[name='UId']");
		var $UPhone=$("input[name='UPhone']");
		var $UQQ=$("input[name='UQQ']");
		var $UEmail=$("input[name='UEmail']");
		$UId.blur(function(){
			if(isNaN($(this).val())) //isNaN()结果为真，为非数字
			{
				$(this).next().text("这里只能是数字哦！");
				$(this).val("");
			}
			else	
				$(this).next().text("");
		});
		$UPhone.blur(function(){
			if(isNaN($(this).val())) //isNaN()结果为真，为非数字
			{
				$(this).next().text("这里只能是数字哦！");
				$(this).val("");
			}
			else
				{
					if($(this).val().length>11)
					{
						$(this).next().text("电话号码没有这么长哦~");
						$(this).val("");
					}
					else	
						$(this).next().text("");
				}	
		});
		$UQQ.blur(function(){
			if(isNaN($(this).val())) //isNaN()结果为真，为非数字
			{
				$(this).next().text("这里只能是数字哦！");
				$(this).val("");
			}
			else	
				$(this).next().text("");
		});	
	</script>
