<?php
  // error_reporting(0);
  //$conn=mysql_connect("localhost", "stuzone_admin", "1d4;do9a0~f");
  $conn=mysql_connect("localhost", "root", "");
  if(!$conn) 
	{
		echo "Failed"; //连接失败，显示Connect Failed!
	}
   mysql_query("set names utf8"); //解决中文乱码问题
   mysql_select_db("master");
   ?>