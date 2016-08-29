	<script src="../../../jquery/jquery-1.7.2.min.js"></script>
	<script src="../../../jquery/jquery-1.7.2.js"></script>
	<style type="text/css">
		#one_nav,#two_nav{
			padding-left:150px;
		}
		.bnt1,.bnt2{
			width:60px;
			height:30px;
			border:0px;
			cursor:pointer;
		}
		.bnt1{
			background-image:url("../../../images/b3.png");
		}
		.bnt2{
			background-image:url("../../../images/b4.png");
		}
	</style>
	<div class="menu"><img src="../../../images/r1.png"></div>
	<div class="box">
		<div class="box_nav" id="one">
			<div id="one_nav">
				<p><a href="/sbglxt/index.php/moban_xz/index/1">申请仪器报修模板</a></p>
				<p><a href="/sbglxt/index.php/moban_xz/index/2">申请仪器报废模板</a></p>
				<form action='?act=updata' method="post" enctype='multipart/form-data'>
					<p><label>设&nbsp;&nbsp;备&nbsp;&nbsp;编&nbsp;&nbsp;号</label><input type="text" id="s_id" name="s_id"/></p>
					<p><label>要修改的信息项</label><input type="text"id="id_name"name="id_name"/>如:设备编号，仪器名称，型号等</p>
					<p><input type="radio"checked="checked" name="choose" value="query">修改数据<input type="radio" name="choose" value="delete">申请报废<input type="radio" name="choose" value="repair">申请报修</p>
					<input type="submit" class="bnt1" name="sub" value="">&nbsp;&nbsp;&nbsp;
					<input type="reset" class="bnt2" name="rst" value="">
				</form>
			</div>
		</div>
	</div>
<?php include("conn.php");?>
<?php
	$act = !empty($_GET['act']) ? trim($_GET['act']) : '';
	if($act=='updata')
		{
		//$link = mysql_connect("localhost","root","");
		//@mysql_select_db("master",$link) or die("Couldn't select database");
		//mysql_query("set names 'utf8'");
		$s_id = $_POST['s_id'];
		if($_POST['choose'] == 'query')
		{
				$id_name = $_POST['id_name'];
				if($id_name !== "现状")
				{
					$res=mysql_query("SELECT ".$id_name." from shebei where 设备编号 = '".$s_id."'");
					if($res)
					{
						$res=mysql_fetch_row($res);
						echo "<div id='two_nav'>";
						echo "<form action='?act=change' method='post' enctype='multipart/form-data'>";
						echo "<input style='display:none' type='text' name='upd_id' value='".$s_id."'/>";
						echo "<input style='display:none' type='text' name='upd_name' value='".$id_name."'/>";
						echo "<label style='color:red'>设备编号：".$s_id." -> ".$id_name."：".$res[0]."</label><br/><br/>";
						echo "<label>修改的数据->".$id_name."：</label>";
						echo "<input type='text' name='upd_val' value='".$res[0]."'/>";
						echo "<input  class='bnt' type='submit' name='sub' value='修改'>";
						echo "</form></div>";
						echo "<script type='text/javascript'>var element=document.getElementById('one');
						var node=document.getElementById('two_nav');
						element.appendChild(node);</script>";
					}
					else
						echo "没有该设备编号的数据，或是没有该数据项，请检查您的输入是否有误！";
				}
				else{
					echo "仪器的状态是不允许直接修改的！";
				}
		}
		if($_POST['choose'] == 'delete'){
				$res=mysql_query("INSERT INTO repair VALUES ('".$this->session->userdata('user_name')."','".$s_id."','". date('y-m-d',time())."','1','','报废')
					");
				if($res)
					echo "<script>alert('申请报废成功！')</script>";
				else
					echo "<script>alert('无该条数据，操作失败！')</script>";
				
			}
		if($_POST['choose'] == 'repair'){
				$res=mysql_query("INSERT INTO repair VALUES ('".$this->session->userdata('user_name')."','".$s_id."','". date('y-m-d',time())."','1','','报修')
					");
				if($res)
					echo "<script>alert('申请报修成功！')</script>";
				else
					echo "<script>alert('无该条数据，操作失败！')</script>";
			}
			@mysql_close($link);
		
		}
		if($act=='change'){
						$upd_id=$_POST['upd_id'];
						$upd_name=$_POST['upd_name'];
						$upd_val=$_POST['upd_val'];
			$res=mysql_query("UPDATE shebei set ".$upd_name." =' ".$upd_val."' where 设备编号 = '".$upd_id."'");

			if($res)
				echo "<script>alert('修改成功~');</script>";
		@mysql_close($link);
		}
?>