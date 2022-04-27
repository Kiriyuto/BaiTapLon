
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trang Chủ</title> 
       <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	border-radius:10px;
	width:95%;
	height:500px;
	margin: 0 auto;
	background:#FFF;
	margin-top: 20px;
	margin-bottom:20px;
	box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993);
}
#left
{
	margin-left:30px;
	width:45%;
	border-right:1px solid #000; 
	float:left;
	height:100%;
}
#right
{
	width:45%;
	float:right;
	height:100%;
}
#top
{
	width:100%;
	height:50px;
	background:#00F;
	padding:15px;
	box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993);
}
#sanpham
{
	width:100%;
	height: 2000px;
	margin: auto;
}
#sp:hover
{
	border:3px solid #009;
}
#sp
{
	border-radius:10px;
	float:left;
	height:400px;
	width:300px;
	border:1px solid #000;
	margin-top: 20px;
	margin-left: 20px;
	margin-right: 20px;
	background:#FFF;
}
#tensp
{
	float:left;
	height:50px;
	width:300px;
	font-weight:bolder;
	color:#00F;
	text-align:center;
	padding-top:5px;
	margin-top:10px;
}
#giasp
{
	float:left;
	height:30px;
	width:300px;
	font-weight:bolder;
	color:#0C0;
	text-align:center;
	padding-top:5px;
}
#hinh
{
	padding:5px;
	float:left;
	height:300px;
	width:300px;
}
#danhmucmain
{
	height:100px;
	width:1000px;
	margin:0 auto;
}
#danhmuc
{

	text-align:center;
	margin:0 auto;
	border-radius:5px;
	border:1px solid #000;
	width:200px;
	margin-bottom:5px;
	background:#FFF;
	display:inline;
}
#footer
{
	margin:0 auto;
	width:100%;
	height:200px;
	text-align:center;
	background-color:#00F;
	padding:20px;
	box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993);
}
#ft1
{
	margin-left:30px;
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
#ft
{
	color:#FFF;
	margin-top:10px;
}
h2
{
	margin-top:10px;
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
</style>
</head>

<body> 
<div id="container">
 <div id="top">
 <div id="l"><h4 style="color:#CCC">Trường Đại Học Công Nghiệp TP.Hồ Chí Minh</h4></div>
 <div id="r"><a href="#" style="color:#CCC"><h4>Đăng nhập</h4></a>
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
  <div id="left">
      <h3>Thông tin cá nhân</h3>
    <div class="form-group">
        <label for="email"><b>Họ và tên: </b> </label>
        <span class="bold">Cù Minh Quân</span>
    </div>
    <div class="form-group">
        <label for="email"><b>Email Address:</b> </label>
        <span class="bold">quanlon69@gmail.com</span>
    </div>
    <div class="form-group">
        <label for="email"><b>Số điện thoại: </b> </label>
        <span class="bold">0399257452</span>
    </div>
    <div class="form-group">
        <label for="email"><b>Địa chỉ: </b> </label>
       <span class="bold">168/38C Nguyễn Gia Trí, P.25, Q.Bình Thạnh, TP.Hồ Chí Minh</span>
    </div>
  </div>
  <div id="right">
    </br>
    </br>
    <div class="form-group"><b>Mã số: </b> </label>
        <span class="bold">19471971</span>
    </div>
    <div class="form-group">
        <label for="email"><b>Chuyên ngành: </b> </label>
       <span class="bold">Hệ Thống Thông Tin</span>
    </div>
    <div class="form-group">
        <label for="email"><b>Lớp: </b> </label>
        <span class="bold">DHHTTT15B</span>
    </div>
    </div>
   </div>
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