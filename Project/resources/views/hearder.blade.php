<!DOCTYPE html>
<html lang="en">
<head>
	<title>hearder</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../public/css/hearder.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/slide.css">
</head>
<body>

<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
	<div class="container-fluid">
	<div class="navbar-header">
		<a href="trangchu.html"><img src="img/logo.png" class="navbar-brand"></a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="#">Trang chủ</a></li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Chuyên môn<span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="#">Page 1-1</a></li>
			<li><a href="#">Page 1-2</a></li>
			<li><a href="#">Page 1-3</a></li>
		</ul>
		</li>
		<li><a href="#">Part time</a></li>
		<li><a href="#">Đăng tin tuyển dụng</a></li>
		<li><a href="#">Liên hệ</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="#" style="font-size: 12px;"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
		<li><a href="#" style="font-size: 12px;"><span class="glyphicon glyphicon-log-in"></span> Đăng ký</a></li>
	</ul>
	</div>
</nav> 

<div class="container">
  <div class="mySlides">
    <img src="img/slide1.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="img/slide1.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="img/slide1.png" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img/slide1.png" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/slide1.png" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/slide1.png" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>
