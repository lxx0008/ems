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
	<div class="menu"><img src="../../../images/r2.png"></div>
		<div class="box_nav">
			<hr/>
			<table>
			<tr>
			<th>设备编号</th>
			<th>申请报废人</th>
			<th>申请时间</th>
			<?php 
				if($this->session->userdata('user_power')==1)
					echo "<th>是否同意</th>";
			?>
			</tr>
			<tr><td><hr/></td><td><hr/></td><td><hr/></td></tr>
			<?php foreach($bf_info as $arr):{?>
				<form action=<?php echo "'?".$arr['设备编号']."'"?> method='post' enctype='multipart/form-data'>
				<?php 
					echo "<tr class='".$arr['设备编号']."''>";
					if($this->session->userdata('user_power')==1)
					{
					echo "<td>".$arr['设备编号']."</td>";
					echo "<td>".$arr['申请人']."</td>";
					echo "<td>".$arr['申请时间']."</td>";
					echo "<td><input  type='submit' name='sub' value='同意'> <input type='submit' name='sub' value='不同意'></td>";
					}
					else
					{
						echo "<td>".$arr['设备编号']."</td>";
						echo "<td>".$arr['申请人']."</td>";
						echo "<td>".$arr['申请时间']."</td>";
					}
					echo "</tr>";
				?>
				</form>
			<?php }endforeach;?>
			</table>
		</div>
<?php include("conn.php");?>
<?php
	$xx = $_SERVER["QUERY_STRING"];//要报废的设备设备编号
	if($xx)
	{
 		if($_POST['sub'])
 		{
		//$link = mysql_connect("localhost","root","");
		//@mysql_select_db("master",$link) or die("Couldn't select database");
		//mysql_query("set names 'utf8'");
			if($_POST['sub'] == '同意')
			{
			$ress=mysql_query("UPDATE shebei set 现状='0',现状名='报废' where 设备编号 = '".$xx."'");//shebei中的数据更新
			$resr=mysql_query("UPDATE repair set 申请状态 = '2',审批人 = '".$this->session->userdata('user_name')."' where 设备编号 = '".$xx."'");//repair中的数据更新
			if($ress||$resr)
				echo "<script>$('tr.".$xx."').hide();</script>";
			}
			if($_POST['sub'] == '不同意')
			{
			$res=mysql_query("DELETE FROM repair where 设备编号 = '".$xx."'");
			if($res)
				echo "<script>$('tr.".$xx."').hide();</script>";
			}
		@mysql_close($link);
		}
	}
?>