
<?php include("conn.php");?>
<?php

	$file_name=$upload_data['file_name'];
	$file_path="uploads/".$file_name;
	$file_path_p="uploads/".$file_name;
	chmod($file_path_p,0777);
	//mkdir($file_path,0777);
	require_once 'reader.php';
    // ExcelFile($filename, $encoding);
    $data = new Spreadsheet_Excel_Reader();
    // Set output Encoding.
    $data->setOutputEncoding('utf-8');   
    $data->read($file_path);

   error_reporting(E_ALL ^ E_NOTICE);
	$ok = 0;
    for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) 
	{	
		//$i=2的原因是excel有表头不需要导入
    //以下代码是将excel表数据【3个字段】插入到mysql中，根据你的excel表字段的多少，改写以下代码吧！
    $sql = "INSERT INTO shebei VALUES('".$data->sheets[0]['cells'][$i][1]."','".$data->sheets[0]['cells'][$i][2]."','".$data->sheets[0]['cells'][$i][3]."','".$data->sheets[0]['cells'][$i][4]."','".$data->sheets[0]['cells'][$i][5]."','".$data->sheets[0]['cells'][$i][6]."','".$data->sheets[0]['cells'][$i][7]."','".$data->sheets[0]['cells'][$i][8]."','".$data->sheets[0]['cells'][$i][9]."','".$data->sheets[0]['cells'][$i][10]."','".$data->sheets[0]['cells'][$i][11]."','".$data->sheets[0]['cells'][$i][12]."','".$data->sheets[0]['cells'][$i][13]."','".$data->sheets[0]['cells'][$i][14]."','".$data->sheets[0]['cells'][$i][15]."','".$data->sheets[0]['cells'][$i][16]."','".$data->sheets[0]['cells'][$i][17]."','".$data->sheets[0]['cells'][$i][18]."','".$data->sheets[0]['cells'][$i][19]."','".$data->sheets[0]['cells'][$i][20]."','".$data->sheets[0]['cells'][$i][21]."','".$data->sheets[0]['cells'][$i][22]."','".$data->sheets[0]['cells'][$i][23]."','".$data->sheets[0]['cells'][$i][24]."','".$data->sheets[0]['cells'][$i][25]."','".$data->sheets[0]['cells'][$i][26]."','".$data->sheets[0]['cells'][$i][27]."','".$data->sheets[0]['cells'][$i][28]."','".$data->sheets[0]['cells'][$i][29]."','".$data->sheets[0]['cells'][$i][30]."','".$data->sheets[0]['cells'][$i][31]."','".$data->sheets[0]['cells'][$i][32]."','".$data->sheets[0]['cells'][$i][33]."','".$data->sheets[0]['cells'][$i][34]."','".$data->sheets[0]['cells'][$i][35]."','".$data->sheets[0]['cells'][$i][36]."','".$data->sheets[0]['cells'][$i][37]."','".$data->sheets[0]['cells'][$i][38]."','".$data->sheets[0]['cells'][$i][39]."','".$data->sheets[0]['cells'][$i][40]."','".$data->sheets[0]['cells'][$i][41]."','".$data->sheets[0]['cells'][$i][42]."','".$data->sheets[0]['cells'][$i][43]."','".$data->sheets[0]['cells'][$i][44]."','".$data->sheets[0]['cells'][$i][45]."','".$data->sheets[0]['cells'][$i][46]."','".$data->sheets[0]['cells'][$i][47]."','".$data->sheets[0]['cells'][$i][48]."','".$data->sheets[0]['cells'][$i][49]."','".$data->sheets[0]['cells'][$i][50]."','".$data->sheets[0]['cells'][$i][51]."','".$data->sheets[0]['cells'][$i][52]."','".$data->sheets[0]['cells'][$i][53]."','".$data->sheets[0]['cells'][$i][54]."','".$data->sheets[0]['cells'][$i][55]."','".$data->sheets[0]['cells'][$i][56]."','".$data->sheets[0]['cells'][$i][57]."','".$data->sheets[0]['cells'][$i][58]."','".$data->sheets[0]['cells'][$i][59]."','".$data->sheets[0]['cells'][$i][60]."','".$data->sheets[0]['cells'][$i][61]."','".$data->sheets[0]['cells'][$i][62]."','".$data->sheets[0]['cells'][$i][63]."','".$data->sheets[0]['cells'][$i][64]."','".$data->sheets[0]['cells'][$i][65]."','".$data->sheets[0]['cells'][$i][66]."','".$data->sheets[0]['cells'][$i][67]."','".$data->sheets[0]['cells'][$i][68]."','".$data->sheets[0]['cells'][$i][69]."','".$data->sheets[0]['cells'][$i][70]."','".$data->sheets[0]['cells'][$i][71]."','".$data->sheets[0]['cells'][$i][72]."','".$data->sheets[0]['cells'][$i][73]."','".$data->sheets[0]['cells'][$i][74]."','".$data->sheets[0]['cells'][$i][75]."','".$data->sheets[0]['cells'][$i][76]."','".$data->sheets[0]['cells'][$i][77]."','".$data->sheets[0]['cells'][$i][78]."','".$data->sheets[0]['cells'][$i][79]."','".$data->sheets[0]['cells'][$i][80]."','".$data->sheets[0]['cells'][$i][81]."','".$data->sheets[0]['cells'][$i][82]."','".$data->sheets[0]['cells'][$i][83]."','".$data->sheets[0]['cells'][$i][84]."','".$data->sheets[0]['cells'][$i][85]."','".$data->sheets[0]['cells'][$i][86]."','".$data->sheets[0]['cells'][$i][87]."','".$data->sheets[0]['cells'][$i][88]."','".$data->sheets[0]['cells'][$i][89]."','".$data->sheets[0]['cells'][$i][90]."','".$data->sheets[0]['cells'][$i][91]."','".$data->sheets[0]['cells'][$i][92]."','".$data->sheets[0]['cells'][$i][93]."','".$data->sheets[0]['cells'][$i][94]."','".$data->sheets[0]['cells'][$i][95]."','".$data->sheets[0]['cells'][$i][96]."','".$data->sheets[0]['cells'][$i][97]."','".$data->sheets[0]['cells'][$i][98]."','".$data->sheets[0]['cells'][$i][99]."','".$data->sheets[0]['cells'][$i][100]."','".$data->sheets[0]['cells'][$i][101]."','".$data->sheets[0]['cells'][$i][102]."','".$data->sheets[0]['cells'][$i][103]."','".$data->sheets[0]['cells'][$i][104]."','".$data->sheets[0]['cells'][$i][105]."','".$data->sheets[0]['cells'][$i][106]."','".$data->sheets[0]['cells'][$i][107]."','".$data->sheets[0]['cells'][$i][108]."','".$data->sheets[0]['cells'][$i][109]."','".$data->sheets[0]['cells'][$i][110]."','".$data->sheets[0]['cells'][$i][111]."')";
        $query=mysql_query($sql);
        $ok = '1';
	}
	if($ok == '1')
		echo "<script>alert('批量导入成功!');history.go(-1);</script>";
	@mysql_close($Connect);	
?>