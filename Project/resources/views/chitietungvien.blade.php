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
        .breadcrumb {
            padding: 15px 0!important;
            margin: auto;
            background: transparent;
            list-style: none;
            border-radius: 4px;
        }
        .box-general-detail {
            background: #fff;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
            overflow: hidden;
            margin-bottom: 20px;
        }
        .detail-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            padding-top: 15px!important;
            padding-bottom: 15px!important;
            position: relative;
        }
        .box-general-detail .mw-box-item {
            padding: 10px 15px;
            overflow: hidden;
            line-height: 25px;
        }
        .alert-service {
            padding: 9px 15px;
            color: #7d6d51;
            background-color: #fffdf3;
            border-color: #f5edc7;
            margin: 6px 18px 18px;
        }
        .item-info {
            padding: 20px 20px 5px;
            margin-top: 10px;
        }
        .detail-header .info {
            position: relative;
            z-index: 9;
            width: 100%;
        }
        .detail-header .info .info-candidate {
            display: table;
        }
        .detail-header .info .info-candidate .picture {
            display: table-cell;
        }
        .detail-header .picture {
            width: 145px;
            position: relative;
            margin-top: 5px;
            margin-right: 10px;
        }
        .detail-header .picture .image-cover{
            background-color: #fff;
            float: left;
            width: 145px;
            height: 145px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            border: 3px solid #fff;
            border-radius: 50%;
            overflow: hidden;
        }
        .detail-header .bg-half {
            position: absolute;
            top: 0;
            left: 0;
            height: 90px;
            width: 100%;
            background-color: #333;
            z-index: 1;
        }
        .detail-header .picture .image-cover img {
            width: 100%;
            background: #fff;
            border-radius: 50%;
        }
        img[lazy=loaded] {
            opacity: 1;
        }
        .detail-header .info .info-candidate .info-basic {
            width: 100%;
            display: table-cell;
            vertical-align: top;
            padding-left: 13px;
        }
        .detail-header .info .info-candidate .info-basic .white {
            color: #fff;
        }
        .detail-header .info .info-candidate .info-basic .white .title {
            font-size: 22px;
            margin-top: 9px;
            margin-bottom: 3px;
        }
        .capitalize {
            text-transform: capitalize;
        }
        .detail-header .info .info-candidate .info-basic .white .sub-title {
            font-size: 17px;
            font-weight: 300;
            color: #ffe14f;
        }
        .detail-header .info h1 {
            margin: auto;
            padding: 0;
            padding-bottom: 5px;
            font-size: 20px;
            font-weight: 600;
        }
        .detail-header .info .info-candidate .info-basic .icon {
            width: 24px;
            height: 24px;
            margin-right: 0;
            display: inline-block;
            color: #0091cf;
            text-align: center;
            padding-left: 1px;
            border-radius: 50%;
            line-height: 26px;
            font-size: 14px;
        }
        .box-function {
            padding: 12px 0 7px;
            text-align: left;
        }
        .box-function .el-button {
            width: 145px;
            height: 36px;
            padding: 0;
            line-height: inherit;
        }
        .el-button--info.is-plain {
            background: #fff;
            border: 1px solid #bfcbd9;
            color: #1f2d3d;
        }
        .item-info .head-title {
            margin-top: 0;
            position: relative;
            font-weight: 600;
            -webkit-font-smoothing: antialiased;
        }
        .item-info .head-title .bg {
            position: relative;
            background-color: #fff;
            padding-right: 10px;
        }
        .item-info .head-title .icon {
            width: 34px;
            height: 34px;
            background: #333;
            color: #fff;
            display: inline-block;
            line-height: 36px;
            text-align: center;
            border-radius: 50%;
            margin-right: 10px;
            padding-left: 1px;
        }
        .item-info .properties {
            margin-bottom: 0;
        }
        .list-inline, .list-unstyled {
            padding-left: 0;
            list-style: none;
        }
        .candidate-tag {
            font-size: 13px;
            padding-top: 2px;
            padding-bottom: 3px;
            height: 18px;
            line-height: 13px;
            margin-right: 3px;
        }
        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }
        .item-info .properties li .check {
            color: #55c789;
            font-size: 13px;
            margin-right: 4px;
        }
        [class*=" el-icon-"], [class^=el-icon-] {
            font-family: element-icons!important;
            speak: none;
            font-style: normal;
            font-weight: 400;
            -webkit-font-feature-settings: normal;
            font-feature-settings: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            vertical-align: baseline;
            display: inline-block;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .item-info .properties li .star-right .on {
            color: #f5cc3a;
        }
        .item-info .properties li .star-right i {
            font-size: 18px;
            margin-left: 14px;
        }
        .box_general .mw-box-item {
            padding: 0 15px;
        }
        .box-contact .label-contact {
            padding: 5px 15px;
        }
        strong {
            font-weight: 600;
            font-size: 14.5px;
            -webkit-font-smoothing: antialiased;
        }
        .candidate-detail .box-contact .item, .candidate-detail .box-contact .label-contact {
            padding: 5px 15px;
        }
        .box_right {
            background: #fff;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
            margin-bottom: 20px;
        }
        .candidate_dynamic {
            text-align: center;
            padding: 10px;
        }
        .el-popover {
            position: absolute;
            background: #fff;
            min-width: 150px;
            border-radius: 2px;
            border: 1px solid #d1dbe5;
            padding: 10px;
            z-index: 2000;
            font-size: 12px;
        }
        .box_general>h2, .box_general>h3 {
            font-size: 18px;
            margin: auto;
            padding: 15px;
            border-bottom: 1px solid #eee;
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
        .candidate_info .user_name {
			color: #505050;
			font-weight: 500;
			padding-top: 5px;
		}
		.candidate_info .year_exp {
			padding-top: 2px;
			color: #969696;
		}
        .save-pdf .badge {
            position: absolute;
            top: -5px;
            font-size: 10px;
            padding: 3px 6px 2px;
            background-color: #f74c4c;
        }
        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 12px;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            background-color: #777;
            border-radius: 10px;
        }
	</style>
	<script>
		
	</script>
</head>
<body style="font-family: tahoma; background-color: #f9f9f9;">
    <nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="trangchu.blade.php"><img src="img/logo.png" class="navbar-brand"></a>
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
    <div class="slide" >
        <div class="search col-md-12 col-sm-12" style="width: 100%; padding-left: 30%; background-color: #333">
            <div style="padding: 10px">
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
                        <input class="form-control col-md-5" type="text" placeholder="Vui lòng nhập..." name="search2" style="width: 200px; height: 34px;">
                        <button class="form-control col-md-5" type="submit" style="margin-left: 3%; height: 34px; width: 15%;background: #222222;"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="contentjob">
        <div style="border: solid 1px #ddd; margin-bottom: 10px; background-color: #fff; margin-left: 14%; margin-right: 14%; float: left;">
            <div class="row" >
                <div class="col-md-12 col-lg-12" >
                    <div style="padding-left: 10px" >
                        <ol class="breadcrumb" >
                            <li >
                                <a href="/" class="nuxt-link-active" >
                                    <span >Trang chủ</span>
                                </a>
                            </li>
                            <li >
                                <a href="/ung-vien"  class="">
                                    <span >Danh sách ứng viên</span>
                                </a>
                            </li>
                            <li class="active" >
                                <span >Chuyên Viên Kinh Doanh</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-8 col-lg-8 col-left" >
                    <div id="detail-el" class="box-general-detail pb-15" >
                        <div class="mw-box-item detail-header" >
                            <div class="info" >
                                <div class="info-candidate" >
                                    <div class="picture" >
                                        <div class="image-cover" >
                                            <img class="lazy-load"  src="https://cdn1.mywork.com.vn/default-image/avatar/male_avatar.jpg" lazy="loaded">
                                        </div>
                                    </div>
                                    <div class="info-basic" >
                                        <div class="white" >
                                            <h2 class="title capitalize" >lê nguyễn trường hải</h2>
                                            <h1 class="sub-title capitalize cv-title" >Chuyên Viên Kinh Doanh</h1>
                                        </div>
                                        <div class="mt-16" >
                                            <div class="row" >
                                                <div class="col-sm-8" style="line-height: 26px" >
                                                    <p >
                                                        <span class="icon" >
                                                            <i class="icon-calendar" ></i>
                                                        </span>&nbsp;16/08/1991
                                                    </p>
                                                    <p >
                                                        <span class="icon" >
                                                            <i class="icon-location-pin fs-15" ></i>
                                                        </span>&nbsp;Bình Đức - Long Xuyên - An Giang
                                                    </p>
                                                </div>
                                                <div class="col-sm-4" >
                                                    <p >
                                                        <span class="icon" >
                                                            <i class="icon-symbol-male" ></i>
                                                        </span>&nbsp;Nam
                                                    </p>
                                                    <p >
                                                        <span class="icon" >
                                                            <i class="icon-badge" ></i>
                                                        </span>&nbsp;Độc thân
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-half" ></div>
                        </div>
                        <div class="alert alert-warning alert-service" >
                            <span >
                                Bạn đang xem hồ sơ ứng viên đã được phân loại trên MyWork. Hồ sơ có giá trị
                                <span class="text-danger" >2</span> điểm.
                            </span>
                            <span >Đồng ý xem
                                <a href="javascript:void(0)" >bấm vào đây</a>. Hoặc
                                <a href="/bang-gia/dich-vu-xem-ho-so" target="_blank"  class=""> bấm vào đây </a>để đăng ký dịch vụ.
                            </span>
                            <div class="box-function" >
                                <button type="button" class="el-button el-button--info is-plain" >
                                    <span>
                                        <i class="icon-heart mr-3" ></i>&nbsp;Lưu hồ sơ
                                    </span>
                                </button>
                                <button type="button" class="el-button btn-call-action el-button--warning" >
                                    <span>
                                        <i class="icon-eye mr-3" ></i>&nbsp;Xem liên hệ
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="common-info item-info mt-n pt-n" >
                            <h3 class="head-title" >
                                <span class="bg" >
                                    <span class="icon" >
                                        <i class="icon-user" ></i>
                                    </span>
                                    Thông tin hồ sơ
                                </span>
                            </h3>
                            <div class="content" >
                                <div class="row" >
                                    <div class="col-sm-7" >
                                        <ul class="list-unstyled properties" >
                                            <li ><strong >Ngành nghề: </strong>
                                                <span class="el-tag candidate-tag el-tag--primary" style="background-color:undefined;" >
                                                    <a href="/ung-vien/7/ngan-hang-tai-chinh.html"  class="">Ngân hàng/ Tài Chính</a>
                                                </span>
                                                <span class="el-tag candidate-tag el-tag--primary" style="background-color:undefined;" >
                                                    <a href="/ung-vien/32/nhan-vien-kinh-doanh.html"  class="">Nhân viên kinh doanh</a>
                                                </span>
                                            </li>
                                            <li >
                                                <strong >Trình độ học vấn: </strong>Cử nhân
                                            </li>
                                            <li >
                                                <strong >Loại hình công việc: </strong>
                                                <span >Toàn thời gian cố định,&nbsp;</span>
                                            </li>
                                            <li >
                                                <strong >Cấp bậc mong muốn: </strong>Nhân viên
                                            </li>
                                            <li >
                                                <strong >Mức lương mong muốn:</strong>&nbsp;
                                                <span class="text-danger" >10-12 triệu</span>
                                            </li>
                                            <li >
                                                <strong >Số năm kinh nghiệm:</strong>
                                                <span class="text-danger" > 3 năm</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-5" >
                                        <ul class="list-unstyled properties" >
                                            <li >
                                                <strong >Nơi làm việc: </strong>
                                                <span class="el-tag candidate-tag el-tag--primary" style="background-color:undefined;" >
                                                    <a href="/ung-vien/dia-diem/3/an-giang.html"  class="">An Giang
                                                    </a>
                                                </span>
                                            </li>
                                            <li >
                                                <strong >Quận / huyện: </strong>&nbsp;Thành phố Long Xuyên
                                            </li>
                                            <li >
                                                <strong >Tỉnh / thành phố: </strong>&nbsp;An Giang
                                            </li>
                                            <li >
                                                <strong >Mã hồ sơ:</strong> 2169907
                                            </li>
                                            <li >
                                                <strong >Số lượt xem:</strong> 581
                                            </li>
                                            <li >
                                                <strong >Ngày cập nhật: </strong>03/08/2019
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common-info item-info pt-n" >
                            <h3 class="head-title" >
                                <span class="bg" >
                                    <span class="icon" >
                                        <i class="icon-trophy" ></i>
                                    </span>
                                    Mục tiêu nghề nghiệp
                                </span>
                            </h3>
                            <div class="content" >
                                <ul class="list-unstyled properties mt-5" >
                                    <li >
                                        <i class="check el-icon-circle-check" ></i> Mong muốn tìm được chỗ làm có cơ hội thăng tiến tốt
                                    </li>
                                    <li >
                                        <i class="check el-icon-circle-check" ></i> Mong muốn tìm được chỗ làm có mức lương tốt
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="common-info item-info pt-n" >
                            <h3 class="head-title" >
                                <span class="bg" >
                                    <span class="icon" >
                                        <i class="icon-magic-wand" ></i>
                                    </span>
                                    Kỹ năng bản thân
                                </span>
                            </h3>
                            <div class="content" >
                                <div >
                                    <ul class="properties list-unstyled mt-5" ></ul>
                                    <ul class="properties list-unstyled mb-n" >
                                        <li >
                                            <i class="check el-icon-circle-check" ></i> Kỹ năng giao tiếp
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div  class="common-info item-info pt-n">
                            <h3  class="head-title">
                                <span  class="bg">
                                    <span  class="icon" style="line-height: 38px;">
                                        <i  class="icon-book-open"></i>
                                    </span>
                                    Trình độ ngoại ngữ
                                </span>
                            </h3>
                            <div  class="content">
                                <ul  class="list-unstyled properties rate-list mt-5">
                                    <li  class="mb-10">
                                        <span  class="left">
                                            Tiếng Anh
                                        </span>
                                        <span  class="star-right">
                                            <i  class="el-icon-star-on on"></i>
                                            <i  class="el-icon-star-on on"></i>
                                            <i  class="el-icon-star-off off"></i>
                                            <i  class="el-icon-star-off off"></i>
                                            <i  class="el-icon-star-off off"></i>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="common-info item-info pt-n" >
                            <h3 class="head-title mb-n pb-n" >
                                <span class="bg" >
                                    <span class="icon" >
                                        <i class="icon-graduation" ></i>
                                    </span>
                                    Học vấn / bằng cấp
                                </span>
                            </h3>
                            <div class="content" >
                                <div class="timeline" >
                                    <div class="item" >
                                        <div class="time" >
                                            <span >Từ 01/2011 - 06/2015</span>
                                        </div>
                                        <div class="info" >
                                            <h4 >Cử nhân </h4>
                                            <p >
                                                <strong >Trường / nơi đào tạo: </strong>ĐẠI HỌC CẦN THƠ
                                            </p>
                                            <p >
                                                <strong >Xếp loại:</strong> Trung bình
                                            </p>
                                            <p >
                                                <strong >Ngành:</strong> TÀI CHÍNH NGÂN HÀNG
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common-info item-info pt-n" >
                            <h3 class="head-title mb-n pb-n" >
                                <span class="bg" >
                                    <span class="icon" >
                                        <i class="icon-briefcase" ></i>
                                    </span>
                                    Kinh nghiệm làm việc 
                                    <span class="text-danger" >(3 năm)</span>
                                </span>
                            </h3>
                            <div class="content" >
                                <div class="timeline" >
                                    <div class="item" >
                                        <div class="time" >
                                            <span >Từ 03/2016 - 09/2018</span>
                                        </div>
                                        <div class="info" >
                                            <h4 >Nhân Viên Tín Dụng</h4>
                                            <p >
                                                <strong >Công ty:</strong> CÔNG TY TÀI CHÍNH HD SAISON
                                            </p>
                                            <div class="cert-info" >
                                                <strong >Mô tả:</strong><br >
                                                <div class="item-desc pre-line" >
                                                    - Tìm kiếm khách hàng tiềm năng
                                                    - Thu thập thông tin khách hàng;
                                                    - Hướng dẫn hoàn tất hồ sơ, chăm sóc, giải đáp thắc mắc cho khách hàng.
                                                    - Hướng dẫn làm hợp đồng theo quy định và theo dõi việc thẩm định hồ sơ;
                                                    - Đảm bảo đạt chỉ tiêu doanh số hàng tháng.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline" >
                                    <div class="item" >
                                        <div class="time" >
                                            <span >Từ 11/2018 - 08/2019</span>
                                        </div>
                                        <div class="info" >
                                            <h4 >Chuyên Viên Khách Hàng Doanh Nghiệp</h4>
                                            <p >
                                                <strong >Công ty:</strong> Vnpt An Giang
                                            </p>
                                            <div class="cert-info" >
                                                <strong >Mô tả:</strong><br >
                                                <div class="item-desc pre-line" >
                                                    - Chăm sóc và phát triển dịch vụ Công nghệ thông tin và các dịch vụ doanh nghiệp trên địa bàn được giao. 
                                                    - Hoàn thành tốt các công việc được giao
                                                    - Báo cáo kết quả công việc
                                                    - Thực hiện các công việc khác khi được yêu cầu
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="box-contact" class="box_general" style="margin-bottom:20px">
                        <h3 class="title-h2" >Thông tin liên hệ</h3>
                        <div class="mw-box-item box-contact" >
                            <div class="row pt-10" >
                                <div class="col-md-6 col-lg-3 label-contact" >
                                    <strong >Họ tên:</strong>
                                </div>
                                <div class="col-md-6 col-lg-9 item" >
                                    <span class="capitalize" >lê nguyễn trường hải</span>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-6 col-lg-3 label-contact" >
                                    <strong >Địa chỉ:</strong>
                                </div>
                                <div class="col-md-6 col-lg-9 item" >
                                    Bình Đức - Long Xuyên - An Giang
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-6 col-lg-3 label-contact" ></div>
                                <div class="col-md-6 col-lg-9 item pt-15 pb-5" >
                                    <button type="button" class="el-button btn-call-action el-button--warning" >
                                        <span>
                                            <i class="icon-eye mr-3" ></i>&nbsp;Xem liên hệ
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-lg-4 col-right" >
                    <div class="row-left" >
                        <div class="box_right" >
                            <div class="candidate_dynamic" >
                                <img src="https://cdn1.mywork.com.vn/default-image/avatar/male_avatar.jpg" style="width: 120px" >
                            </div>
                        </div>
                        <div class="box_right" >
                            <div class="candidate_right pt-15 pb-10" >
                                <span >
                                    <div class="el-popover" style="width:autopx;display:none;">
                                        <p class="text-center" >Chia sẻ hồ sơ</p>
                                        <div >
                                            <div >
                                                <button type="button" class="el-button btn-share el-button--info is-plain">
                                                    <span>
                                                        <span data-link="#share-facebook">
                                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABWUlEQVRYR2O0jpoR9O///xlMDIyiDHQE///9e8PMxJzKaBk5/RW9LYf58x/D/9eM1pEz/tPR4xhWjTqAqiHAwc7CEOKuw+BqpcIgJynAwMrKjBLkNlEzaRcFwgJcDBOrfRgUpAVxJimaOYCRkYFhWn0Ag66aON70TDMH2JsqMrQWuhHMTDRzQEuBK4ODmdLAOWDd5GgGMWEeFAe8evuFoXP2IYbz158x/Pr9F6fjqJILDi5OZWBmZkKxpLhjG8PJS48JhgpVHHBkWTqGRU7xc/D6HKaBZg7AluCwBcfQdAC2ICcU2W8/fGPwz1pMnZKQHAccPfeQobxnx8A5YN7aMwzz1p4dOAeUde9gOHb+4cA5ABT/oHSADoZmLkD3BbZEObzLgdEQGA2B0RCgaghYhU97zcjEJEKoOsUnT3ZB9JfhFaNt5MyAPwz/ZlHSQybLAX8ZXjEw/UsFANEUxfDCQfLbAAAAAElFTkSuQmCC">
                                                            Facebook
                                                        </span>
                                                    </span>
                                                </button>
                                                <button type="button" class="el-button btn-share el-button--info is-plain">
                                                    <span>
                                                        <span data-link="#share-linkedin">
                                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAB3ElEQVRYR+2WPWsUURSGnzOzmSxRFBRBTSFGwS6FrF0gpNlRKwOC9jaC2AVJNhEGSSamCDapJL8glURYMyuC2AQMdiKKX5UiksJCYdfs3iOZkdkIWdjl7m4U91Z37sd5n/vOuWdG2OMmsX5QPMAPHegqy76NrwSBSQAKa0sgN7oK4HlHCMY2ewA9B/4RB4QXqHlGzRnF5WxbbksLt+A1m4eHuZ/bIljxqBx8hXDKGqIFgMeEfj4VLERPgdHuARgMotfRzBPc2nnULIGT5I5Na8EBG5nGe5sHMJ+RzJU0kppVMAbJXKpH33ZFFujrewhUqVZGMLIIDDckaBpAec+8f7qeA8UviKvM+cfSsZnoJLP+xz/EgrVDlOUlDvV1OxdYAWwHCi8eTePdLPaz372Ko9+Y81dBNPnIlW6D3tnVhbYCTEfLKNdiIWWcef9B3J8s5XE06jxAIXoL/H5NskCYn0wAHp3DcZ53HmAqelcvTrJImJ+IRadLOVQ32g9gXMNd/3gauOsASI3wwuB/AoD5gJc9k562Uv6EUMXLnkjHfpbfgDOUPJt7eNlbcXermkPNul0ONCxllhNN1wFLnYbbewA9B/4uB6aiy4iOdCrhd68D/TMEY9/t/+0sqX8BmV4nMKu4Ap4AAAAASUVORK5CYII=">
                                                        LinkedIn
                                                        </span>
                                                    </span>
                                                </button>
                                                <button type="button" class="el-button btn-share el-button--info is-plain">
                                                    <span>
                                                        <span data-link="#share-twitter">
                                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADh0lEQVRYR+2WTWxUVRTH/+fcFlrsRwQVGbFvamhKmQ5KFA0ri5ogEBdKmHamjR+Lxq+kMRoX7thoWKgJwYVGEkNoOzqQuNAQFyhtWCCmRMK8AQzIvKbdSBNsaC1tp+8cM9XWDp3XecNguuEt7/uf8/+9e8697xCW+aFl9sddgDu2A49/MVA+VbPmJRA9B+haURoxwI9i/jqWioSmF5Y6lLhWlYo8MJ5dywHYHB98dvWDdf1922mmmN4Idw+Fhd2jRGhcFCf6O4Fbx6YlVV2JHVB6A6r7k7H6/kUAzXHHEeDUhd+sV7CPxA9EuGfwEWX3F4DXeOlV5CaBGYyVBDqcjFqvzmnnd+DRxNBDrusOZ18I8G2tMe2nIw/fLAQR6nGOE2NnId2/X/uDKA6BdGv5JPafe61+dB4g3JveqEQX/yPTFJFpO99WZ3slb+q5ahlmx4/5As2kMnalWoMnc0qwoftyTQWZUTDPQ4nIjDHmszKe/ujXSMPIrUahXmcPEY75BhC5DqY9drS+b1EJsguhuNNHwNN5Ek4C0sMw8UZT13c0Qm5W09w72AHSI74BiN6x26wDC/U5p6A5nm6B6E8Ld2FxV2MchAEhugRoFQMdvgGgb9rR+s/zAjQdcdaVGa0Vwk4S/WRJCP+OuUqlVjtmJfICzDWhQNIkvJoYtbfr4x3HW+1o3UD+EuxTbm5MDwO87s4bz57tqcl7M7VXdjVMefdAr/MeCB//HwAK9KeiwZZbc+c04d6EmguZwe/8XixFgSp12THr4JIAs0cxkVpBmXs+BNAFxoqiTDzEIjJhYNYn260/CwIEv0pXVFfSWwoEoOgEUFMyBOGg3Rbsypcn7+84FL/6PYF3l2z8T4IbnJlpOP/yhmu+ATZ3D69XM31GwYFSIVTRmYoFD3nl8RxIsj8aZj7scTX741J8bceC0aXEBSeiTfH0U4Z4h7r6PhhV/pwBVT1VUb3y+bMvBCZKAgh942yH6gFSCvs1h+KElq16cW7sKgqg5aSWXf9jaKOoPgOgHdAnfRtDBMKf3hewPvA71s2WYFtiqHLMdd+GUJfCDRCz8W86r/yZFO8mY8HTxcTm9MCWxOX7M255J1x0wKCpYCLBuLAeN8xfJlutEwX1eQSeTfhYPB3MKLaBqIkgAQKvUsgEiEehekWV7YqxkTNnX38iczvGczEFT0Epyf3E3gVY9h34G5qbOjBdX+idAAAAAElFTkSuQmCC">
                                                            Twitter
                                                        </span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                                <div class="box-rp-function row text-center pl-15 pr-5" >
                                    <div class="col-md-6" >
                                        <div class="box-func save-pdf el-tooltip" >
                                            <p >
                                                <i class="li-file-spreadsheet" ></i>
                                            </p>
                                            <p >Lưu PDF</p>
                                            <span class="badge" >NEW</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6" >
                                        <div class="box-func el-tooltip" >
                                            <p >
                                                <i class="li-share2" ></i>
                                            </p>
                                            <p >Chia sẻ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_right" >
                            <h3 class="title_right br-b" >Hồ sơ ứng viên năng động</h3>
                            <div class="candidate_right pt-15 pl-15 pr-15" >
                                <div class="candidate-item"  >
                                    <div >
                                        <a href="/ho-so/2169907/chuyen-vien-kinh-doanh.html" title="Chuyên Viên Kinh Doanh" target="_blank" class="nuxt-link-exact-active nuxt-link-active" >
                                            <div class="candidate_avatar" >
                                                <div class="img-background logo_box" style="background-image:url(https://cdn1.mywork.com.vn/avatar/092018/qOX8UTez7ZUkmjoF63Mx1VNGjNSla0ye9YTCuiSI.jpeg);" >
                                                </div>
                                            </div>
                                        </a>
                                        <div class="candidate_info" >
                                            <p class="title text_ellipsis" >
                                                <a href="/ho-so/2169907/chuyen-vien-kinh-doanh.html" title="Chuyên Viên Kinh Doanh"         target="_blank" class="capitalize nuxt-link-exact-active nuxt-link-active" >
                                                    Chuyên Viên Kinh Doanh
                                                </a>
                                            </p>
                                            <p class="user_name text_ellipsis capitalize" >Lê Nguyễn Trường Hải</p>
                                            <p class="year_exp text_ellipsis" >Kinh nghiệm: 
                                                <span class="special" >3 năm</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div style="border: solid 1px #ddd;margin-bottom: 10px; background-color: #fff; margin-left: 14%; margin-right: 14%; float: left;">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home"><b>DANH SÁCH ỨNG VIÊN</b></a></li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<div class="list-group">
					<div  class="col-md-4 col-sm-6 candidate-over-item grid-item">
						<div>
							<div>
								<a href="chitietungvien.blade.php" class="" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank">
									<div class="candidate_avatar">
										<div class="img-background logo_box" style="background-image: url(&quot;https://cdn1.mywork.com.vn/avatar/122018/uKXmEw0WrBanOpnHogwoA5SKj9mM9J3EpkPdvR2o.jpeg&quot;);">
										</div>
									</div>
								</a>
								<div class="candidate_info">
									<p class="title text_ellipsis">
										<a href="chitietungvien.blade.php" class="capitalize" title="Nhân Viên Tư Vấn/ Chăm Sóc Khách Hàng Tiếng Anh" target="_blank" style="text-decoration: none; color: #1790d4">
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
    <div class="text-center text-md-left mt-5" style="background-color: #333333; color: #bdbdbd; marign-top: 80%">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="margin-left: 7%">
                <h6 class="text-uppercase font-weight-bold" style="margin-top: 20px">Company name</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                consectetur
                adipisicing elit.</p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
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
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
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
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase font-weight-bold" style="margin-top: 20px">Contact</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>New York, NY 10012, US</p>
                <p>info@example.com</p>
                <p>+ 01 234 567 88</p>
                <p>+ 01 234 567 89</p>
            </div>
        </div>
    </div>

</body>
</html>
