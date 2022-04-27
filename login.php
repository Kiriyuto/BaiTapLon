<?php
include("class/clslogincsdl.php");
$p=new login();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Đăng Nhập</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/css.css" rel="stylesheet" />
</head>
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
h2
{
	margin-top:10px;
}
.login{
  background-image:url(img/main.jpg);
  min-height: 800px;
  display: flex;
  justify-content: center;
  border-style: none;
  margin: 10px;
  margin-bottom: 10px;
}
</style>

<body> 

	<div class="container">
     <div id="main">
			<div class="login" >
				<form action="" method="POST" class="form" id="form-1">
					<h3 class="heading">Đăng Nhập</h3>
					<div class="desc"></div>
		
				  <div class="form-group">        
					<label for="email" class="form-label">Tên đăng nhập</label>
					  <input  class="form-control" type="text" id="txttdn" name="txttdn" placeholder="Nhập tên đăng nhập">
					  <span class="form-mesage"></span>
					</div>
					<div class="form-group">        
						<label for="txtpass" class="form-label">Mật khẩu</label>
						<input class="form-control" type="password" id="txtpass" name="txtpass" placeholder="Mật khẩu chứa 6 kí tự">
						<span class="form-mesage"></span>
				  </div>
				  <input type="submit" name="button" id="button" value="Đăng nhập" class="form-submit" />
                  		  <a href="index.php"><input type="button" name="button" id="button" value="Quay lại trang chủ" class="form-submit" /></a>
	             <div align="center">
  <?php
  switch($_POST['button'])
  {
	  case 'Đăng nhập':
	  {
		  $user=$_REQUEST['txttdn'];
		  $pass=$_REQUEST['txtpass'];
		  if($user!='' && $pass!='')
		  {
			  if($p->mylogin($user,$pass)==1)
			  {
				  header('location:index1.php');
			  }
		  }
		  else
		  {
			  echo 'Vui lòng nhập đầy đủ thông tin';
		  }
		  break;
	  }
	  
  }
  ?>
  </div>	
				</form>
			</div>
            </div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="../js/login.js"></script>
	<script>
		$(document).ready(function(){
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight) {
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    }
			  });
			}	
		});
		Validator({
        form:'#form-1',
        formGroupSelector:'.form-group',
        errorSelector:'.form-mesage',
        rules:[
            Validator.isRequired('#fullname','Vui lòng nhập tên đầy đủ của bạn'),
            Validator.isEmail('#email'),
            Validator.minLength('#password',6),
        ],
        onSubmit:function(data){
            console.log(data);
            console.log(data);
            alert("Đăng nhập thành công ")
        }
    });
	</script>
</body>
</html>
	