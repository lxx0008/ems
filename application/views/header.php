<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>仪器设备管理系统</title>
		<link rel="stylesheet" type="text/css" href="../css/avril.css">
		<link href="../images/icon.ico" type="image/x-icon" rel="shortcut icon" />
		<script src="../jquery/jquery-1.7.2.min.js"></script>
		<script src="../jquery/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="../jquery/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
		<script type="text/javascript" src="../jquery/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<link rel="stylesheet" type="text/css" href="../jquery/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	</head>
	<body>
		<div id="top">
			<div id="top-nav">
				<ul>
					<li><a id="user_iframe" href="user_manage"><?php echo $this->session->userdata('user_name');?></a></li>
					<li  class="li1">|</li>
					<li><a id="new_info" href="new_info/view">资料上报</a></li>
					<li  class="li1">|</li>
					<li><a id="updata" href="#">申请报修报废</a>
						<div id="up_li">
							<ul>
							<li><a id="up_li_1" href="s_updata/index/1">申请报修报废</a></li>
							<li><a id="up_li_2" href="s_updata/index/2">申请报废仪器</a></li>
							<li><a id="up_li_3" href="s_updata/index/3">申请报修仪器</a></li>
							<li><a id="up_li_4" href="s_updata/index/4">正在维修仪器</a></li>
							</ul>
						</div>
					</li>
					<li  class="li1">|</li>
					<li id="excel"><a  href="#" name="all" >报表下载</a>
						<div id="excel_li">
							<ul>
							<li><a href="#" name="block">空白表格下载</a></li>
							<li><a href="#">查询数据下载</a></li>
							</ul>
						</div>
					</li>
					<li  class="li1">|</li>
					<li><a id="xszy" href="/sbglxt/guide/guide.html">新手指引</a></li>
				</ul>
			</div>
			<div id="exit">
				<a href="login/login_out"><img src="../images/exit.png"/>退出登录</a>
			</div>
			<div id="power" style="display:none"><?php echo $this->session->userdata('user_power')?></div>
		</div>
		