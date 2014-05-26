<?php 
session_start();  
include("conn/conn.php");		//连接数据库
$tb_user=$_POST['tb_user'];		//获取提交用户名
$tb_pass=md5($_POST['tb_pass']);	//获取提交密码
if(isset($_POST['tb_user']) && isset($_POST['tb_pass'])){
	$query=mysql_query("select * from tb_user where tb_user_name='$tb_user' and tb_user_pass='$tb_pass'");
	if($query){
		$_SESSION["tb_user"]=$tb_user;
		echo "<script>alert('登录成功！');window.location.href='main.php';</script>";
	}else{
		echo "<script>alert('您输入的用户名或密码不正确！');window.location.href='index.php';</script>";
	}
}else{
	echo "<script>alert('请您正确登录，谢谢！');window.location.href='index.php';</script>";
}
?>