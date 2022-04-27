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
	height: auto;
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
	height:70px;
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
#edit
{
	margin-left:30px;
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
 </div>
 </div>
 <div id="menu">
			<?php
	include("menu.php");
	?>
 </div>
 <div id="main">
      <h3>Chỉnh sửa thông tin cá nhân</h3>
      <div id="edit">
       <form action="" method="POST" class="form" id="form-1">
    <div class="form-group">
        <label for="email"><b>Họ và tên: </b> </label>
        <input type="text" name="txtname" id="txtname" class="form-control" value="<?php $p->loadtendd("select tensv from sinhvien where masv='$layid' limit 1")?>">
        <span class="text-danger" id="">*</span>
    </div>
    <div class="form-group">
        <label for="email"><b>Ngày sinh:</b> </label>
        <input type="text" name="ns" id="ns"class="form-control"value="<?php $p->loadnsedit("select ngaysinh from sinhvien where masv='$layid' limit 1")?>" >
        <span class="text-danger" id="tbemail">*</span>
    </div>
    <div class="form-group">
        <label for="email"><b>Số điện thoại: </b> </label>
        <input type="text" name="" id="txtPhone" required placeholder="Nhập số điện thoại" class="form-control" >
        <span class="text-danger" id="txtPhone">*</span>
    </div>
    <div class="form-group">
        <label for="email"><b>Địa chỉ: </b> </label>
        <input type="text" name="dc" id="dc" class="form-control" value="<?php $p->loaddcedit("select diachi from sinhvien where masv='$layid' limit 1")?>" >
        <span class="text-danger" id="tbemail">*</span>
    </div>
    <div class="form-group">
    <div class="form-group"><b>Mã số: </b> </label>
        <input type="text" name="" id="" required placeholder="Nhập mã số" class="form-control" >
        <span class="text-danger" id="tbemail">*</span>
    </div>
    <div class="form-group">
        <label for="email"><b>Chuyên ngành: </b> </label>
        <input type="text" name="cn" id="cn" class="form-control" value="<?php $p->loadcnedit("select chuyennganh from sinhvien where masv='$layid' limit 1")?>" >
        <span class="text-danger" id="tbemail">*</span>
    </div>
    <div class="form-group">
        <label for="email"><b>Lớp: </b> </label>
        <input type="text" name="lop" id="lop" class="form-control" value="<?php $p->loadlopedit("select lop from sinhvien where masv='$layid' limit 1")?>">
        <span class="text-danger" id="tbemail">*</span>
    </div>
    <div id="right">
        <input type="submit" class="btn" name="nut" id="nut" value="Sửa" style="font-family: cursive;"/>
      <a href="editsv.php"><input type="button" class="btn" value="Reset" style="font-family: cursive; margin-top:30px;"/></a>
    </div>
   </div>
   <?php
  switch($_POST['nut'])
  {
	  case 'Sửa':
  {
		  $ten=$_REQUEST['txtname'];
		  $ns=$_REQUEST['txtns'];
		  $dc=$_REQUEST['dc'];
		  $cn=$_REQUEST['cn'];
		  $lop=$_REQUEST['lop'];
			 if($p->themxoasua("UPDATE sinhvien SET tensv='$ten',ngaysinh='$ns',diachi='$dc',chuyennganh='$cn',lop='$lop' WHERE masv='$layid' LIMIT 1")==1)
			 {
				 echo 'Sửa thành công'; 
			 }
			 else
			 {
				 echo 'Sửa k thành công';
			 }
		  break;
	  }
  }
  ?>
   </form>
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