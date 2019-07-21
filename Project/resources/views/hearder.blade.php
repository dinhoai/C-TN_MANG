<!DOCTYPE html>
<html lang="en">
<head>
	<title>NHÓM 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/hearder.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="font-family: tahoma; background-color: #fdfdfd;">
<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="trangchu.html"><img src="img/logo.png" class="navbar-brand"></a>
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
			<li><a href="#">Part time</a></li>
			<li><a href="#">Đăng tin tuyển dụng</a></li>
			<li><a href="#">Liên hệ</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#" style="font-size: 13px;"><span class="glyphicon glyphicon-user"></span>   Đăng nhập</a></li>
			<li><a href="#" style="font-size: 13px;"><span class="glyphicon glyphicon-log-in"></span>   Đăng ký</a></li>
		</ul>
	</div>
</nav>
<div class="slide">
	<div style="position: absolute; width: 100%;">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="img/slide1.png" alt="slide1" style="width:100%;">
				</div>
				<div class="item">
					<img src="img/slide4.png" alt="slide3" style="width:100%;">
				</div>
				<div class="item">
					<img src="img/slide3.png" alt="slide3" style="width:100%;">
				</div>
			</div>
		</div>
	</div>
	<div class="bgcl">
	</div>
	<div class="search col-md-12 col-sm-12" style="position: absolute;
			width: 100%;
			padding-left: 23%;
			margin-top: 20%;">
		<div class="form-group col-md-2 col-sm-4" style="padding-left: 5px; padding-right: 5px">
			<select id="inputState" class="form-control">
				<option style="height: 50px">Địa điểm</option>
				<option>...</option>
			</select>
		</div>
		<div class="form-group col-md-2 col-sm-4" style="padding-left: 5px; padding-right: 5px">
			<select id="inputState" class="form-control">
				<option selected >Ngành nghề</option>
				<option>...</option>
			</select>
		</div>
		<div class="form-group col-md-5 col-sm-8" style="padding-left: 5px; padding-right: 5px">
			<form class="example" action="/action_page.php" style="margin:auto;width:100%;">
				<input type="text" placeholder="Vui lòng nhập..." name="search2" style="height: 50px;">
				<button type="submit" style="height: 50px; width: 15%;background: #222222;"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
</div>
<div class="contentjob">
	<div style="border: solid 1px #ddd; margin-top: 45%; margin-bottom: 10px; background-color: #fff; margin-left: 14%; width: 50%; float: left;">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home"><b>VIỆC LÀM MỚI</b></a></li>
			<li><a data-toggle="tab" href="#menu1"><b>VIỆC LÀM NỔI BẬT</b></a></li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<div class="list-group">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
				</div>
			</div>
			<div id="menu1" class="tab-pane fade">
				<div class="list-group">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 80%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 80%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 80%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 80%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 80%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 80%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 80%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 80%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
					<hr style="border: 0;
								width: 80%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					<div class="media" >
					<a href="#" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h4 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h4>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h4 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13tr - 15tr VNĐ</h4>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="congty" style="float: right; margin-right: 14%;background-color: #fff; margin-top: 45%; width: 20%; border: 1px solid #ddd">
		<ul class="list-group-item" style="border: #FFF;color: #337ab7;text-align: center;margin-bottom: 2px;"><b>VIỆC LÀM THEO TỈNH</b></ul>
		<hr style="border: 0;
								width: 80%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
		<li><a href="#">Hà Nội<span class="badge">5</span></a><br></li>
		<li><a href="#">Hồ Chí Minh<span class="badge">10</span></a><br></li>
		<li><a href="#">Đà Nẵng<span class="badge">2</span></a></li>
		<li><a href="#">Thái Nguyên<span class="badge">3</span></a></li>
		<li><a href="#">Vĩnh Phúc<span class="badge">4</span></a></li>
		<li><a href="#">Quảng Bình<span class="badge">223</span></a></li>
		<li><a href="#">Huế<span class="badge">145</span></a></li>
		<li><a href="#">Cao Bằng<span class="badge">82</span></a></li>
	</div>
</div>

</body>
</html>
