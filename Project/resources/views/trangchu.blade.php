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
<body style="font-family: tahoma; background-color: #f9f9f9;">
<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
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
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;text-overflow: ellipsis;">Nhân viên đào tạo lái máy bay xuyên lục địa đủ dài chưa</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C thêm thế này đủ để test chưa hay phải thêm nữa</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
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
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						
						<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;"></div>
					</a>
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
								<p style="font-size: 13px;margin-left: 12%;">Hà Nội</p>
							</div>
						</div>
					</a>
					<hr style="border: 0;
								width: 90%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
					</div>
					<div class="media" >
					<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 60px; margin: 2px 0px 0px 15px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 60%">
								<h5 class="media-heading" style="color: #4a89bf;margin-top: 10px;">Nhân viên đào tạo lái máy bay</h5>
								<p style="font-size: 13px;">Công ty TNHH K65C</p>
							</div>
							<div style="float: right; width: 30%">
								<h5 class="media-heading" style="color: red;margin-top: 10px;margin-left: 10%;">13 - 15 tr</h5>
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
		<ul class="list-group-item" style="border: #FFF;color: #337ab7;text-align: center;margin-bottom: 2px;"><b>NHÀ TUYỂN DỤNG</b></ul>
		<hr style="border: 0;
								width: 92%;
								margin-top: -1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
		<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 40px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 100%">
								<p style="font-size: 13px;margin-top: 4%"><b>Công ty TNHH K65C</b></p>
							</div>
						</div>
					</a>
		<hr style="border: 1px;
								width: 92%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
		<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 40px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 100%">
								<p style="font-size: 13px;margin-top: 4%"><b>Công ty TNHH K65C</b></p>
							</div>
						</div>
					</a>
		<hr style="border: 1px;
								width: 92%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
		<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 40px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 100%">
								<p style="font-size: 13px;margin-top: 4%"><b>Công ty TNHH K65C</b></p>
							</div>
						</div>
					</a>
		<hr style="border: 1px;
								width: 92%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
		<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 40px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 100%">
								<p style="font-size: 13px;margin-top: 4%"><b>Công ty TNHH K65C</b></p>
							</div>
						</div>
					</a>
		<hr style="border: 1px;
								width: 92%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
		<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 40px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 100%">
								<p style="font-size: 13px;margin-top: 4%"><b>Công ty TNHH K65C</b></p>
							</div>
						</div>
					</a>
		<hr style="border: 1px;
								width: 92%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
		<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 40px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 100%">
								<p style="font-size: 13px;margin-top: 4%"><b>Công ty TNHH K65C</b></p>
							</div>
						</div>
					</a>
		<hr style="border: 1px;
								width: 92%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
		<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 40px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 100%">
								<p style="font-size: 13px;margin-top: 4%"><b>Công ty TNHH K65C</b></p>
							</div>
						</div>
					</a>
		<hr style="border: 1px;
								width: 92%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
		<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 40px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 100%">
								<p style="font-size: 13px;margin-top: 4%"><b>Công ty TNHH K65C</b></p>
							</div>
						</div>
					</a>
		<hr style="border: 1px;
								width: 92%;
								margin-top: 1px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
		<a href="chitiet" class="list-group-item" style="border: 0px;">
						<div class="media-left">
							<img src="img/slide3.png" class="media-object" style="border: 1px solid #ddd;padding: 2px ;width:60px;height: 40px;">
						</div>
						<div class="media-body">
							<div style="float: left; width: 100%">
								<p style="font-size: 13px;margin-top: 4%"><b>Công ty TNHH K65C</b></p>
							</div>
						</div>
					</a>
	</div>
	<div class="khuvuc" style="float: right; margin-right: 14%;background-color: #fff; margin-top: 1%; width: 20%; border: 1px solid #ddd">
		<ul class="list-group-item" style="border: #FFF;color: #337ab7;text-align: center;margin-bottom: 2px;"><b>VIỆC LÀM THEO TỈNH</b></ul>
		<hr style="border: 0;
								width: 92%;
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
<!-- 	<div class="chuyenmon" style="float: right; margin-right: 14%;background-color: #fff; margin-top: 1.5%; width: 20%; border: 1px solid #ddd">
		<ul class="list-group-item" style="border: #FFF;color: #337ab7;text-align: center;margin-bottom: 2px;"><b>VIỆC LÀM CHUYÊN MÔN</b></ul>
		<hr style="border: 1px;
								width: 92%;
								margin-top: 2px;
								margin-bottom: 0px;
								border-top: 1px solid #eee;">
		<li><a href="#">CNTT<span class="badge">5</span></a><br></li>
		<li><a href="#">Kế Toán<span class="badge">10</span></a><br></li>
		<li><a href="#">Marketing<span class="badge">2</span></a></li>
		<li><a href="#">Gia sư<span class="badge">3</span></a></li>
		<li><a href="#">NV bán hàng<span class="badge">4</span></a></li>
		<li><a href="#">Thiết kế<span class="badge">223</span></a></li>
		<li><a href="#">Bác Sĩ<span class="badge">145</span></a></li>
		<li><a href="#">Ngân Hàng<span class="badge">82</span></a></li>
	</div> -->
</div>

  <div style="background-color: #222222;clear: both; margin-top: 20px; margin-bottom: 15px;">
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
<div class="main">

<h1>MYLOGO.COM</h1>
<hr>

<h2>PORTFOLIO</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nature')"> Nature</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('people')"> People</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
      <h4>Mountains</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
      <h4>Lights</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
      <h4>Forest</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="/w3images/cars1.jpg" alt="Car" style="width:100%">
      <h4>Retro</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="/w3images/cars2.jpg" alt="Car" style="width:100%">
      <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="/w3images/cars3.jpg" alt="Car" style="width:100%">
      <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="/w3images/people1.jpg" alt="Car" style="width:100%">
      <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="/w3images/people2.jpg" alt="Car" style="width:100%">
      <h4>Man</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="/w3images/people3.jpg" alt="Car" style="width:100%">
      <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
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
