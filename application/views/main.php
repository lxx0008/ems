<div id="main">
	<div id="one">
		<div><img src="../images/P1.png" width="168px"/></div>
		<div id="one-1-nav" class="classify"> <!--第一级分类-->
				<div id="menu">
					<ul>
						<li>按分类号查询</li>
						<li>按仪器名称查询</li>
						<li>按仪器型号查询</li>
						<li>按厂家名称查询</li>
						<li>按经费科目查询</li>
						<li>按领用人姓名查询</li>
						<li>按经手人姓名查询</li>
						<li>按国际分类号查询</li>
						<li>按国际分类名查询</li>
						<li>按购置日期查询</li>
					</ul>
				</div>
				<div id="box">
				<div class="hide">
				<p style="display:none">分类号</p>
				<table>
					<tbody>
						<?php $i=1;foreach ($分类号 as $res):{?>
						<?php foreach ($res as $arr):{?>
						<?php	
							if($i==1)
								echo "<tr>";
								echo "<td><a class='tds' href='page/index/分类号"."/".$arr."/0' target='two_cont' >".$arr."</a></td>";			
							if($i==5)
							{
								echo "</tr>";
								$i=0;
							}
							$i++;			
						?>
						<?php }endforeach;?>
						<?php }endforeach;?>
					</tbody>
				</table>
				</div>
				<div class="hide">
				<p style="display:none">仪器名称</p>
				<table>
					<tbody>
						<?php $i=1;foreach ($仪器名称 as $res):{?>
						<?php foreach ($res as $arr):{?>
						<?php	
							if($i==1)
								echo "<tr>";
								echo "<td><a class='tds' href='page/index/仪器名称"."/".$arr."/0' target='two_cont' >".$arr."</a></td>";			
							if($i==5)
							{
								echo "</tr>";
								$i=0;
							}
							$i++;			
						?>
						<?php }endforeach;?>
						<?php }endforeach;?>
					</tbody>
				</table>
				</div>
				<div class="hide">
				<p style="display:none">型号</p>
				<table>
					<tbody>
						<?php $i=1;foreach ($型号 as $res):{?>
						<?php foreach ($res as $arr):{?>
						<?php	
							if($i==1)
								echo "<tr>";
								echo "<td><a class='tds' href='page/index/型号"."/".$arr."/0' target='two_cont' >".$arr."</a></td>";			
							if($i==5)
							{
								echo "</tr>";
								$i=0;
							}
							$i++;			
						?>
						<?php }endforeach;?>
						<?php }endforeach;?>
					</tbody>
				</table>
				</div>
				<div class="hide">
				<p style="display:none">厂家</p>
				<table>
					<tbody>
						<?php $i=1;foreach ($厂家 as $res):{?>
						<?php foreach ($res as $arr):{?>
						<?php	
							if($i==1)
								echo "<tr>";
								echo "<td><a class='tds' href='page/index/厂家"."/".$arr."/0' target='two_cont' >".$arr."</a></td>";			
							if($i==5)
							{
								echo "</tr>";
								$i=0;
							}
							$i++;			
						?>
						<?php }endforeach;?>
						<?php }endforeach;?>
					</tbody>
				</table>
				</div>
				<div class="hide">
				<p style="display:none">经费科目</p>
				<table>
					<tbody>
						<?php $i=1;foreach ($经费科目 as $res):{?>
						<?php foreach ($res as $arr):{?>
						<?php	
							if($i==1)
								echo "<tr>";
								echo "<td><a class='tds' href='page/index/经费科目"."/".$arr."/0' target='two_cont' >".$arr."</a></td>";			
							if($i==5)
							{
								echo "</tr>";
								$i=0;
							}
							$i++;			
						?>
						<?php }endforeach;?>
						<?php }endforeach;?>
					</tbody>
				</table>
				</div>
				<div class="hide">
				<p style="display:none">领用人</p>
				<table>
					<tbody>
						<?php $i=1;foreach ($领用人 as $res):{?>
						<?php foreach ($res as $arr):{?>
						<?php	
							if($i==1)
								echo "<tr>";
								echo "<td><a class='tds' href='page/index/领用人"."/".$arr."/0' target='two_cont' >".$arr."</a></td>";			
							if($i==5)
							{
								echo "</tr>";
								$i=0;
							}
							$i++;			
						?>
						<?php }endforeach;?>
						<?php }endforeach;?>
					</tbody>
				</table>
				</div>
				<div class="hide">
				<p style="display:none">经手人</p>
				<table>
					<tbody>
						<?php $i=1;foreach ($经手人 as $res):{?>
						<?php foreach ($res as $arr):{?>
						<?php	
							if($i==1)
								echo "<tr>";
								echo "<td><a class='tds' href='page/index/经手人"."/".$arr."/0' target='two_cont' >".$arr."</a></td>";			
							if($i==5)
							{
								echo "</tr>";
								$i=0;
							}
							$i++;			
						?>
						<?php }endforeach;?>
						<?php }endforeach;?>
					</tbody>
				</table>
				</div>
				<div class="hide">
				<p style="display:none">国际分类号</p>
				<table>
					<tbody>
						<?php $i=1;foreach ($国际分类号 as $res):{?>
						<?php foreach ($res as $arr):{?>
						<?php	
							if($i==1)
								echo "<tr>";
								echo "<td><a class='tds' href='page/index/国际分类号"."/".$arr."/0' target='two_cont' >".$arr."</a></td>";			
							if($i==5)
							{
								echo "</tr>";
								$i=0;
							}
							$i++;			
						?>
						<?php }endforeach;?>
						<?php }endforeach;?>
					</tbody>
				</table>
				</div>
				<div class="hide">
				<p style="display:none">国际分类名</p>
				<table>
					<tbody>
						<?php $i=1;foreach ($国际分类名 as $res):{?>
						<?php foreach ($res as $arr):{?>
						<?php	
							if($i==1)
								echo "<tr>";
								echo "<td><a class='tds' href='page/index/国际分类名"."/".$arr."/0' target='two_cont' >".$arr."</a></td>";			
							if($i==5)
							{
								echo "</tr>";
								$i=0;
							}
							$i++;			
						?>
						<?php }endforeach;?>
						<?php }endforeach;?>
					</tbody>
				</table>
				</div>
				<div class="hide">
				<p style="display:none">购置日期</p>
				<table>
					<tbody>
						<?php $i=1;foreach ($购置日期 as $res):{?>
						<?php foreach ($res as $arr):{?>
						<?php	
							if($i==1)
								echo "<tr>";
								echo "<td><a class='tds' 
								href='page/index/购置日期"."/".$arr."/0' target='two_cont' >".$arr."</a></td>";			
							if($i==5)
							{
								echo "</tr>";
								$i=0;
							}
							$i++;			
						?>
						<?php }endforeach;?>
						<?php }endforeach;?>
					</tbody>
				</table>
				</div>
				</div>
		</div>
	</div><!-- end of one-->
	<div id="two">
		<div id="two-1">
			<div class="tit">&nbsp;&nbsp;当前位置&nbsp;&nbsp;<img src="../images/jt.png"/>&nbsp;&nbsp;<span>仪器设备查询</span></div>
		</div>
		<iframe src="../public.html" name="two_cont">
		</iframe>
		<div id="two-2" class="two-nav">
			<div><img src="../images/P2.png" width="168px"/></div>
			<div id="two-2-detail">
				<form>
					<select name="select_1">
						<option value="分类号">分类号</option>
						<option value="仪器名称">仪器名称</option>
						<option value="型号">仪器型号</option>
						<option value="设备编号" selected="selected">设备编号</option>
						<option value="领用单位号">领用单位号</option>
						<option value="领用单位名">领用单位名</option>
						<option value="经费科目">经费科目</option>
						<option value="购置日期">购置日期</option>
						<option value="领用人">领用人</option>
						<option value="经手人">经手人</option>
						<option value="输入人">输入人</option>
						<option value="校区">校区</option>
						<option value="申请人">申请人</option>
						<option value="供货商">供货商</option>
						<option value="使用年限">使用年限</option>
						<option value="保修期限">保修期限</option>
					</select>
					<input type="text" name="select_1_text" value="0"/>
					<select name="select_2">
						<option value="分类号" checked="checked">分类号</option>
						<option value="仪器名称" selected="selected">仪器名称</option>
						<option value="型号">仪器型号</option>
						<option value="设备编号" >设备编号</option>
						<option value="领用单位号">领用单位号</option>
						<option value="领用单位名">领用单位名</option>
						<option value="经费科目">经费科目</option>
						<option value="购置日期">购置日期</option>
						<option value="领用人">领用人</option>
						<option value="经手人">经手人</option>
						<option value="输入人">输入人</option>
						<option value="校区">校区</option>
						<option value="申请人">申请人</option>
						<option value="供货商">供货商</option>
						<option value="使用年限">使用年限</option>
						<option value="保修期限">保修期限</option>
					</select>
					<input type="text" name="select_2_text" value="0"/>
				</form>
			</div>
			<div id="two-3">
				<div><img src="../images/P4.png"/></div>
				<div id="two-3-detail">
					<ul>
						<li><img src="../images/P5.png"/></li>
						<li><img src="../images/P6.png"/></li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- end of two-->
	<div id="go_back">
		<a href="#"><img src="../images/to-top-arrow.png"/></a>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		var $menu=$("div#menu ul li");
		var $two_3=$("div#two-3");
		var $two_3_detail=$("div#two-3-detail ul li");
		var $hide_a=$("div#one-1-nav .hide a");
		var $hide_td=$("div#one-1-nav .hide td");
		var $s_1=$("select[name='select_1']");
		var $s_1_text=$("input[name='select_1_text']");
		var $s_2=$("select[name='select_2']");
		var $s_2_text=$("input[name='select_2_text']");
		var $iframe=$("iframe[name='two_cont']");
		var $excel=$("div#top-nav li#excel a");
		var $excel_li=$("div#excel_li ul li");
		var $up_li=$("div#up_li ul li");
		var $power=$("div#power");
		$("a#updata").mouseover(function(){
			$("div#up_li").show();
		});
		$("div#up_li").mouseleave(function(){
			$("div#up_li").hide();
		});
		$up_li.mouseover(function(){
			$(this).children().css("color","red");
			$(this).siblings().children().css("color","black");
		});
		$menu.click(function(){
			$("div#box").show();
			$(this).css("background-color","	#C4E1FF	")
				.siblings().css("background-color","white");
			var index=$menu.index(this);
			$top=34+index*32;

			$("div#box > div").eq(index)
				.show()
				.siblings().hide();
			$("div#box").css("top",$top+"px");
		});
		$("div#box").mouseleave(function(){
			$(this).hide();
			$menu.css("background-color","white");
		});
		$two_3.mouseover(function(){
			$two_3_detail.show();
		})
		.mouseleave(function(){
			$two_3_detail.hide();
		});
		$two_3_detail.mouseover(function(){
			var index=$two_3_detail.index(this);
			if(index=="0")
				$(this).children().attr("src","../images/P55.png");
			else
				$(this).children().attr("src","../images/P66.png");
		})
		.mouseout(function(){
			var index=$two_3_detail.index(this);
			if(index=="0")
				$(this).children().attr("src","../images/P5.png");
			else
				$(this).children().attr("src","../images/P6.png");
		});
		$two_3_detail.click(function(){
			var index=$two_3_detail.index(this);
			if(index=="0")
				{$tmp="page/index/现状/2/0";
				$iframe.attr("src",$tmp);}
			else
				{$tmp="page/index/现状/0/0";
				$iframe.attr("src",$tmp);}
		});
		$hide_td.mouseover(function(){
			$(this).css("background-color","#FF5151");
		})
		.mouseout(function(){
			$(this).css("background-color","	#C4E1FF");
		});
		$hide_a.click(function(){
			$a=$(this).text();
			$b=$(this).parent().parent().parent().parent().prev().text();
			switch($b){
     			case '分类号':$chos=0;break;
     			case '仪器名称':$chos=1;break;
     			case '型号':$chos=2;break;
     			case '厂家':$chos=3;break;
     			case '经费科目':$chos=4;break;
     			case '领用人':$chos=5;break;
     			case '经手人':$chos=6;break;
     			case '国际分类号':$chos=7;break;
     			case '国际分类名':$chos=8;break;
     			case '购置日期':$chos=9;break;
			};
			$("div#box > div").eq($chos)
				.hide();
			$("div#two-1 span").text("按"+$b+"查询："+$a);
			$excel.attr("name",$b+"/"+$a);
		});
		$s_1_text.keyup(function(){
			$tmp="page/query/"+$s_1.val()+"/"+$s_1_text.val()+"/"+$s_2.val()+"/"+$s_2_text.val()+"/0";
			$iframe.attr("src",$tmp);
			$excel.attr("name",$s_1.val()+"/"+$s_1_text.val()+"/"+$s_2.val()+"/"+$s_2_text.val());
		})
		.focus(function(){
			$("div#two-1 span").text("自定义查询");
			$(this).val("");
		});
		$s_2_text.keyup(function(){
			$tmp="page/query/"+$s_1.val()+"/"+$s_1_text.val()+"/"+$s_2.val()+"/"+$s_2_text.val()+"/0";
			$iframe.attr("src",$tmp);
			$excel.attr("name",$s_1.val()+"/"+$s_1_text.val()+"/"+$s_2.val()+"/"+$s_2_text.val());
		})
		.focus(function(){
			$("div#two-1 span").text("自定义查询");
			$(this).val("");
		});
		$excel_li.click(function(){
			if($(this).children().text() == "空白表格下载")
			{
				 if(confirm("确定下载空白表格？"))
							  {
												$excel.attr("href","excel/index/block");}	
			}
			else{
							  if(confirm("确定下载查询所得数据？"))
							  {
											$href=$excel.attr("name");
												$excel.attr("href","excel/index/"+$href);}
			}
		});
		$excel.mouseover(function(){
			$("div#excel_li").show();
		});
		$excel_li.mouseover(function(){
			$(this).children().css("color","red");
			$(this).siblings().children().css("color","black");
		});
		$excel_li.mouseleave(function(){
			$("div#excel_li").hide();
		});
		$("#user_iframe").fancybox({
				'width'             : '71%',
				'height'            : '81%',
				'autoScale'			: 'false',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
		});
		$("#new_info").fancybox({
				'width'             : '71%',
				'height'            : '81%',
				'autoScale'			: 'false',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
		});
		$("#up_li_1").fancybox({
				'width'             : '71%',
				'height'            : '81%',
				'autoScale'			: 'false',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
		});
		$("#up_li_2").fancybox({
				'width'             : '71%',
				'height'            : '81%',
				'autoScale'			: 'false',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
		});
		$("#up_li_3").fancybox({
				'width'             : '71%',
				'height'            : '81%',
				'autoScale'			: 'false',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
		});
		$("#up_li_4").fancybox({
				'width'             : '71%',
				'height'            : '81%',
				'autoScale'			: 'false',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
		});
		$("#xszy").fancybox({
				'width'             : '100%',
				'height'            : '120%',
				'autoScale'			: 'false',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
		});
	});
	$(window).scroll(function(){
		var top=$(document).scrollTop();
		if(top>=200)
		 	$("#go_back").fadeIn();
		else
			$("#go_back").fadeOut();
	});
</script>