<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link href="images/icon.ico" type="image/x-icon" rel="shortcut icon" />
	<title>登陆页面</title>
</head>
<?php
	if($view == 'view')
	{
		$logo="images/logo.jpg";
		$b_bg="images/main_bg.png";
		$s_dl="images/dl.png";
		$s_cz="images/cz.png";
		$s_bg="images/button-nz.gif";
		$act="index.php/login/check";
	}
	if($view == 'check')
	{
		$logo="../../images/logo.jpg";
		$b_bg="../../images/main_bg.png";
		$s_dl="../../images/dl.png";
		$s_cz="../../images/cz.png";
		$s_bg="../../images/button-nz.gif";
		$act="check";
	}
?>
<style type="text/css">
	body{
		width:1083px;
		background-image: url(<?php echo $b_bg;?>);
		background-position:150px 160px;
		background-repeat: no-repeat;		
		font-size: 18px;
	}
	#login-f{
		position:absolute;
		top:240px;
		left:750px;
		width:600px;
	}
	input{
		background-image: url(<?php echo $i_bg;?>);
		width:130px;
		height:25px;
	}
	#logo{
		position:absolute;
		top:80px;
		left:150px;
	}
	.yzm{
		width:80px;
		height:25px;
		margin:-8px 10px;
	}
	.error{
		color:red;
	}
	.s_cz,.s_dl{
		cursor: pointer;
		width:84px;
		height:30px;
		border:0px;
		padding:0px;
	}
	.s_dl{
		background-image:  url(<?php echo $s_dl;?>);
	}
	.s_cz{
		background-image:  url(<?php echo $s_cz;?>);
	}
</style>
<body>
	<div id="logo">
		<img src="<?php echo $logo;?>"/>
	</div>
	<div id="login-f">
	<form action="<?php echo $act;?>" method="POST" name="login-form">
		<p><label>工&nbsp;&nbsp;&nbsp;号： </label><input type="text" name="user_id" placeholder="工号" value="<?php echo set_value('user_id')?>"/><?php echo form_error('user_id',"<span class='error'>","</span>"); ?></p>
		<p><label>密&nbsp;&nbsp;&nbsp;码： </label><input type="password" name="pw" value="<?php echo set_value('pw')?>"/><?php echo form_error('pw',"<span class='error'>","</span>"); ?></p>
		<p><label>验证 码： </label><input type="text" name="yzm" placeholder="验证码"/><img class="yzm" src="<?php echo site_url('code/verify_img')?>" onclick="this.src='<?php echo site_url('code/verify_img?no-cache=');?>/'+Math.random()" alt="验证码" value="<?php echo set_value('yzm')?>"/><?php echo form_error('yzm',"<span class='error'>","</span>"); ?></p>
		<p class="sub_p"><input class="s_dl" type="submit" name="sub" value="">&nbsp;&nbsp;<input class="s_cz" type="reset" name="reset" value=""></p>
	</form>
	</div>
</body>
</html>