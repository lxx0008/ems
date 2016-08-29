<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>detail</title>
</head>
<body>
	<?php foreach($news as $key => $value):{?>
	<?php
		echo "<p>";
		echo $key.":".$value;
		echo  "</p>";
	?>
	<?php }endforeach;?>
</body>
</html>