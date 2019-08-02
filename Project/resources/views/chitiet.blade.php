<!DOCTYPE html>
<html lang="en">
<head>
	<title>NHÓM 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/chitiet.css">
</head>
<body style="font-family: tahoma; background-color: #f9f9f9;">
<nav class="navbar navbar-inverse" style="margin-bottom: 0px;    position: fixed;
    z-index: 10;    margin-top: 0%;
    width: 100%">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="trangchu"><img src="img/logo.png" class="navbar-brand"></a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="#">Trang chủ</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Chuyên môn<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Page 1-1</a></li>
					<li><a href="#">Page 1-2</a></li>
					<li><a href="#">Page 1-3</a></li>
				</ul>
			</li>
			<li><a href="#">Công ty</a></li>
			<li><a href="#">Ứng viên</a></li>
			<li><a href="#">Liên hệ</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 13px"><span class="glyphicon glyphicon-log-in"></span>   Đăng nhập</a>
				<ul class="dropdown-menu">
					<li><a href="#" style="font-size: 13px">Nhà tuyển dụng</a></li>
					<li><a href="#" style="font-size: 13px">Ứng viên</a></li>
				</ul>
			</li>
			<li><a href="#" style="font-size: 13px;"><span class="glyphicon glyphicon-user"></span>   Đăng ký</a></li>
		</ul>
	</div>
</nav>
<div class="top" style=" height: 235px; background-color: #222222;"></div>
<div class="sanpham">
<ul href="#" class="list-group-item" style="border: 1px solid #ddd; width: 60%; margin-left: 20%;height: 120px;  margin-top: -6%;">
						<div class="media-left">
							<img src="img/slide3.jpg" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:100px;height: 100px; margin: 0px 0px 0px 5px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 70%; margin-left: 5%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 15px;text-overflow: ellipsis;"><b>Nhân viên đào tạo lái máy bay xuyên lục địa đủ dài chưa</b></h4>
								<p style="font-size: 13px;margin-top: 5px;">Công ty TNHH K65C thêm thế này đủ để test chưa hay phải thêm nữa</p>
								<p style="font-size: 13px;color: darkgrey;">Hà Nội</p>
							</div>
							<div style="float: right; width: 20%;margin-top: 33px;">
								<input type="button" class="btn btn-info" value="Nộp đơn">
							</div>
						</div>
					</ul>
</div>
<div class="chitietvl">
	<div style="border: solid 1px #ddd; margin-top: 3%; margin-bottom: 10px; background-color: #fff; margin-left: 20%; width: 60%; float: left;">
		<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home"><b>CHI TIẾT VIỆC LÀM</b></a></li>
				<li><a data-toggle="tab" href="#menu1"><b>VIỆC LÀM KHÁC</b></a></li>
		</ul>
		<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
						<div class="list-group"  style="width: 60%; float: left;">
								<h2>Basic Panel</h2>
								<div class="panel-body">A Basic Panel</div>
								<div class="panel-body">A Basic Panel</div>
						</div>
						<div class="contentleft" style="width: 35%; float: right;    background-color: #c2e7f324;
    border: 1px solid #ccf1ff; margin: 2%;">
								<h5>Basic Panel</h5>
									<div class="panel-body">A Basic Panel</div>
									<div class="panel-body">A Basic Panel</div>
						</div>
				</div>
				<div id="menu1" class="tab-pane fade">
						<div class="list-group">
								<h2>Basic Panel</h2>
								<div class="panel-body">A Basic Panel</div>
								<div class="panel-body">A Basic Panel</div>
						</div>
				</div>
		</div>
</div>
<div class="chuemon" style="padding-top: 5px;clear: both;">

	<div class="w3-bar w3-black" style="background-color: #222;">
	  <button class="w3-bar-item w3-button" onclick="openCity('CNTT')">CNTT</button>
	  <button class="w3-bar-item w3-button" onclick="openCity('KETOAN')">KẾ TOÁN</button>
	  <button class="w3-bar-item w3-button" onclick="openCity('MAR')">MARKETING</button>
	  <button class="w3-bar-item w3-button" onclick="openCity('THIETKE')">THIẾT KẾ</button>
	  <button class="w3-bar-item w3-button" onclick="openCity('NGHANG')">NGÂN HÀNG</button>
	  <button class="w3-bar-item w3-button" onclick="openCity('BACSI')">BÁC SĨ</button>
	</div>

	<div id="CNTT" class="w3-container w3-display-container city">
	  <span onclick="this.parentElement.style.display='none'"
	  class="w3-button w3-large w3-display-topright">&times;</span>
	 <table class="table table-striped">
	    <tbody>
	      <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	        <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	        <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	        </ul>
	    </tbody>
  	</table>
	</div>

	<div id="KETOAN" class="w3-container w3-display-container city" style="display:none">
	  <span onclick="this.parentElement.style.display='none'"
	  class="w3-button w3-large w3-display-topright">&times;</span>
	 <table class="table table-striped">
	    <tbody>
	      <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	        <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	        <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	    </tbody>
  	</table>
	</div>

	<div id="MAR" class="w3-container w3-display-container city" style="display:none">
	  <span onclick="this.parentElement.style.display='none'"
	  class="w3-button w3-large w3-display-topright">&times;</span>
	 <table class="table table-striped">
	    <tbody>
	      <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	        <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	        <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	    </tbody>
  	</table>
	</div>
	<div id="THIETKE" class="w3-container w3-display-container city" style="display:none">
	  <span onclick="this.parentElement.style.display='none'"
	  class="w3-button w3-large w3-display-topright">&times;</span>
	 <table class="table table-striped">
	    <tbody>
	      <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	        <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	        <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	    </tbody>
  	</table>
	</div>

	<div id="NGHANG" class="w3-container w3-display-container city" style="display:none">
	  <span onclick="this.parentElement.style.display='none'"
	  class="w3-button w3-large w3-display-topright">&times;</span>
	 <table class="table table-striped">
	    <tbody>
	      <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	        <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	        <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	    </tbody>
  	</table>
	</div>

	<div id="BACSI" class="w3-container w3-display-container city" style="display:none">
	  <span onclick="this.parentElement.style.display='none'"
	  class="w3-button w3-large w3-display-topright">&times;</span>
	 <table class="table table-striped">
	    <tbody>
	      <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	        <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Workshop</span>
	            <br>
	            <span>Ultricies congue</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	        <ul class="w3-ul w3-hoverable w3-white" style="width: 33%; float: left;">
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Denim</span>
	            <br>
	            <span>Sed mattis nunc</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
	            <span class="w3-large">Sweaters</span>
	            <br>
	            <span>Praes tinci sed</span>
	          </li>
	          <li class="w3-padding-16">
	            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
	            <span class="w3-large">Trends</span>
	            <br>
	            <span>Lorem ipsum dipsum</span>
	          </li>
	        </ul>
	    </tbody>
  	</table>
	</div>
	<script>
	function openCity(cityName) {
	  var i;
	  var x = document.getElementsByClassName("city");
	  for (i = 0; i < x.length; i++) {
	    x[i].style.display = "none";  
	  }
	  document.getElementById(cityName).style.display = "block";  
	}
	</script>
</div>
<div class="note">
	<div class="slideshow-container">

		<div class="mySlides">
		  <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
		  <p class="author">- John Keats</p>
		</div>

		<div class="mySlides">
		  <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
		  <p class="author">- Ernest Hemingway</p>
		</div>

		<div class="mySlides">
		  <q>I have not failed. I've just found 10,000 ways that won't work.</q>
		  <p class="author">- Thomas A. Edison</p>
		</div>

		<a class="prev" onclick="plusSlides(-1)">❮</a>
		<a class="next" onclick="plusSlides(1)">❯</a>

		</div>

		<div class="dot-container">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
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
		  var dots = document.getElementsByClassName("dot");
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
		}
		</script>
</div>
	<div style="background-color: #222222;">
		<div class="">

			<!-- Grid row-->
			<div class="row py-4 d-flex align-items-center">

				<!-- Grid column -->
				<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
					<h6 class="mb-0" style="color: #bdbdbd">Get connected with us on social networks!</h6>
				</div>
			</div>
			<!-- Grid row-->

		</div>
	</div>

	<!-- Footer Links -->
	<div class="text-center text-md-left mt-5" style="background-color: #333333; color: #bdbdbd">

		<!-- Grid row -->
		<div class="row mt-3">

			<!-- Grid column -->
			<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="margin-left: 7%">

				<!-- Content -->
				<h6 class="text-uppercase font-weight-bold" style="margin-top: 20px">Company name</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
					consectetur
					adipisicing elit.</p>

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold" style="margin-top: 20px">Products</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>
					<a href="#!">MDBootstrap</a>
				</p>
				<p>
					<a href="#!">MDWordPress</a>
				</p>
				<p>
					<a href="#!">BrandFlow</a>
				</p>
				<p>
					<a href="#!">Bootstrap Angular</a>
				</p>

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold" style="margin-top: 20px">Useful links</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>
					<a href="#!">Your Account</a>
				</p>
				<p>
					<a href="#!">Become an Affiliate</a>
				</p>
				<p>
					<a href="#!">Shipping Rates</a>
				</p>
				<p>
					<a href="#!">Help</a>
				</p>

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold" style="margin-top: 20px">Contact</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>New York, NY 10012, US</p>
				<p>info@example.com</p>
				<p>+ 01 234 567 88</p>
				<p>+ 01 234 567 89</p>

			</div>
			<!-- Grid column -->

		</div>
		<!-- Grid row -->

	</div>
	<!-- Footer Links -->

	<!-- Copyright -->
	<div class="footer-copyright text-center py-3" style="background-color: #222222; color: #bdbdbd; padding: 5px">© 2018 Copyright:
		<a href="http://localhost/laravel/public/trangchu"> nhom1.com</a>
	</div>
	<!-- Copyright -->
</footer>
</div>
</body>
</html>
