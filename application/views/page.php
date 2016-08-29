<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>content</title>
	<?php 
		if($differ==1)
		{
			$href="../../../../../css/avril.css";
			$js_min="../../../../../jquery/jquery-1.7.2.min.js";
			$js="../../../../../jquery/jquery-1.7.2.js";
		}
		else 
		{
			$href="../../../../../../../css/avril.css";
			$js_min="../../../../../../../jquery/jquery-1.7.2.min.js";
			$js="../../../../../../../jquery/jquery-1.7.2.js";
		}
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo $href;?>>
	<script src=<?php echo $js_min;?>></script>
		<script src=<?php echo $js;?>></script>
	<style type="text/css">
	body
	{
		margin:0px;
		background-color: white;
	}
	</style>
</head>
<body>
	<div class="fy"><label>当前页码为第<span><?php echo $cur_page;?></span>页</label><label><span>|</span></label><?php echo $this->pagination->create_links();?></div>
	<div id="f_res" name=<?php echo $differ;?>><?php   echo $this->table->generate($news);?>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$a=$("div#f_res tbody tr");
		$f_res_name=$("div#f_res").attr("name");
		for($i=0;$i<$a.length;$i++)
		{
		$b=$a.eq($i).children().first().text();
		if($f_res_name==1)
			$b=$a.eq($i).children().first().html("<a style='font-weight:bold;' href='../../../view/"+$b+"'>"+$b+"</a>");
		if($f_res_name==2)
			$b=$a.eq($i).children().first().html("<a style='font-weight:bold;' href='../../../../../view/"+$b+"'>"+$b+"</a>");
		}
	})
	</script>
</body>
</html>
