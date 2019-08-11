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
	<style>
		.item-company {
			padding: 5px;
    		margin-bottom: 15px;
		}
		.container-ibc{
			display: block;
			width: 100%;
			height: auto;
			position: relative;
			overflow: hidden;
			padding: 37.5% 0 0;
		}
		.image-brand-company{
			display: block;
			width: 100%;
			height: 127px;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			border-radius: 3px;
			-o-object-fit: cover;
			object-fit: cover;
		}
		.content-company{
			display: flex;
			-webkit-box-pack: end;
			-ms-flex-pack: end;
			justify-content: flex-end;
			position: relative;
			min-height: 40px;
		}
		.image-logo-company{
			width: 80px;
			height: 80px;
			position: absolute;
			top: -40px;
			left: 20px;
			background: #fff;
			border-radius: 3px;
			border: 1px solid #f9f9f9;
			-o-object-fit: contain;
			object-fit: contain;
		}
		.name-company{
			width: calc(100% - 100px);
			padding: 10px 5px 10px 10px;
			overflow: hidden;
			text-overflow: ellipsis;
			-webkit-line-clamp: 2;
			display: -webkit-box;
			-webkit-box-orient: vertical;
			height: 60px;
		}
		.pagination {
			list-style: none;
			display: inline-block;
			padding: 0;
			margin-top: 10px;
		}
		.pagination li {
			display: inline;
			text-align: center;
		}
		.pagination a {
			float: left;
			display: block;
			font-size: 14px;
			text-decoration: none;
			padding: 5px 12px;
			color: #fff;
			margin-left: -1px;
			border: 1px solid transparent;
			line-height: 1.5;
		}
		.pagination a.active {
			cursor: default;
		}
		.pagination a:active {
			outline: none;
		}
		.head-listing-box {
			height: 190px!important;
		}
		.head-listing-box {
			background-color: #333;
			background-image: url(/job-bg.jpg);
			background-size: cover;
			background-position: 50% 50%;
			position: relative;
			height: 230px;
			-webkit-transition: .3s;
			transition: .3s;
		}
		.head-listing-box .overlay-box {
			padding-top: 25px;
		}
		.container {
			width: 1170px;
		}
		.head-listing-box .box_search .nav-tabs {
			border-bottom: none;
			margin-bottom: -1px;
		}
		.head-listing-box .box_search .nav-tabs li {
			cursor: pointer;
			margin-bottom: 0!important;
		}
		.nav-tabs>li {
			float: left;
			margin-bottom: -1px;
		}
		.head-listing-box .box_search .nav-tabs li a {
			background: #fff;
			color: #777;
			margin-right: 5px;
			border: none;
		}
		.nav-tabs>li>a {
			margin-right: 2px;
			line-height: 1.42857143;
			border: 1px solid transparent;
			border-radius: 4px 4px 0 0;
		}
		.head-listing-box .box_search .nav-tabs .active a{
			background: #333;
			color: #fff;
			border-bottom: 0;
			border: 1px solid white;
		}
		.head-listing-box .box_search .nav-tabs li a {
			background: #fff;
			color: #777;
			margin-right: 5px;
			border: none;
		}
		.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
			color: #555;
			cursor: default;
			background-color: #fff;
			border: 1px solid #ddd;
			border-bottom-color: transparent;
		}
		.head-listing-box .box_search .tab-content {
			background: #333;
			padding: 20px;
			color: #fff;
			border-radius: 0 4px 4px 4px;
			position: relative;
			border: 1px solid white;
			padding-top: 25px;
		}
		.search-company {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			-ms-flex-direction: row;
			flex-direction: row;
		}
		.search-company .item-keyword {
			width: 85%;
			margin-bottom: 5px;
		}
		.el-input {
			position: relative;
			font-size: 14px;
		}
		.el-input, .el-input__inner {
			width: 100%;
			display: inline-block;
		}
		.el-input__icon {
			position: absolute;
			width: 35px;
			height: 100%;
			right: 0;
			top: 0;
			text-align: center;
			color: #bfcbd9;
			-webkit-transition: all .3s;
			transition: all .3s;
		}
		.el-input__icon+.el-input__inner {
			padding-right: 35px;
		}
		.search-company .item-button{
			margin-left: 10px;
			width: 15%;
		}
		.search-company .item-button .btn-search {
			width: 100%;
			padding: 7px 0;
			background: transparent;
			border: 1px solid #fff;
			font-weight: 700;
		}
		.btn {
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: 400;
			line-height: 1.42857143;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			-ms-touch-action: manipulation;
			touch-action: manipulation;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-image: none;
			border: 1px solid transparent;
			border-radius: 4px;
		}
	</style>
</head>
<body style="font-family: tahoma; background-color: #f9f9f9;">
<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="trangchu"><img src="img/logo.png" class="navbar-brand"></a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="trangchu">Trang chủ</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Chuyên môn<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Page 1-1</a></li>
					<li><a href="#">Page 1-2</a></li>
					<li><a href="#">Page 1-3</a></li>
				</ul>
			</li>
			<li><a href="congty.blade.php">Công ty</a></li>
			<li><a href="ungvien.blade.php">Ứng viên</a></li>
			<li><a href="#">Liên hệ</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#" style="font-size: 13px;"><span class="glyphicon glyphicon-user"></span>   Đăng nhập</a></li>
			<li><a href="#" style="font-size: 13px;"><span class="glyphicon glyphicon-log-in"></span>   Đăng ký</a></li>
		</ul>
	</div>
</nav>
<section class="head-listing-box">
	<div class="container overlay-box">
		<div class="box_search">
			<ul class="nav nav-tabs">
				<li class="">
					<a href="/ung-vien" class="">
						<i class="li-clipboard-user mr-2"></i> Tìm ứng viên
					</a>
				</li>
				<li class="active">
					<a href="/cong-ty" class="nuxt-link-exact-active nuxt-link-active">
						<i class="li-apartment mr-2"></i> Tìm công ty
					</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="search-company">
					<div class="item-keyword">
						<div  class="el-input">
							<i class="el-input__icon el-icon-search"></i>
							<input autocomplete="off" placeholder="Nhập tên công ty cùng địa điểm muốn tìm..." icon="search" type="text" rows="2" validateevent="true" class="el-input__inner" style="height: 35px">
						</div>
					</div>
					<div class="item-button">
						<button class="btn btn-search">Tìm kiếm</button>
					</div>
				</div>
				<div class="text-center loadding-filter">
				</div>
			</div>
		</div>
	</div>
</section>
<div class="contentjob">
	<div style="border: solid 1px #ddd; margin-top: 2%; margin-bottom: 10px; background-color: #fff; margin-left: 14%; margin-right: 14%; float: left;">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home"><b>DANH SÁCH CÔNG TY</b></a></li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<div class="list-group">
					<div class="col-md-4 col-sm-12" >
						<div class="item-company">
							<div class="container-ibc">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-brand-company" src="https://cdn1.mywork.com.vn/media/images/brand-cover/cover-4.jpg" lazy="error">
								</a>
							</div>
							<div class="content-company">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-logo-company" src="https://cdn1.mywork.com.vn/company-logo/062018/53cc969edf8e57416fa55022f418fca1.png" lazy="loaded">
								</a>
								<div class="name-company">
									<a target="_blank" href="https://brand.mywork.com.vn/STK" 		class="cursor-pointer">Công Ty TNHH Stk
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12" >
						<div class="item-company">
							<div class="container-ibc">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-brand-company" src="https://cdn1.mywork.com.vn/media/images/brand-cover/cover-4.jpg" lazy="error">
								</a>
							</div>
							<div class="content-company">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-logo-company" src="https://cdn1.mywork.com.vn/company-logo/062018/53cc969edf8e57416fa55022f418fca1.png" lazy="loaded">
								</a>
								<div class="name-company">
									<a target="_blank" href="https://brand.mywork.com.vn/STK" 		class="cursor-pointer">Công Ty TNHH Stk
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12" >
						<div class="item-company">
							<div class="container-ibc">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-brand-company" src="https://cdn1.mywork.com.vn/media/images/brand-cover/cover-4.jpg" lazy="error">
								</a>
							</div>
							<div class="content-company">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-logo-company" src="https://cdn1.mywork.com.vn/company-logo/062018/53cc969edf8e57416fa55022f418fca1.png" lazy="loaded">
								</a>
								<div class="name-company">
									<a target="_blank" href="https://brand.mywork.com.vn/STK" 		class="cursor-pointer">Công Ty TNHH Stk
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12" >
						<div class="item-company">
							<div class="container-ibc">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-brand-company" src="https://cdn1.mywork.com.vn/media/images/brand-cover/cover-4.jpg" lazy="error">
								</a>
							</div>
							<div class="content-company">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-logo-company" src="https://cdn1.mywork.com.vn/company-logo/062018/53cc969edf8e57416fa55022f418fca1.png" lazy="loaded">
								</a>
								<div class="name-company">
									<a target="_blank" href="https://brand.mywork.com.vn/STK" 		class="cursor-pointer">Công Ty TNHH Stk
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12" >
						<div class="item-company">
							<div class="container-ibc">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-brand-company" src="https://cdn1.mywork.com.vn/media/images/brand-cover/cover-4.jpg" lazy="error">
								</a>
							</div>
							<div class="content-company">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-logo-company" src="https://cdn1.mywork.com.vn/company-logo/062018/53cc969edf8e57416fa55022f418fca1.png" lazy="loaded">
								</a>
								<div class="name-company">
									<a target="_blank" href="https://brand.mywork.com.vn/STK" 		class="cursor-pointer">Công Ty TNHH Stk
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12" >
						<div class="item-company">
							<div class="container-ibc">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-brand-company" src="https://cdn1.mywork.com.vn/media/images/brand-cover/cover-4.jpg" lazy="error">
								</a>
							</div>
							<div class="content-company">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-logo-company" src="https://cdn1.mywork.com.vn/company-logo/062018/53cc969edf8e57416fa55022f418fca1.png" lazy="loaded">
								</a>
								<div class="name-company">
									<a target="_blank" href="https://brand.mywork.com.vn/STK" 		class="cursor-pointer">Công Ty TNHH Stk
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12" >
						<div class="item-company">
							<div class="container-ibc">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-brand-company" src="https://cdn1.mywork.com.vn/media/images/brand-cover/cover-4.jpg" lazy="error">
								</a>
							</div>
							<div class="content-company">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-logo-company" src="https://cdn1.mywork.com.vn/company-logo/062018/53cc969edf8e57416fa55022f418fca1.png" lazy="loaded">
								</a>
								<div class="name-company">
									<a target="_blank" href="https://brand.mywork.com.vn/STK" 		class="cursor-pointer">Công Ty TNHH Stk
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12" >
						<div class="item-company">
							<div class="container-ibc">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-brand-company" src="https://cdn1.mywork.com.vn/media/images/brand-cover/cover-4.jpg" lazy="error">
								</a>
							</div>
							<div class="content-company">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-logo-company" src="https://cdn1.mywork.com.vn/company-logo/062018/53cc969edf8e57416fa55022f418fca1.png" lazy="loaded">
								</a>
								<div class="name-company">
									<a target="_blank" href="https://brand.mywork.com.vn/STK" 		class="cursor-pointer">Công Ty TNHH Stk
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12" >
						<div class="item-company">
							<div class="container-ibc">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-brand-company" src="https://cdn1.mywork.com.vn/media/images/brand-cover/cover-4.jpg" lazy="error">
								</a>
							</div>
							<div class="content-company">
								<a target="_blank" href="https://brand.mywork.com.vn/STK" class="cursor-pointer">
									<img class="image-logo-company" src="https://cdn1.mywork.com.vn/company-logo/062018/53cc969edf8e57416fa55022f418fca1.png" lazy="loaded">
								</a>
								<div class="name-company">
									<a target="_blank" href="https://brand.mywork.com.vn/STK" 		class="cursor-pointer">Công Ty TNHH Stk
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="text-align: center">
			<ul class="pagination modal-1">
				<li><a href="#" class="prev">&laquo</a></li>
				<li><a href="#" class="active">1</a></li>
				<li> <a href="#">2</a></li>
				<li> <a href="#">3</a></li>
				<li> <a href="#">4</a></li>
				<li> <a href="#">5</a></li>
				<li> <a href="#">6</a></li>
				<li> <a href="#">7</a></li>
				<li> <a href="#">8</a></li>
				<li> <a href="#">9</a></li>
				<li><a href="#" class="next">&raquo;</a></li>
			</ul>
		</div>
	</div>
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
