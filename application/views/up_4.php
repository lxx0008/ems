	<script src="../../../jquery/jquery-1.7.2.min.js"></script>
	<script src="../../../jquery/jquery-1.7.2.js"></script>
	<style type="text/css">
		.box_nav table{
			padding-left: 50px;
			text-align: center;	
		}
		.box_nav table tr td{
			width:150px;
		}
	</style>
	<div class="menu"><img src="../../../images/r4.png"></div>
		<div class="hide box_nav">
			<hr/>
			<table>
			<tr>
			<th>设备编号</th>
			<th>仪器名称</th>
			<th>型号</th>
			<th>维修结果</th>
			<tr><td><hr/></td><td><hr/></td><td><hr/></td></tr>
			<?php foreach($wx_info as $arr):{?>
				<form action=<?php echo "'?".$arr['设备编号']."'"?> method='post' enctype='multipart/form-data'>
				<?php 
					echo "<tr class='".$arr['设备编号']."'>";
					echo "<td>".$arr['设备编号']."</td>";
					echo "<td>".$arr['仪器名称']."</td>";
					echo "<td>".$arr['型号']."</td>";
					echo "<td><input  type='submit' name='sub' value='已修好'> <input type='submit' name='sub' value='报废'></td>";
					echo "</tr>";
				?>
				</form>
			<?php }endforeach;?>
			</table>
		</div>
	</div>
<?php include("conn.php");?>
<?php
		$xx = $_SERVER["QUERY_STRING"];//要报废的设备设备编号
	if($xx)
	{
 		if($_POST['sub'])
 		{
			if($_POST['sub'] == '已修好')
			{
			$res=mysql_query("UPDATE shebei set 现状 = '1',现状名 = '在用' where 设备编号 = '".$xx."'");//shebei中的数据更新
			if($res)
				echo "<script>$('tr.".$xx."').hide();</script>";
			}
			if($_POST['sub'] == '报废')
			{
			$res=mysql_query("UPDATE shebei set 现状 = '0',现状名 = '报废' where 设备编号 = '".$xx."'");//shebei中的数据更新
			if($res)
				echo "<script>$('tr.".$xx."').hide();</script>";
			}
		@mysql_close($link);
		}
	}
?>