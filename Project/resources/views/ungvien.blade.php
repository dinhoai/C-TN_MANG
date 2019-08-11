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
		.candidate_avatar {
			float: left;
			max-width: 80px!important;
			margin-right: 0!important;
			border: 1px solid #f1f1f1;
			padding: 2px;
			border-radius: 3px;
			background-color: #fff;
		}
		.candidate_avatar .logo_box {
			width: 65px!important;
			height: 65px!important;
			background-color: #f5f5f5;
			border: none;
			border-radius: 3px;
		}
		.img-background {
			overflow: hidden!important;
			background-size: cover!important;
			background-position: 50% 50%!important;
			text-align: center!important;
			line-height: 40px!important;
			padding: 0!important;
			font-size: 20px!important;
			border: 1px solid #eee;
			border-radius: 5px;
		}
		.candidate_info {
			padding-left: 10px;
			float: left;
			width: calc(100% - 80px);
		}
		.candidate_info .title {
			color: #0091cf;
			cursor: pointer;
			font-size: 14.5px;
			font-weight: 500;
			margin-top: 2px;
		}
		.text_ellipsis {
			white-space: nowrap!important;
			overflow: hidden!important;
			text-overflow: ellipsis!important;
		}
		.capitalize {
			text-transform: capitalize;
		}
		.candidate_info .user_name {
			color: #505050;
			font-weight: 500;
			padding-top: 5px;
		}
		.candidate_info .year_exp {
			padding-top: 2px;
			color: #969696;
		}
		.item-inline {
			padding-top: 10px;
			border-bottom: 1px dashed #e0e0e0;
			margin-top: 0;
		}
		.item-inline .item-title {
			margin-top: 0;
			margin-bottom: 5px;
			font-size: 14.5px;
			line-height: 20px;
		}
		.icon-user {
			speak: none;
			font-style: normal;
			font-weight: 400;
			-webkit-font-feature-settings: normal;
			font-feature-settings: normal;
			font-variant: normal;
			text-transform: none;
			line-height: 1;
			-webkit-font-smoothing: antialiased;
		}
		.icon-pr {
			margin-right: 5px;
		}
		.text-danger {
			color: #db4b55;
		}
		.box_general {
			background: #fff;
			border-radius: 3px;
			-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
			box-shadow: 0 1px 1px rgba(0,0,0,.05);
			overflow: hidden;
		}
		.box_general .box-body {
			padding: 15px;
		}
		.box-search-relate .box_search {
			padding: 8px 0;
		}
		.mw_select {
			position: relative;
		}
		.mw_select .icon-before {
			position: absolute;
			left: 15px;
			top: 8px;
			font-size: 18px;
			color: #555;
		}
		.el-button.el-button--primary:hover {
			background-color: #0095d6;
			border-color: #0095d6;
		}
		.el-button {
			display: inline-block;
			line-height: 1;
			white-space: nowrap;
			cursor: pointer;
			background: #fff;
			border: 1px solid #c4c4c4;
			color: #1f2d3d;
			margin: 0;
			padding: 10px 15px;
			border-radius: 4px;
		}
		.box_general>h2, .box_general>h3 {
			font-size: 18px;
			margin: auto;
			padding: 15px;
			border-bottom: 1px solid #eee;
		}
		.category-inline .item {
			width: 100%;
		}
		.row>div[class*=col-] {
			padding-right: 10px;
			padding-left: 10px;
		}
		.box-follow-category .item a {
			display: block;
			padding: 0 0 8px;
		}
		.box-follow-category {
			overflow: hidden;
		}
		.show-more {
			margin-left: 20px;
			margin-bottom: 10px;
			padding-top: 12px;
			margin-top: 10px;
			border-top: 1px solid #eee;
		}
		.show-more .btn-show-more {
			color: #1790d4;
		}
		.icon-arow-down{
			font-family: simple-line-icons;
			speak: none;
			font-style: normal;
			font-weight: 400;
			-webkit-font-feature-settings: normal;
			font-feature-settings: normal;
			font-variant: normal;
			text-transform: none;
			line-height: 1;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
		.ml-3 {
			margin-left: 3px!important;
		}
		#title-show-more, #title-concat {
			cursor: pointer;
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
	<script>
		$(document).ready(function() {
			$('#title-show-more').click(function() {
				$('.box-follow-category').removeAttr("style");
				$('#title-concat').removeAttr("style");
				$('#title-show-more').attr("style", "display: none");
			});
			$('#title-concat').click(function() {
				$('.box-follow-category').attr("style", "height: 200px");
				$('#title-concat').attr("style", "display: none");
				$('#title-show-more').removeAttr("style");
			});
		});
	</script>
</head>
<body style="font-family: tahoma; background-color: #f9f9f9;">
<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="trangchu"><img src="img/logo.png" class="navbar-brand"></a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="trangchu.blade.php">Trang chủ</a></li>
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
				<li class="active">
					<a href="/ung-vien" class="nuxt-link-exact-active nuxt-link-active">
						<i class="li-clipboard-user mr-2"></i> Tìm ứng viên
					</a>
				</li>
				<li class="">
					<a href="/cong-ty" class="">
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
<div class="contentpeople">
	<div style="border: solid 1px #ddd; margin-top: 2%; margin-bottom: 10px; background-color: #fff; margin-left: 14%; margin-right: 14%; float: left;">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home"><b>DANH SÁCH ỨNG VIÊN</b></a></li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<div class="list-group">
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
											Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh
										</a>
		
									</p>
									<p class="user_name text_ellipsis capitalize">Trương Mỹ Hoa <!----></p>
									<p class="year_exp text_ellipsis">Kinh nghiệm: 
										<span class="special">3 năm</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
											Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh
										</a>
		
									</p>
									<p class="user_name text_ellipsis capitalize">Trương Mỹ Hoa <!----></p>
									<p class="year_exp text_ellipsis">Kinh nghiệm: 
										<span class="special">3 năm</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
											Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh
										</a>
		
									</p>
									<p class="user_name text_ellipsis capitalize">Trương Mỹ Hoa <!----></p>
									<p class="year_exp text_ellipsis">Kinh nghiệm: 
										<span class="special">3 năm</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
											Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh
										</a>
		
									</p>
									<p class="user_name text_ellipsis capitalize">Trương Mỹ Hoa <!----></p>
									<p class="year_exp text_ellipsis">Kinh nghiệm: 
										<span class="special">3 năm</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
											Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh
										</a>
		
									</p>
									<p class="user_name text_ellipsis capitalize">Trương Mỹ Hoa <!----></p>
									<p class="year_exp text_ellipsis">Kinh nghiệm: 
										<span class="special">3 năm</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
											Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh
										</a>
		
									</p>
									<p class="user_name text_ellipsis capitalize">Trương Mỹ Hoa <!----></p>
									<p class="year_exp text_ellipsis">Kinh nghiệm: 
										<span class="special">3 năm</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
											Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh
										</a>
		
									</p>
									<p class="user_name text_ellipsis capitalize">Trương Mỹ Hoa <!----></p>
									<p class="year_exp text_ellipsis">Kinh nghiệm: 
										<span class="special">3 năm</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
											Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh
										</a>
		
									</p>
									<p class="user_name text_ellipsis capitalize">Trương Mỹ Hoa <!----></p>
									<p class="year_exp text_ellipsis">Kinh nghiệm: 
										<span class="special">3 năm</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
											Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh
										</a>
		
									</p>
									<p class="user_name text_ellipsis capitalize">Trương Mỹ Hoa <!----></p>
									<p class="year_exp text_ellipsis">Kinh nghiệm: 
										<span class="special">3 năm</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
											Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh
										</a>
		
									</p>
									<p class="user_name text_ellipsis capitalize">Trương Mỹ Hoa <!----></p>
									<p class="year_exp text_ellipsis">Kinh nghiệm: 
										<span class="special">3 năm</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
											Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh
										</a>
		
									</p>
									<p class="user_name text_ellipsis capitalize">Trương Mỹ Hoa <!----></p>
									<p class="year_exp text_ellipsis">Kinh nghiệm: 
										<span class="special">3 năm</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
											Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh
										</a>
		
									</p>
									<p class="user_name text_ellipsis capitalize">Trương Mỹ Hoa <!----></p>
									<p class="year_exp text_ellipsis">Kinh nghiệm: 
										<span class="special">3 năm</span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="text-align: center" class="col-md-12">
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
<div class="contentjob">
	<div style="border: solid 1px #ddd; margin-bottom: 10px; background-color: #fff; margin-left: 14%; width: 50%; float: left;">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home"><b>HỒ SƠ ỨNG VIÊN MỚI NHẤT</b></a></li>
		</ul>
		<div class="tab-content" style="min-height: 1000px">
			<div id="home" class="tab-pane fade in active box_general">
				<div class="list-group box-body">
					<div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div>
					<div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div>
					<div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div>
					<div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div>
					<div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div><div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div>
					<div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div><div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div>
					<div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div>
					<div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div>
					<div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div>
					<div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div>
					<div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div>
					<div class="item-inline col-md-6" >
						<div class="row"  >
							<div class="col-md-7" >
								<h5 class="item-title text_ellipsis" >
									<a href="/ho-so/2346596/nhan-vien-xuat-nhap-khau.html" title="Nhân Viên Xuất Nhập Khẩu" target="_blank" class="capitalize" >
										Nhân Viên Xuất Nhập Khẩu
									</a>
								</h5>
								<p class="user_name text_ellipsis capitalize mb-2" >
									<i class="icon-user icon-pr fs-12 prt--1 pl-1" ></i>Nguyễn Thị Hồng Mai
								</p>
								<p class="year_exp text_ellipsis" style="margin-left: 5px" >Kinh nghiệm: 
									<span class="text-danger" >Dưới 1 năm</span>
								</p>
								<p class="year_exp text_ellipsis" >
									<i class="icon-location-pin icon-pr fs-14" ></i>Hồ Chí Minh
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="text-align: center;  padding: 5px" class="col-md-12">
			<hr>
			<a style="cursor: pointer; text-decoration: none" href=""> Xem thêm </a>
		</div>
	</div>
	<div class="congty category-inline" style="float: right; margin-right: 14%;background-color: #fff; width: 20%; border: 1px solid #ddd">
		<ul class="list-group-item" style="border: #FFF;color: #337ab7;text-align: center;margin-bottom: 2px;"><b>ỨNG VIÊN THEO NGHÀNH NGHỀ</b></ul>
		<div class="box-follow-category" style="height: 200px">
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
			<div class="col-md-4 col-lg-4 item">
				<a class="">
					Bán hàng
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-12 text-left">
				<div class="show-more" id="show-more">
					<span class="btn-show-more">
						<span id="title-show-more">Xem thêm</span>
						<span id="title-concat" style="display: none">Thu gọn</span>
						<span>
							<i class="icon-arrow-down fs-9 fw-600 ml-3"></i>
						</span>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="search" style="float: right; margin-right: 14%;background-color: #fff; margin-top: 1.5%; width: 20%; border: 1px solid #ddd">
		<div class="box_general pb-n" style="overflow:inherit!important;" >
			<h2 class="text-two-line" ><i class="icon-briefcase mr-4" ></i> Tìm kiếm nâng cao
			</h2>
			<div class="box-body pd-10 pb-15 ph-15 category-inline" >
				<div >
					<div class="box-search-relate">
						<div class="box_search pt-n">
							<div class="mw_select input_search" >
								<input placeholder="Ngành nghề" class="form-control" >
							</div>
						</div>
						<div class="box_search">
							<div class="mw_select input_search" >
								<input placeholder="Địa điểm" class="form-control" >
							</div>
						</div>
						<div class="box_search">
							<div class="mw_select input_search" >
								<input placeholder="Kinh nghiệm" class="form-control" >
							</div>
						</div>
						<div class="box_search">
							<div class="mw_select input_search" >
								<input placeholder="Vị trí" class="form-control" >
							</div>
						</div>
						<div class="box_search">
							<div class="mw_select input_search" >
								<input placeholder="Trình độ học vấn" class="form-control" >
							</div>
						</div>
						<button type="button" class="el-button btn-block mt-10 mb-n el-button--primary">
							<span>Tìm kiếm</span>
						</button>
					</div>
				</div>
			</div>
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
