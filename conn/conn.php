<?php 
$conn=mysql_connect("localhost","root","111") or die('����ʧ��:' . mysql_error());
mysql_select_db("db_vote",$conn) or die('���ݿ�ѡ��ʧ��:' . mysql_error());
mysql_query("set names gb2312");
?>