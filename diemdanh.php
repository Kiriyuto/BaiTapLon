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
$laymon=0;
if(isset($_REQUEST['mon']))
{
	$laymon=$_REQUEST['mon'];
}
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
	width:95%;
	height:auto;
	margin: 0 auto;
	background:#FFF;
	margin-top: 20px;
	margin-bottom:20px;
	 box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993);
	 border-radius:10px;
}
#left
{
	border:3px solid #000; 
	margin-left:30px;
	margin-bottom:30px;
	margin-top:30px;
	width:45%; 
	float:left;
	height:90%;
	padding:20px;
}
#right
{
	border:3px solid #000; 
	margin-right:30px;
	margin-bottom:30px;
	margin-top:30px;
	width:45%;
	float:right;
	height:90%;
	padding:20px;
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
#dd
{
	margin-top:20px;
	margin-left:20px;
	padding:30px;
}
</style>
</head>

<body> 
<div id="container">
 <div id="top">
 <div id="l"><h4 style="color:#CCC">Trường Đại Học Công Nghiệp TP.Hồ Chí Minh</h4></div>
 <div id="r"><a href="login.php" style="color:#CCC"><h4>Đăng nhập</h4></a>
  <i class="fa-solid fa-circle-user"></i>
 </div>
 </div>
 <div id="menu">
			<?php
	include("menu.php");

	?>
 </div>
<div id="main">
   <div id="dd">
     <h2 id="h">Điểm danh</h2>
     <form action="" method="POST" class="form" id="form-1">
     <div class="form-group">  
     <label for="pass" class="form-label">Môn học</label>
					  <input  class="form-control" type="text" id="txtmon" name="txtmon" value="<?php echo"$laymon" ?>" > 
                      <label for="pass" class="form-label">Tên sinh viên</label>
					  <input  class="form-control" type="text" id="txtten" name="txtten" value="<?php $p->loadtendd("select tensv from sinhvien where masv='$layid'")?>"> 
                       <label for="pass" class="form-label">Ngày điểm danh</label>
					  <input  class="form-control" type="date" id="txttg" name="txttg" value="<?php echo date('Y-m-d'); ?>">      
					<label for="pass" class="form-label">Password</label>
					  <input  class="form-control" type="text" id="txttdn" name="txttdn" placeholder="Nhập password">
					  <span class="form-mesage"></span>
					<span class="color" data-toggle="tooltip" title="Not In store">
                 <label for="pass" class="form-label">Trạng thái:</label>
					<input id="tt" name="tt" type="radio" value="Có mặt" />Có mặt
					<input id="tt" name="tt" type="radio" value="Vắng mặt" />Vắng mặt
                    <input id="tt" name="tt" type="radio" value="Đi trễ" />Đi trễ
                     <input class="form-submit" type="submit" id="nut" name="nut" value="Xác nhận">
                     </span>
					</div>
                    <?php
                    switch($_POST['nut'])
  {
	  case 'Xác nhận':
	  {
		  $ten=$_REQUEST['txtten'];
		  $tt=$_POST['tt'];
		  $mon=$_REQUEST['txtmon'];
		   $tg=$_REQUEST['txttg'];
				if($p->themxoasua("INSERT INTO  hiendien(tensv,trangthai,thoigian,mon)VALUES ('$ten','$tt','$tg','$mon')")==1)
				{
					echo "Thêm thành công";
				}
				else
				{
					echo "Thêm không thành công";
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