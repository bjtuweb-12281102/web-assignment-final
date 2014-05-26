<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>登录</title>
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
    	alert("请输入会员名");
		form.tb_user.select();
		return(false);
	}
	if(form.tb_pass.value==""){
    	alert("请输入登录密码！");
		form.tb_pass.select();
		return(false);
    }
   	return(true);	 
 }
</script>
<center><B><font color="black" size="6" face="Times New Roman, Times, serif">用户登录</font></B></center> </p>
<p>&nbsp;</p>
<p><center>
   <span class="STYLE2">请输入用户名：</span>
  <input type="password" name="tb_pass" size="18" /></center>
</p>
<p><center>
    <span class="STYLE2">请输入密码</span>：
    <input type="text" name="tb_user" size="18"  />
</center>
</p>
<p><center>
   <input type="submit" name="submit" id="submit" value="登录" >
   <input type="button" name="button" id="button" value="注册" onClick="javascript:window.location.href='register.php';"></center>
</p>
</body>
</html>
