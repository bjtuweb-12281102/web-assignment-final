<?php 
session_start();  
include("conn/conn.php");		//�������ݿ�
$tb_user=$_POST['tb_user'];		//��ȡ�ύ�û���
$tb_pass=md5($_POST['tb_pass']);	//��ȡ�ύ����
if(isset($_POST['tb_user']) && isset($_POST['tb_pass'])){
	$query=mysql_query("select * from tb_user where tb_user_name='$tb_user' and tb_user_pass='$tb_pass'");
	if($query){
		$_SESSION["tb_user"]=$tb_user;
		echo "<script>alert('��¼�ɹ���');window.location.href='main.php';</script>";
	}else{
		echo "<script>alert('��������û��������벻��ȷ��');window.location.href='index.php';</script>";
	}
}else{
	echo "<script>alert('������ȷ��¼��лл��');window.location.href='index.php';</script>";
}
?>