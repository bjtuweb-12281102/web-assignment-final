<?php 
session_start();	
include_once("conn/conn.php");
if (isset($_POST['submit'])){					//����ע���û��ύ������
	$tb_user_name=trim($_POST['tb_user_name']);
	$tb_user_pass=md5($_POST['tb_user_pass']);
	$tb_user_mail=trim($_POST['tb_user_mail']);
	$tb_user_tel=trim($_POST['tb_user_tel']);
	$tb_user_address=trim($_POST['tb_user_address']);
	$tb_user_ip=getenv("REMOTE_ADDR");		//��ȡ�û���ip
	$query=mysql_query("insert into tb_user(tb_user_name,tb_user_pass,tb_user_mail,tb_user_tel,tb_user_address,tb_user_ip) values('$tb_user_name','$tb_user_pass','$tb_user_mail','$tb_user_tel','$tb_user_address','$tb_user_ip')",$conn);
	if($query){ 
		$_SESSION['tb_user_name']=$tb_user_name;  //ͨ��seesion�����洢�û�������
		$_SESSION['tb_user_mail']=$tb_user_mail; 	//ͨ��seesion�����洢�û�������
  		echo "<script>alert('ע��ɹ�!');window.location.href='main.php';</script>"; 		
	}else{
  		echo "<script language='javascript'>alert('�Բ���,ע��ʧ��!');history.back();</script>"; 
	}
}
?>