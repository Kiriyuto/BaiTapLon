<?php
session_start();
if(isset($_SESSION['masv']) && isset($_SESSION['user'])&& isset($_SESSION['pass']))
{
	include("class/clslogincsdl.php");
	$q=new login();
	$q->confirmlogin($_SESSION['masv'],$_SESSION['user'],$_SESSION['pass']);
}
else
{
	header('location:login.php');
}
include("class/cls.php");
$p=new tmdt();
$layid=$_SESSION['masv'];
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trang Chủ</title> 
	<link href="css/css.css" rel="stylesheet" />
     <style>
a
{
	text-decoration:none;
}
#container
{
	background-color:#CCC;
}
#main
{
	width:95%;
	height:1500px;
	margin: 0 auto;
	background:#FFF;
	margin-top: 20px;
	margin-bottom:20px;
	border-radius:6px;
	padding:30px;
}
#left
{
	border-radius:6px;
	margin-left:30px;
	margin-bottom:30px;
	margin-top:30px;
	width:45%; 
	float:left;
	height:400px;
	padding:20px;
	background-color:#0FC;
}
#right
{
	border-radius:6px;
	margin-right:30px;
	margin-bottom:30px;
	margin-top:30px;
	width:45%;
	float:right;
	height:400px;
	padding:20px;
	background-color:#0FC;
}
#main9
{
	margin-left:50px;
	float:left;
	width:95%;
	height:auto;
}
#tt1
{
	border:1px solid #00F;
	width:95%;
	height:200px;
	padding:20px;
	margin-top:20px;
}
#top
{
	width:100%;
	height:70px;
	background:#00F;
	padding:10px;
	box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993);
}
#footer
{
	margin:0 auto;
	width:100%;
	height:200px;
	text-align:center;
	background-color:#00F;
	padding:20px;
}
#ft1
{
	margin-left:70px;
	margin-top:30px;
	float:left;
	width:30%;
	height:100%;
}
#ft2
{
	float:left;
	width:30%;
	height:100%;
}
#ft3
{
	float:left;
	width:30%;
	height:100%;
}
a
{
	color:#000;
}
#l
{
	width:40%;
	float:left;
}
#r
{
	width:20%;
	float:right;
}
#lophp
{
	margin-top:20px;
	width:300px;
	height:200px;
	border-radius:10px;
	background-image:url(img/lophp1.jpg);
	padding:20px;
	border:3px solid #000;
	float:left;
	margin-left:20px;
}
#lophp:hover
{
	border:5px solid #999;
}
#nut
{
	height:40px;
	float:right;
	width:150px;
	border-radius:10px;
	background:#03F;
	color:#CCC;
	font-size:15px;
}
#nut:hover
{
	background:#69F;
	color:#000;
}
</style>
</head>
<body> 
<div id="container">
 <div id="top">
 <div id="l"><h3 style="color:#CCC; margin-top:10px;">Trường Đại Học Công Nghiệp TP.Hồ Chí Minh</h3></div>
 <div id="r">
 <form action="" method="POST">
 <input type="submit" id="nut" name="nut" value="Đăng xuất">
 <?php
     switch($_POST['nut'])
  {
	  case 'Đăng xuất':
	  {
		 session_destroy();
		 header("location:index.php");
	  }
  }
 ?>
  </form>
  <i class="fa-solid fa-circle-user"></i>
 </div>
 </div>
 <div id="menu">
			<?php
	include("menu.php");
	include("header1.php");
	?>
 </div>
 <div id="main">
 <h1>Khóa học của tôi</h1>
 <hr></hr>
 <?php
 $mon=$p->loadlhp("select * from lophp l join lophp_sv ls on l.malop=ls.malop where masv='$layid'");
 echo "$mon";
 ?>
 </div>        
 <div id="footer">
  <div id="ft1"><p style="color:#CCC">Chào mừng các bạn đến với Hệ thống học tập trực tuyến của Seven, kênh thông tin cung cấp các khóa học trực tuyến của nhà trường cho các bạn sinh viên.</p></div>
  <div id="ft2">
   <h3 style="color:#CCC">Liên kết</h3>
  <p><a href="#" style="color:#CCC">Website Nhà Trường</a></p>
  <p><a href="#" style="color:#CCC">Website Trung Tâm QTHT</a></p>
  <p><a href="#" style="color:#CCC">Cổng thông tin sinh viên</a></p>
  <p><a href="#" style="color:#CCC">Các khóa học</a></p>
  </div>
  <div id="ft3">
  <h3 style="color:#CCC">Liên hệ</h3>
  <p style="color:#CCC">Trung tâm Quản trị Hệ thống</p>
  <p style="color:#CCC">Phone:0395887319</p>
  <p style="color:#CCC">Email:thinhzed209@gmail.com</p>
  </div>
 </div>    
</div>
</body>
</html>