<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��¼</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-size: 12px;
}
.STYLE1 {font-size: large}
.STYLE2 {font-size: larger}
-->
</style></head>

<body background="images/p5.gif"alt="" width="1024" height="800">
<p>
  <script language="JavaScript" type="text/javascript">
function check_user(form){
	if(form.tb_user.value==""){
    	alert("�������Ա��");
		form.tb_user.select();
		return(false);
	}
	if(form.tb_pass.value==""){
    	alert("�������¼���룡");
		form.tb_pass.select();
		return(false);
    }
   	return(true);	 
 }
</script>
<center><B><font color="black" size="6" face="Times New Roman, Times, serif">�û���¼</font></B></center> </p>
<p>&nbsp;</p>
<p><center>
   <span class="STYLE2">�������û�����</span>
  <input type="password" name="tb_pass" size="18" /></center>
</p>
<p><center>
    <span class="STYLE2">����������</span>��
    <input type="text" name="tb_user" size="18"  />
</center>
</p>
<p><center>
   <input type="submit" name="submit" id="submit" value="��¼" >
   <input type="button" name="button" id="button" value="ע��" onClick="javascript:window.location.href='register.php';"></center>
</p>
</body>
</html>
