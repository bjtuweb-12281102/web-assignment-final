<?php 
session_start();
include("conn/conn.php");
if(isset($_SESSION['tb_user'])){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>yl'project</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style2 {font-size: 12px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-size: 12px;
}
a {
	font-size: 12px;
}
.STYLE8 {
	font-size: medium;
	font-family: "Times New Roman", Times, serif;
}
.STYLE9 {font-size: medium}
-->
</style>
</head>

<body background="images/m2.jpg" alt="" width="1043" height="460">
<p><I><B><font color="black" size="6" face="Times New Roman, Times, serif">Welcome to my personal homepage!</font></B></I>

<hr width="90%" color="blue">
<p class="STYLE8" align="right">
  <input type="button" name="button" id="button" value="�˳�" onClick="javascript:window.location.href='index.php';">
</p>
<table width="1043" border="0">
  <tr>
    <th width="380" scope="col"><span class="STYLE8">����������</span></th>
    <th width="653" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><center>
      <p>&nbsp;</p>
    </center></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><center>
    </center></td>
  </tr>
  <tr>
    <th scope="row"><span class="STYLE8">רҵ������������</span></th>
    <td><center>
    </center></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><center></center></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><center>
    </center></td>
  </tr>
  <tr>
    <th scope="row"><span class="STYLE9">ѧУ��������ͨ��ѧ</span></th>
    <td><center></center></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><center>
    </center></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><center>
    </center></td>
  </tr>
  <tr>
    <th height="403" scope="row"><p class="STYLE8">���䣺12281102@bjtu.edu.cn</p>
      <p class="STYLE8">&nbsp;</p>
      <p class="STYLE8">QQ��1378777216 </p>
      <p class="STYLE8">&nbsp;</p>
    <p class="STYLE8">���䣺19</p>
    <p class="STYLE8">&nbsp;</p>
    <p class="STYLE8">���ã�ɢ������������</p>
    <p class="STYLE8">&nbsp;</p>
    <p class="STYLE8">������ʨ����</p>
    <p class="STYLE8">&nbsp;</p>
    <p class="STYLE8">&nbsp;</p></th>
    <td><center>
    </center></td>
  </tr>
</table>
</body>







</html>
<?php }else{
	echo "<script>alert('������ȷ��¼��');window.location.href='index.php';</script>";
}?>