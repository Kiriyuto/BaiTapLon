
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trang Chủ</title> 
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://vanphuc.sis.edu.vn/wp-content/themes/jazzmaster/assets/css/style.css.php?ver=20131110" type="text/css" media="screen" />
	<link rel="stylesheet" href="https://vanphuc.sis.edu.vn/wp-content/themes/jazzmaster/assets/css/print.css?ver=20131110" type="text/css" media="print" />
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
	height:1350px;
	margin: 0 auto;
	background:#FFF;
	margin-top: 20px;
	margin-bottom:20px;
	box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993);
}
#left
{
	padding:30px 0px 30px 30px;
	width:40%;
	float:left;
	height:300px;
	border-right: 1px solid #CCCCCC ;
	border-right: 1px solid #CCCCCC ;
	padding-right: 50px;
}
#right
{
	padding:30px 30px 30px 0px;
	width:55%;
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
#footer
{
	margin:0 auto;
	width:100%;
	height:300px;
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
  <div id="l"><h5 style="color:#CCC">Trường Đại Học Công Nghiệp TP.Hồ Chí Minh</h4></div>
 <div id="r"><a href="index1.php" style="color:#CCC"><h4 style="color:#CCC">Đăng nhập</h4></a>
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
		<h2  style="text-align: center; padding-top: 20px; ">Hoạt động ngoại khóa</h2>
		<hr><hr>
	
		<div id="left">
				<p><span class="dropcap square">T</span></p>
				<p style="text-align: justify; ">rường Đại học Công Nghiệp TP.HCM cung cấp rất nhiều các hoạt động ngoại khóa sau giờ học; được tổ chức theo nguyện vọng và khả năng của học sinh.</p>
				<p style="text-align: justify; margin-top: 20px">Các hoạt động ngoại khóa diễn ra từ  đến  sau giờ học của các ngày trong tuần. Các hoạt động được tổ chức vô cùng phong phú theo từng học phần. Khi tham gia học sinh sẽ đóng một khoản phí nhất định để đảm bảo duy trì hoạt động của các chương trình này.</p>
		</div>
		

		<div id="right">
				<div class="w3-bar w3-black">
    			<button class="w3-bar-item w3-button tablink w3-red" onclick="openHoatDong(event,'Chương trình Câu lạc bộ sau giờ học')">Chương trình Câu lạc bộ sau giờ học</button>
    			<button class="w3-bar-item w3-button tablink" onclick="openHoatDong(event,'Các câu lạc bộ thể thao')">Các câu lạc bộ thể thao</button>
    			<button class="w3-bar-item w3-button tablink" onclick="openHoatDong(event,'Nghệ thuật')">Nghệ thuật</button>
  				</div>
  
  			<div id="Chương trình Câu lạc bộ sau giờ học" class="w3-container w3-border HoatDong">
<p style="padding-top: 20px;">Bên cạnh việc khuyến khích các em nỗ lực trong học tập, Nhà trường chú trọng xây dựng các hoạt động ngoại khóa giúp cho các em có cơ hội để phát triển các kỹ năng và năng khiếu trong các lĩnh vực thể thao, nghệ thuật và văn hóa. Đây là một trong số những hoạt động góp phần tạo nên hệ thống giáo dục toàn diện hướng tới hình thành hình mẫu công dân toàn cầu.</p>
<p style="padding-top: 20px;">Danh sách các CLB có thể thay đổi theo từng học phần</p>
		
				<div class="toggle-wrapper">
				<h3 class="toggle-heading">Câu lạc bộ Cờ Việt</h3>
				<p><strong>Câu lạc bộ Cờ Việt</strong></p>
<p style="text-align: justify;">Khi tham gia câu lạc bộ cờ, các em học sinh sẽ được học về các quy tắc chơi cơ bản; nước đi của các quân cờ và một số chiến thuật tấn công và phòng thủ. Khi đã làm quen và thành thạo hơn, các em sẽ có cơ hội tham gia các giải đấu cấp trường và liên trường.</p>
				</div>
					
				<div class="toggle-wrapper">	
				<h3 class="toggle-heading">
				<strong>Lớp học Nấu ăn (Đầu bếp nhí)</strong>
				</h3><p><strong>Lớp học Nấu ăn (Đầu bếp nhí)</strong></p>
<p style="text-align: justify;">Nấu ăn là một trong những phương pháp tốt nhất để phát triển nhận thức, ngôn ngữ và các kỹ năng vận động khéo léo của trẻ. Chương trình này được thiết kế để giúp cho các đầu bếp nhí có cơ hội học cách kết hợp các nguyên liệu chế biến các món ăn. Những trải nghiệm thực tế này giúp học sinh học cách đong đếm, pha trộn, kết hợp và tự làm hoặc cùng các bạn trong nhóm làm ra các món ăn đơn giản hấp dẫn. Chi tiết về khóa học: 1. Bánh nhân thịt xay  2. Cá viên và khoai tây 3. Salad gà nui 4. Hoa quả xay 5. Bánh khoai tây mặt cười 6. Gà nướng sả 7. Gà nhồi và khoai tây chiên 8. Bánh pancake và hoa quả xiên 9. Củ cái trẳng cuộn thịt hấp 10. Anmitsu – Hoa quả trộn kiểu Nhật 11. Bánh sắn chiên mặn.</p>
				</div>
				
				<div class="toggle-wrapper">
				<h3 class="toggle-heading">Câu lạc bộ tiếng Trung</h3>
				<p><strong>Câu lạc bộ tiếng Trung</strong></p>
<p style="text-align: justify;">Tham gia câu lạc bộ tiếng Trung, học sinh sẽ có cơ hội học được những kiến thức cơ bản về một trong những ngôn ngữ được sử dụng nhiều nhất trên thế giới. Câu lạc bộ có những hoạt động và trò chơi vui vẻ hấp dẫn với những giáo viên Trung Quốc giàu kinh nghiệm của trường.</p>
				</div>
  			</div>

  			<div id="Các câu lạc bộ thể thao" class="w3-container w3-border HoatDong" style="display:none">
				<div class="toggle-wrapper">
				<h3 class="toggle-heading">Câu lạc bộ Cầu lông</h3>
				<p><strong>Câu lạc bộ Cầu lông</strong></p>
<p>Khi tham gia câu lạc bộ này, học sinh có cơ hội học hỏi và rèn luyện các kỹ năng cơ bản của môn cầu lông, bao gồm việc học luật chơi, tính điểm, giao cầu và trả cầu. Bên cạnh đó, môn thể thao này cũng giúp các em nâng cao sức khỏe và có được khoảng thời gian vui chơi với bạn bè.</p>
				</div>
					
				<div class="toggle-wrapper">
				<h3 class="toggle-heading">Câu lạc bộ Bóng đá</h3>
				<p><strong>Câu lạc bộ Bóng đá</strong></p>
<p style="text-align: justify;">Là một huấn luyện viên bóng đá giàu kinh nghiệm, thầy Linh sẽ hướng dẫn các quy tắc và kỹ năng cơ bản của môn bóng đá cho học sinh để các em có thể rèn luyện nâng cao sức khỏe, lòng quyết tâm và sự tự tin cũng như học hỏi được kỹ năng hoạt động nhóm.</p>
				</div>
			</div>

  			<div id="Nghệ thuật" class="w3-container w3-border HoatDong" style="display:none">
				<div class="toggle-wrapper">
				<h3 class="toggle-heading">Nghệ thuật</h3>
				<p><b>Nghệ thuật</b></p>
<p style="text-align: justify;">Trong câu lạc bộ này, hoc sinh sẽ được dạy kỹ năng vẽ để tạo ra các dự án nghệ thuật hoặc làm đồ thủ công sáng tạo, hấp dẫn. Các em sẽ được làm việc cùng các chất liệu khác nhau và các loại hình nghệ thuật phù hợp với lứa tuổi.</p>
				</div>
 			</div>
				
		</div>
	</div>
<script>
function openHoatDong(evt, HoatDongName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("HoatDong");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(HoatDongName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>
		
	
	
	
	
	
	
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