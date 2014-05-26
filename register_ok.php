<?php 
session_start();	
include_once("conn/conn.php");
if (isset($_POST['submit'])){					//处理注册用户提交的数据
	$tb_user_name=trim($_POST['tb_user_name']);
	$tb_user_pass=md5($_POST['tb_user_pass']);
	$tb_user_mail=trim($_POST['tb_user_mail']);
	$tb_user_tel=trim($_POST['tb_user_tel']);
	$tb_user_address=trim($_POST['tb_user_address']);
	$tb_user_ip=getenv("REMOTE_ADDR");		//获取用户的ip
	$query=mysql_query("insert into tb_user(tb_user_name,tb_user_pass,tb_user_mail,tb_user_tel,tb_user_address,tb_user_ip) values('$tb_user_name','$tb_user_pass','$tb_user_mail','$tb_user_tel','$tb_user_address','$tb_user_ip')",$conn);
	if($query){ 
		$_SESSION['tb_user_name']=$tb_user_name;  //通过seesion变量存储用户的姓名
		$_SESSION['tb_user_mail']=$tb_user_mail; 	//通过seesion变量存储用户的邮箱
  		echo "<script>alert('注册成功!');window.location.href='main.php';</script>"; 		
	}else{
  		echo "<script language='javascript'>alert('对不起,注册失败!');history.back();</script>"; 
	}
}
?>