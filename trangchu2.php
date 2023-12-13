<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>
<head>
<!--     <link rel="stylesheet" href="css/qlbh.css" /> -->
    <title>ADMIN</title>
</head>
<body>
  <div>
    <style type="text/css">
      * {
  margin: 0;
  padding: 0;
}
.button{
  color:red;
}
.button:hover {
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
  background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
  background-color:#dfdfdf;
}.button:active {
  position:relative;
  top:1px;
}
/* This button was generated using http://tools.ngoisaoso.vn/css3button/ */


#menu {
        font-size: 15px;
    color: white;
    padding: 5px 5px 0 5px;
    background-color: #FF6600;
    height: 30px;
    top: 89px;
    right: 0px;
   text-align: right;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}
#menu a{
  color: white;
  padding: 5px;
  text-decoration: none;
  text-align: center;
  
  right: 5px;

}
.h1{
  font-family: arial;
  width: 300px;
  height: 50px;
  padding-left: 10px;
  font-size: 20px;
  font-weight: bold;
  text-align: justify;
}
.h2{
    font-family: arial;
  width: 700px;
  height: 150px;
  padding-left: 10px;
  font-size: 18px;
  text-align: justify;
  padding-top: 5px;
}
#news-block-title {
    font-size: 18px;
        border-bottom: 1px solid #cd2122;
        position: relative;
        left: 300px;
        font-size: 30px;
        top: 50px;

}
p{
  padding-top: 10px;
  font-size: 16px;
  font-weight: normal;
}
.container1{
    width: 1400px;
    height: 1000px;
    border: 1px solid red;
    margin-left:60px;
  }
  h2{
    text-align: center;
    text-shadow:black;
    font-size:20px ;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }
  h2:hover{
    color: saddlebrown;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
  p{
    color: black;
    margin-left: 10px;
  }
  p:hover{
    color: red;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
  .left{
    float: left;
    width: 680px;
    height: 1000px;
    margin: 0 13px;
   
  }
  .right{
    float: left;
    width: 680px;
    height: 1000px;
  }
  .top{
    float:left;
  }
  .a2{
    float:right;
  margin-left:30px;
   color: #FFF;
   text-decoration: none;
   text-transform: uppercase;
}
.pro{
    width: 650px;
    height: 480px;
    float: left;
    margin: 10px 10px;
    border: 1px solid whitesmoke;
    background-color: antiquewhite;
}
.pro:hover{
  border: 1.5px solid black;
  background-color: aqua;
}

.pro>img{
    width: 650px;
    height: 340px;
}
.pro>p{
    color: blue;
}
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  height: 450px;
  margin-left:470px;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}



    </style>
<div id="menu">
    
    <a href="trangchu2.php">Trang Chủ</a>
    |
    <a href="view/quanlysinhvien.php">Quản lý sinh viên</a>
    |
     <a href="view/quanlymonhoc.php">Quản lý môn học</a>
    |
    
      ADMIN 
    <a href="login.php">thoát</a>
    

</div>
</div>
<div >
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/tải xuống.jpg" style="width:650px">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/h4.jpg" style="width:650px">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/h3.jpg" style="width:650px">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
  </div>
<div class="container1">

    <div class="left">
   <div class="pro">
                <img src="img/h3.jpg" alt="">
                <h2><link rel="stylesheet" href="">Nhiều dự án cho học sinh được triển khai </h2>
                <p>Luôn tạo ra các hoạt đọng giải trí vui chơi cho sinh viên</p>
            </div>
            <div class="pro">
                <img src="img/tải xuống.jpg" alt="">
                <h2><link rel="stylesheet" href="">FPT là thương hiệu có giá trị nhất ngành công nghệ tại Việt Nam </h2>
                <p>Forbes Việt Nam vừa công bố danh sách 50 thương hiệu dẫn đầu trong các lĩnh vực kinh doanh tại Việt Nam. Tổng giá trị thương hiệu của danh sách 2020 đạt hơn 12,6 tỷ USD, tăng 22% so với danh sách lần thứ ba.</p>
            </div>
            

   </div>
   <div class="right">
   <div class="pro">
                <img src="img/Baner-chinh-fpt.jpg" alt="">
                <h2><link rel="stylesheet" href="">đa dạng ngành học</h2>
                <p>Công ty Cổ Phần Viễn Thông FPT chi nhánh Đà Nẵng ( tên gọi tắt là FPT Đà Nẵng) hiện là một trong những nhà cung cấp dịch vụ viễn thông và Internet có uy tín và được khách hàng yêu mến tại Việt Nam và Khu vực.</p>
            </div>
     <div class="pro">
                <img src="img/h4.jpg" alt="">
                <h2><link rel="stylesheet" href="">Nhiều dự án cho học sinh được triển khai </h2>
                <p>Forbes Việt Nam thực hiện danh sách này theo phương pháp của Forbes (Mỹ)</p>
            </div>
  </div>
<br>

<!-- The dots/circles -->

   

</div>
</div>
</body>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}</script>

</html>