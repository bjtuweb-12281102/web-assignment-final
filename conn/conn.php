<?php 
$conn=mysql_connect("localhost","root","111") or die('连接失败:' . mysql_error());
mysql_select_db("db_vote",$conn) or die('数据库选择失败:' . mysql_error());
mysql_query("set names gb2312");
?>