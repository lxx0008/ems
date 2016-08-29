<?php include("conn.php");?>
<?php 


$savename = date("YmjHis"); //导出excel文件名
$file_type = "vnd.ms-excel"; 
 $file_ending = "xls"; 
 header("Content-Type: application/$file_type;charset=utf-8"); 
 header("Content-Disposition: attachment; filename=".$savename.".$file_ending"); 
header("Pragma: no-cache"); 

 /*查询数据库*/

if($s_1=="all" ||$s_1 == "block")
	$sql="Select * from shebei";
else if($s_2==" ")
 	$sql = "Select * from shebei where ".$s_1."='".$s_1_t."'"; 
else 
 	$sql = "Select *from shebei where ".$s_1."='".$s_1_t."'and ".$s_2."='".$s_2_t."'";


// $ALT_Db = @mysql_select_db($DB_DBName, $Connect) or die("Couldn't select database");

 $result = @mysql_query($sql,$conn) or die(mysql_error()); 
if($s_1 =="block")
{
/*写入表字段名*/
for ($i = 0; $i < mysql_num_fields($result); $i++) { 
 echo mysql_field_name($result,$i) . "\t"; 
 } 
 echo "\n";
}
else{
/*写入表字段名*/
for ($i = 0; $i < mysql_num_fields($result); $i++) { 
 echo mysql_field_name($result,$i) . "\t"; 
 } 
 echo "\n";

/*写入表数据*/
 $sep = "\t"; 
 while($row = mysql_fetch_row($result)) { 
 $data = ""; 
 for($i=0; $i<mysql_num_fields($result);$i++) { 
 if(!isset($row[$i])) 
 $data .= "NULL".$sep; //处理NULL字段
elseif ($row[$i] != "") 
 $data .= "$row[$i]".$sep; 
 else 
 $data .= "".$sep; //处理空字段
} 
echo $data."\n"; 
 }}
 ?>