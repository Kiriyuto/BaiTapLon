<style>
body {
  min-width: 800px;
  background-color:#0d99ff;
  margin:0px;
}


#trapezoid {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
  border: 80px solid rgba(0,0,0,0);
  border-top: 0 solid;
  border-bottom: 100px solid rgba(1, 1, 1, .4);
  -webkit-border-radius: 20px 20px 0 0;
  border-radius: 20px 20px 0 0;
  font: normal 100%/normal Arial, Helvetica, sans-serif;
  color: #d099ff;
  -o-text-overflow: clip;
  text-overflow: clip;
  -webkit-transform: rotateX(180deg);
  transform: rotateX(180deg);
  margin-top:-53px;
  width: 100%;
  position: relative;
  padding-left:7%;
}

#trapezoid a {
 -webkit-transform: rotateX(180deg);
  transform: rotateX(180deg);
}


#trapezoid:hover .sub-home {
  justify-content: center;
  margin-top: 0px;
}

.navbar {
  position: sticky;
  top: 0;
  display:flex;
  overflow:hidden;
  justify-content: center;
  height:auto;
  background-color:#FFF;
  
  border-radius:10px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 25px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 4px;
}


.navbar a:hover {
  background:#8CA6DB;
  color: black;
  border-radius:5px;
}



</style>
<script>
$('.expandHome').mouseover(function() {
  $('.sub-home').css({
        'display': 'block'
    }); 
});
$('.subnavbtn').mouseover(function() {
  $('.sub-home').css({
        'display': 'none'
    }); 
});

$('#trapezoid').mouseleave(function() {
  $('#trapezoid').css({
        'margin-top': '-53px'
    }); 
    $('.sub-home').css({
        'display': 'none'
    }); 
}).mouseenter(function() {
  $('#trapezoid').css({
        'margin-top': '0px'
    }); 
});
</script>
<nav class="navbar">
  <div id="trapezoid">
	<a href="index.php">Trang chủ</a>
    <a href="khoahoc.php">Các khóa học</a>
    <a href="editsv.php">Chỉnh sửa</a>
    <a href="index1.php">Nhà của tôi</a>
    <a href="GhinhanPB.php">Ghi nhận</a>
    <a href="hdnk.php">Hoạt động nk</a>
    </div>
  </div>
</nav>
    