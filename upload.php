
<?php
include("class/clsupload.php");
$p=new myfile();
?>

<!Doctype html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Đăng tải hoạt động ngoại khóa</title>
<link rel="stylesheet" href="../../css/upload.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-			ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
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
	height:50px;
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
</style>
</head>
<body>
		
	
<div id="container">
	<div id="top">
		<div id="l"><h4 style="color:#CCC">Trường Đại Học Công Nghiệp TP.Hồ Chí Minh</h4>
		</div>
 		<div id="r"><a href="login.php" style="color:#CCC"><h4>Đăng nhập</h4></a>
 	 		<i class="fa-solid fa-circle-user"></i>
 		</div>
	</div>
 <div id="menu">
<?php
	include("menu.php");
	include("header1.php");
?>
 </div>

	

<main class="h-90 gradient-form" style="background-color: #eee;">
	
        <div class="container p-5 h-100">
			
            <form class="card-body p-md-5 mx-md-4" action="" method="post" enctype="multipart/form-data" name="forml" id="forml">
				
                <h2 class="mt-3 mb-5 pb-1 text-center">ĐĂNG TẢI CÁC TỆP TIN HOẠT ĐỘNG NGOẠI KHÓA</h2>
				
                <div class="file-upload p-4">
					
                    <div class="row form-outline my-3">
                        <label class="form-label col-5" for="form2Example11">Tên hoạt động ngoại khoá :
						</label>
                        <select class="form-control form-select form-select-lg  d-inline-block col-6"
                            aria-label=".form-select-lg example">
                            <option selected>Chọn họạt động</option>
                            <option value="1">Câu lạc bộ cờ Việt</option>
                            <option value="2">Lớp học Nấu ăn (Đầu bếp nhí)</option>
                            <option value="3">Câu lạc bộ tiếng Trung</option>
							<option value="4">Câu lạc bộ Cầu lông</option>
                            <option value="5">Câu lạc bộ Bóng đá</option>
                            <option value="6">Nghệ thuật</option>
                        </select>
                    </div>
					
					
                    <div class="row form-outline my-3">
                        <label class="form-label col-5" for="form2Example11">Ngày bắt đầu : </label>
                        <p class="col-7">chưa xác định</p>
                    </div>
                    <div class="row form-outline my-3">
                        <label class="form-label col-5" for="form2Example11">Hạn nộp : </label>
                        <p class="col-7">chưa xác định</p>
                    </div>
					
					Mời chọn file cần upload
					<label for="textfield"></label>
					<label for="myfile"></label>
					<input type="file" name="myfile" id="myfile" />
					
                    <div class="text-center py-2 my-5">
						<input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-1" type="submit" name="nut" id="nut" value="Upload file" />
                    </div>
					
<?php	
switch (isset($_POST['nut']))
{
	case 'Upload file':
		{
			$name=$_FILES['myfile']['name'];
			$type=$_FILES['myfile']['type'];
			$tmp_name=$_FILES['myfile']['tmp_name'];
			$size=$_FILES['myfile']['size'];
		
			// Kiem tra kich thuoc
			if ($size > 10000000)
			{
  				echo "Xin lỗi, tệp của bạn quá lớn ( chỉ được phép tải tệp dưới 10MB ).";
			}
			else
			{
			//Cho phep loai tep tin
				if($type == 'application/x-zip-compressed')
				{
					if($p->uploadfile($name,$tmp_name,"mydata")==1)
					{
						echo 'Upload file thành công.';
					}
					else
					{
						echo 'Upload file không thành công.';
					}
				}
				else
				{
  					echo "Xin lỗi, chỉ cho phép tải lên tệp có đuôi .zip.";
				}
			}
			break;
		}	
}
?>
                </div>
			</form>
        </div>
</main>
	


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
	

		
		
