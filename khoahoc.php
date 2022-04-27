
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
	height:1500px;
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

	?>
 </div>
<div id="main">
   <div id="dd">
     <h2 id="h">Các khóa học</h2>
     <div class="listcategory">
    <div class="category notloaded with_children collapsed" data-categoryid="158" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black" >- Tân sinh viên năm 2021</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="18" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Công nghệ Cơ khí</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="19" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Công nghệ Điện</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="20" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Công nghệ Điện tử</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="21" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Công nghệ Động Lực</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="23" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Công nghệ Hóa học</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="24" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Công nghệ Nhiệt lạnh</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="1" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Công nghệ thông tin</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="15" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Kế toán - Kiểm toán</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="10" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Khoa học Cơ bản</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="26" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Kỹ thuật Xây dựng</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="17" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Luật</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="11" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Lý luận chính trị</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="25" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa May thời trang</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="12" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Ngoại ngữ</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="13" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Quản trị Kinh doanh</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="14" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Tài chính - Ngân hàng</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="16" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Khoa Thương mại du lịch</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="58" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Phân hiệu Quảng Ngãi</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="54" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Trung tâm Tư vấn và HTSV</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="27" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Viện CNSH&amp;TP</a></h3></div><div class="content"></div></div>
    <div class="category notloaded with_children collapsed" data-categoryid="28" data-depth="1" data-showcourses="15" data-type="0"><div class="info"><h3 class="categoryname"><a href="#" style="color: black">- Viện KHCN&amp;QLMT</a></h3></div><div class="content"></div></div>
    <nav aria-label="Trang" class="pagination pagination-centered justify-content-center">
        <ul class="mt-1 pagination ">
                <li class="page-item active">
                    <a href="#" class="page-link">
                        1
                            <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="page-item ">
                    <a href="#" class="page-link">
                        2
                    </a>
                </li>
                <li class="page-item">
                    <a href="https://lms.iuh.edu.vn/course/index.php?browse=categories&amp;perpage=22&amp;page=1" class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Tiếp theo</span>
                    </a>
                </li>
        </ul>
    </nav>  
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
