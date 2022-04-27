<?php
include("class/cls.php");
$p=new tmdt();
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
	box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993);
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
	background-color:#06F;
	box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993);
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
	background-color:#06F;
	box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993);
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
	padding:15px;
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
</style>
</head>
<body> 
<div id="container">
 <div id="top">
 <div id="l"><h3 style="color:#CCC; margin-top:10px;">Trường Đại Học Công Nghiệp TP.Hồ Chí Minh</h3></div>
 <div id="r">
 <a href="index1.php"><input type="submit" id="nut" name="nut" value="Đăng nhập"></a>
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
  <h3 style="color:#FFF; ">Danh mục khóa học</h3>
  <h4><a href="#" style="color:#FFF; ">->Khoa Công Nghệ Thông Tin</a></h4>
  <h4 style="margin-top:10px;"><a href="#" style="color:#FFF; ">->Khoa Công Nghệ May</a></h4>
  <h4 style="margin-top:10px;"><a href="#" style="color:#FFF; ">->Khoa Điện Tử</a></h4>
  <h4 style="margin-top:10px;"><a href="#" style="color:#FFF;">->Khoa Cơ Khí</a></h4>
  <h4 style="margin-top:10px;"><a href="#" style="color:#FFF; ">->Khoa Kế Toán</a></h4>
  <h4 style="margin-top:10px;"><a href="#" style="color:#FFF;">->Khoa Công Nghệ Hóa Học</a></h4>
  </div>
  <div id="right">
   <h3 style="color:#FFF; ">Giới thiệu chung</h3>
   <p style="color:#FFF; ">Chào mừng các bạn đến với kênh học tập trực tuyến của Seven, hệ thống cung cấp cho sinh viên những khóa học trực tuyến song song với các lớp học trên lớp mà sinh viên đang học tại trường, trong thời gian tham gia khoa học, sinh viên vui lòng điểm danh và ghi nhận đầy đủ. Chúc các bạn có nhiều kiến thức trên kênh học trực tuyến này.</p>
  </div>
  <div id="main9">
  <h3>Tin tức chung</h3>
     <div id="tt1"><p>Hướng dẫn sử dụng app Moodle trên hệ thống học tập trực tuyến LMS
Bởi Mai Hoàng Thụy Khanh - Thursday, 26 August 2021, 6:31 PM
Trung tâm Quản trị Hệ thống - Trường Đại học Công nghiệp TP.HCM xin giới thiệu cách cài đặt và sử dụng app Moodle trên hệ thống học tập trực tuyến lms.iuh.edu.vn

Link chi tiết: https://csm.iuh.edu.vn/quy-dinh-huong-dan/huong-dan-su-dung-app-moodle-tren-nen-tang-mobile</p></div>
  <div id="tt1"><p>Hướng dẫn công cụ nén file pdf cực tốt
Bởi Admin Root - Wednesday, 9 June 2021, 8:53 AM
Các bạn sinh viên đang làm bài tập tiểu luận ?, file của bạn rất lớn > 10MB, làm cách nào để có thể nén được file pdf nhưng vẫn đảm bảo chất lượng file ?. Trung tâm Quản trị Hệ thống xin giới thiệu các bạn công cụ nén file hiệu quả sau, Link nén file online: https://tools.pdf24.org/vi/nen-pdf , ngoài ra nếu bạn muốn dùng offline vẫn có thể download phần mềm này vể để sử dụng được luôn nhé.</p></div>
  <div id="tt1"><p>Hướng dẫn tạo file với MS Lens và upload bài lên LMS
Bởi Admin Root - Wednesday, 9 June 2021, 8:47 AM
Bạn làm bài thi, bạn muốn chụp hình lại và xuất ra file pdf để nộp bài trên LMS? Trung tâm QTHT xin giới thiệu bạn công cụ MS Lens để giúp bạn thực hiện các vấn đề này. Link chi tiết: https://csm.iuh.edu.vn/quy-dinh-huong-dan/huong-dan-tao-file-pdf-voi-microsoft-lens-va-nop-bai-tap-len-lms/p></div>
<div id="tt1"><p>Hướng dẫn sử dụng app Moodle trên hệ thống học tập trực tuyến LMS
Bởi Mai Hoàng Thụy Khanh - Thursday, 26 August 2021, 6:31 PM
Trung tâm Quản trị Hệ thống - Trường Đại học Công nghiệp TP.HCM xin giới thiệu cách cài đặt và sử dụng app Moodle trên hệ thống học tập trực tuyến lms.iuh.edu.vn

Link chi tiết: https://csm.iuh.edu.vn/quy-dinh-huong-dan/huong-dan-su-dung-app-moodle-tren-nen-tang-mobile</p></div>
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