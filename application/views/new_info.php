<script src="../../jquery/jquery-1.7.2.min.js"></script>
<script src="../../jquery/jquery-1.7.2.js"></script>
<style type="text/css">
*{
	font-size: 15px;
}
#new_info{
	width:780px;
	height:430px;
	text-align: center;
}
.choose{
	margin:10px;
}
.hide{
	display:none;
}
#menu img{
	cursor:pointer;
}
span{
	cursor:pointer;
}
		.bnt1,.bnt2{
			width:60px;
			height:30px;
			border:0px;
			cursor:pointer;
		}
		.bnt1{
			background-image:url("../../images/b3.png");
		}
		.bnt2{
			background-image:url("../../images/b4.png");
		}
</style>
<div id="new_info">
<div id="menu">
	<img class="choose" src="../../images/b1.png"/>
	<img class="choose" src="../../images/b2.png"/>
</div>
<hr/>
<div id="box">
	<div class="cont">
<table width="600" border="0" align="left" cellpadding="0" cellspacing="1" height="180" style="margin-left:140px;margin-top:20px;">
  <form enctype='multipart/form-data' action='form1' name="shuju" method="POST">
  <tr>
    <td height="26" align="left"style="font-size:14px; font-weight:bold">
    &nbsp;数据导入</td>
  </tr>
   
      <tr>
      	<td height="10"></td>
        <td height="10"></td>
      </tr>
       <tr>
              <td height="28">选择需要导入的文件：</td>
              <td>
			  <input type='file' name='excel_file' size='15'>
			  </td>
            </tr>
             <tr>
        	<td></td>
          <td height="10">只支持.cvs和.xls格式文件<span style="color:blue;font-weight:bold" name="htget">如何获取？</span></td>
        </tr>
        <tr>
      	<td height="20"></td>
        <td height="20"></td>
      </tr>
            <tr>
              <td align="right"><input class="bnt1"name="Submit" type="submit" value="" >&nbsp;
              </td>
              <td align="left">&nbsp;<input class="bnt2" name="Reset"type="reset" value=""></td>
              </tr>
              </form>
    </table>
 

		<?php if($error!="") echo $error;?>
	</div>
	<div class="hide cont" style="text-align:left">
		<form name="form2" mothed="POST" action="form2">
		<p style="color:#0000E3;font-size:24px">非默认项</p>
			<label>设备编号</label><input type="text" name="设备编号"/>
			<label>分类号&nbsp;&nbsp;</label><input type="text" name="分类号"/>
			<label>仪器名称</label><input type="text" name="仪器名称"/><br/>
			<label>型&nbsp;&nbsp;&nbsp;&nbsp;号</label><input type="text" name="型号"/>
			<label>规&nbsp;&nbsp;&nbsp;&nbsp;格</label><input type="text" name="规格"/>
			<label>单&nbsp;&nbsp;&nbsp;&nbsp;价</label><input type="text" name="单价"/><br/>
			<label>厂&nbsp;&nbsp;&nbsp;&nbsp;家</label><input type="text" name="厂家"/>
			<label>出厂号&nbsp;&nbsp;</label><input type="text" name="出厂号"/>
			<label>存放地名称</label><input type="text" name="存放地名称"/>
			<br/>
			<label>购置日期</label><input type="text" name="购置日期"/>
			<label>出厂日期</label><input type="text" name="出厂日期"/>
			<label>经费科目名</label><input type="text" name="经费科目名"/><br/>
			<label>经费科目</label><input type="text" name="经费科目"/>
			<label>使用方向</label><input type="text" name="使用方向"/>
			<label>使用方向名</label><input type="text" name="使用方向名"/><br/>
			<label>领用人&nbsp;&nbsp;</label><input type="text" name="领用人"/>
			<label>经手人&nbsp;&nbsp;</label><input type="text" name="经手人"/>
			<label>记账人&nbsp;&nbsp;</label><input type="text" name="记账人"/><br/>
			<label>入库时间</label><input type="text" name="入库时间"/>
			<label>资产类别</label><input type="text" name="资产类别"/>
			<label>国际分类号</label><input type="text" name="国际分类号"/><br/>
			<label>国别码&nbsp;&nbsp;</label><input type="text" name="国别码"/>
			<label>字符字段5</label><input type="text" name="字符字段5"/>
			<label>国际分类名</label><input type="text" name="国际分类名"/>
			<br/>
			<label>国别&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="国别"/>
			<label>输入日期</label><input type="text" name="输入日期"/>
			<label>标志&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="标志"/><br/>
			<label>变动日期</label><input type="text" name="变动日期"/>
			<label>管理级别</label><input type="text" name="管理级别"/>
			<label>使用单位号</label><input type="text" name="使用单位号"/><br/>
			<label>编&nbsp;&nbsp;&nbsp;&nbsp;号</label><input type="text" name="编号"/>
			<label>初审日期</label><input type="text" name="初审日期"/>
			
			<label>财务审核日期</label><input type="text" name="财务审核日期"/><br/>
			<label>数&nbsp;&nbsp;&nbsp;&nbsp;量</label><input type="text" name="数量"/>
			<label>批&nbsp;&nbsp;&nbsp;&nbsp;量</label><input type="text" name="批量"/>
			<label>财政分类id</label><input type="text" name="财政分类id"/><br/>
			<label>申请人&nbsp;&nbsp;</label><input type="text" name="申请人"/>
			<label>申请原因</label><input type="text" name="申请原因"/>
			<label>财政大类id</label><input type="text" name="财政大类id"/>
			<br/>
			<label>申请日期</label><input type="text" name="申请日期"/>
			<label>财政内主号</label><input type="text" name="财政内主号"/>
			<label>现状名&nbsp;&nbsp;</label><input type="text" name="现状名" 
/><br/>		
			<label>保修期限</label><input type="text" name="保修期限"/>
<label>计量单位</label><input type="text" name="计量单位"/>
            <label>现&nbsp;&nbsp;&nbsp;&nbsp;状</label><input type="text" name="现状"  />

		<p style="color:#0000E3;font-size:24px">默认项</p>
			<label>领用单位号</label><input type="text" name="领用单位号" value="1502
" />
			<label>领用单位名</label><input type="text" name="领用单位名" value="生物医学工程综合实验室
" />
			<label>设备来源</label><input type="text" name="设备来源" value="1" /><br/>
			<label>设备来源名</label><input type="text" name="设备来源名" value=购置"
" />
			<label>采购形式名</label><input type="text" name="采购形式名" value="部门集中采
" />
			<label>采购形式</label><input type="text" name="采购形式" value="" /><br/>
			<label>备&nbsp;&nbsp;&nbsp;&nbsp;注</label><input type="text" name="备注" value="" />
			<label>按十一类分</label><input type="text" name="按十一类分" value=电子产品及通信设备"
" />
			<label>按六类分</label><input type="text" name="按六类分" value=一般设备"
" /><br/>
			<label>六类资产</label><input type="text" name="六类资产" value="2" />
			<label>财务凭单</label><input type="text" name="财务凭单" value="" />
			<label>单据号&nbsp;&nbsp;</label><input type="text" name="单据号" value="" /><br/>
			<label>科研号&nbsp;&nbsp;</label><input type="text" name="科研号" value="" />
			<label>设备号&nbsp;&nbsp;</label><input type="text" name="设备号" value="" />
			<label>字符字段1</label><input type="text" name="字符字段1" value="" /><br/>
			<label>字符字段2</label><input type="text" name="字符字段2" value="" />
			<label>字符字段3</label><input type="text" name="字符字段3" value="" />
			<label>字符字段4</label><input type="text" name="字符字段4" value="" /><br/>
			<label>数字字段1</label><input type="text" name="数字字段1" value="0" />
			<label>数字字段2</label><input type="text" name="数字字段2" value="0" />
			<label>数字字段3</label><input type="text" name="数字字段3" value="0" /><br/>
			<label>数字字段4</label><input type="text" name="数字字段4" value="0" />
			<label>图片文件</label><input type="text" name="图片文件" value="" />
			<label>图文名称</label><input type="text" name="图文名称" value="" /><br/>
			<label>图片文件1</label><input type="text" name="图片文件1" value="" />
			<label>图文名称1</label><input type="text" name="图文名称1" value="" />
			<label>附件数量</label><input type="text" name="附件数量" value="0" /><br/>
			<label>附件总价</label><input type="text" name="附件总价" value="0" />
			<label>审&nbsp;&nbsp;&nbsp;&nbsp;核</label><input type="text" name="审核" value="1" />
			<label>输入人&nbsp;&nbsp;</label><input type="text" name="输入人" value="*
" /><br/>
			<label>清查方式</label><input type="text" name="清查方式" value="0" />
			<label>清查日期</label><input type="text" name="清查日期" value="  -   -
" />
			<label>清查异常</label><input type="text" name="清查异常" value="" /><br/>
			<label>财务审核</label><input type="text" name="财务审核" value="1" />
			<label>财务审核人</label><input type="text" name="财务审核人" value="" />
			<label>初&nbsp;&nbsp;&nbsp;&nbsp;审</label><input type="text" name="初审" value="1" /><br/>
			<label>初审人&nbsp;&nbsp;</label><input type="text" name="初审人" value="" />
			<label>校&nbsp;&nbsp;&nbsp;&nbsp;区</label><input type="text" name="校区" value="0" />
			<label>存放地编号</label><input type="text" name="存放地编号" value="" />
			<br/>
			<label>折旧方式名</label><input type="text" name="折旧方式名" value="无折旧
" />
			<label>折旧方式</label><input type="text" name="折旧方式" value="0" />
			<label>处置方式</label><input type="text" name="处置方式" value="0" /><br/>
			<label>供货商&nbsp;&nbsp;</label><input type="text" name="供货商" value="" />
			<label>价值类型</label><input type="text" name="价值类型" value="1" />
			<label>发票号&nbsp;&nbsp;</label><input type="text" name="发票号" value="" /><br/>
			<label>申请负责人</label><input type="text" name="申请负责人" value="" />
			<label>使用年限</label><input type="text" name="使用年限" value="10" />
			<label>累计折旧额</label><input type="text" name="累计折旧额" value="0" /><br/>
			<label>折旧残值</label><input type="text" name="折旧残值" value="0" />
			<label>净&nbsp;&nbsp;&nbsp;&nbsp;值</label><input type="text" name="净值" value="0" />
			
			<label>变动领用人</label><input type="text" name="变动领用人" value="" /><br/>
			<label>变动地名称</label><input type="text" name="变动地名称" value="" />
			<label>变动地编号</label><input type="text" name="变动地编号" value="" />
			<label>变动单据号</label><input type="text" name="变动单据号" value="" /><br/>
			<label>财政资产号</label><input type="text" name="财政资产号" value="42000049698026700S
" />
			<label>财审内头号</label><input type="text" name="财审内头号" value="0" />
			<label>财审资头号</label><input type="text" name="财审资头号" value="" /><br/>
			<label>财审内体号</label><input type="text" name="财审内体号" value="0" />
			<label>财处内头号</label><input type="text" name="财处内头号" value="0" />
			<label>财处资头号</label><input type="text" name="财处资头号" value="" /><br/>
			<label>财处内体号</label><input type="text" name="财处内体号" value="0" />
			<label>接收主管</label><input type="text" name="接收主管" value="" />
			<label>收购单位</label><input type="text" name="收购单位" value="" /><br/>
			<label>变人员编号</label><input type="text" name="变人员编号" value="" />
			<label>人员编号</label><input type="text" name="人员编号" value="" />
			<label>修改标志</label><input type="text" name="修改标志" value="" />
			<br/><br/>
			<hr/>
			<br/>
			<center>
		<input class="bnt1"name="Submit" type="submit" value="" >
		<input class="bnt2"name="Reset" type="reset" value="" >
		</center>
		</form>
		</div><!--end of hide-two-->
	</div>
</div>
<script type="text/javascript">
	var $menu_img=$("div#menu img");
	$menu_img.click(function()
	{
		var index=$menu_img.index(this);
		var $cont=$("div.cont");
		$cont.eq(index)
			.show()
			.siblings().hide();
		$(this).animate({height:"100px"})
			.siblings().animate({height:"90px"});
	});
	var $htget=$("span[name=htget]");
	$htget.click(function(){
		alert("显示文件的后缀，直接把后缀改成相应的格式的后缀。");
	});
var $bnt=$("input.bnt");
	$bnt.mouseover(function(){
		$(this).css("background-color","#D0D0D0");
	})
	.mouseout(function(){
		$(this).css("background-color","white");
	});
</script>