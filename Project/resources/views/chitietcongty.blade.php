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
		.media:first-child {
            margin-top: 0;
        }
        .media, .media-body {
            zoom: 1;
            overflow: hidden;
        }
        .media-left, .media-right, .media-body {
            display: table-cell;
            vertical-align: top;
        }
        #nav-brand .logo {
            display: flex;
            align-items: center;
            max-height: 90px;
            min-height: 90px;
            width: 120px;
        }
        .media-object {
            display: block;
        }
        .help-block {
            color: #999;
        }
        i[class*="fa-"] {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-style: normal;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            transform: translate(0, 0);
        }
        #nav-brand {
            border-bottom: 1px solid #eaeaea;
            background-color: #FFF;
            padding: 10px 0;
        }
        .container {
            width: 1170px;
        }
        #nav-brand .count .job {
            background-color: #f4f4f4;
            display: inline-block;
            padding: 7px 15px;
            border-radius: 3px;
            position: relative;
            top: 8px;
        }
        #nav-brand .count .num {
            font-size: 34px;
            font-weight: 800;
            display: block;
            line-height: 40px;
            text-align: center;
            color: #333;
        }
        .media-list {
            padding-left: 0;
            list-style: none;
        }
        .media-list .media.dashed {
            border-bottom-style: dashed !important;
        }
        .media-list .media {
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
        .row-custom {
            margin-right: -7.5px;
            margin-left: -7.5px;
        }
        .media-list .media .media-heading a {
            font-size: 16px;
            color: #555;
        }
        .help-block {
            color: #999;
        }
        .text-muted {
            color: #999 !important;
        }
        h3.page-header, h1.page-header {
            font-size: 20px !important;
        }
        h3.page-header, h1.page-header {
            font-size: 18px;
            padding-bottom: 12px;
        }
        .page-header {
            border-bottom: none;
            margin-bottom: 30px;
            font-size: 18px !important;
            margin: 20px 0 20px;
            position: relative;
        }
        .about .description {
            line-height: 24px;
        }
        #welfare .box {
            margin-top: 0;
            min-height: 330px;
            border-bottom: 4px solid #eee !important;
            border-radius: 3px;
        }
        .box {
            background: #FFF;
            border: 1px solid #EEE;
            padding: 18px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        #welfare .icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            text-align: center;
            color: #FFF;
            font-size: 26px;
            line-height: 70px;
            display: inline-block;
            background-color: #0c94e4;
        }
        .lh-24 {
            line-height: 24px !important;
        }
        .page-header:after {
            opacity: 0.8;
            background: #0c94e4 !important;
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
                padding-left: 30%;
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
                    <input class="form-control col-md-5" type="text" placeholder="Vui lòng nhập..." name="search2" style="width: 200px; height: 34px;">
                    <button class="form-control col-md-5" type="submit" style="margin-left: 3%; height: 34px; width: 15%;background: #222222;"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div id="nav-brand">
        <div class="titelcongty" style="margin-top: 45%; margin-left: 14%; margin-right: 14%;">
            <div class="row">
                <div class="col-md-9">
                    <div class="media">
                        <div class="media-left pr-30">
                            <div class="logo">
                                <img src="https://cdn1.mywork.com.vn/company-logo-medium/072018/ZKQzVEUF80gFWBpTp96lX5XUk6GkuMgMugXg6HQ2.png" class="media-object" alt="Công ty TNHH Tùng Lâm" width="100%">
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading mt-10 fs-20 mb-8">Công ty TNHH Tùng Lâm</h4>
                            <p class="help-block mb-4"><i class="fa-map-marker pl-2 fs-15 mr-6"></i> 58 Ngọc Hà, phường Đội Cấn, quận Ba Đình, Hà Nội</p>
                            <p class="help-block mb-n mt-n"><i class="fa-globe pl-1 mr-5"></i> tunglam.com.vn
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count text-right">
                        <div class="job mr-15">
                            <span class="num"><i class="fa-check-circle"></i></span>
                            <p class="mb-n text-center">xác thực</p>
                        </div>
                        <div class="job">
                            <span class="num">12</span>
                            <p class="mb-n text-center">việc làm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contentpeople" >
        <div style="width:72%; border: solid 1px #ddd; margin-top: 2%; margin-bottom: 10px; background-color: #fff; margin-left: 14%; margin-right: 14%; float: left;">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home"><b>DANH SÁCH ỨNG VIÊN</b></a></li>
            </ul>
            <div class="madia-list" style="padding: 10px">
                <div class="media dashed">
                    <div class="row row-custom">
                        <div class="col-md-6">
                            <h4 class="media-heading mb-10">
                                <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" target="_blank" title="Phó ban Tổ chức Nhân sự">Phó ban Tổ chức Nhân sự</a>
                            </h4>
                            <p class="help-block">
                                <i class="icon-profile pl-1 pr-3"></i> Số lượng: 1 người
                                &nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="icon-location2 prt-1"></i> Hà Nội
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="deadline mb-8"><i class="icon-alarm prt-1 mr-3 text-muted"></i> Hạn nộp hồ sơ: 15-08-2019</p>
                            <p class="salary pb-n mb-n fw400 text-danger"><i class="icon-coin-dollar prl-1 fs-13 mr-3"></i> 15,000,000 - 20,000,000 VND</p>
                        </div>
                        <div class="col-md-2 text-right pt-5">
                            <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" class="btn btn-warning btn-apply" target="_blank"><i class="fa-send-o mr-3"></i> Ứng tuyển ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="madia-list" style="padding: 10px">
                <div class="media dashed">
                    <div class="row row-custom">
                        <div class="col-md-6">
                            <h4 class="media-heading mb-10">
                                <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" target="_blank" title="Phó ban Tổ chức Nhân sự">Phó ban Tổ chức Nhân sự</a>
                            </h4>
                            <p class="help-block">
                                <i class="icon-profile pl-1 pr-3"></i> Số lượng: 1 người
                                &nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="icon-location2 prt-1"></i> Hà Nội
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="deadline mb-8"><i class="icon-alarm prt-1 mr-3 text-muted"></i> Hạn nộp hồ sơ: 15-08-2019</p>
                            <p class="salary pb-n mb-n fw400 text-danger"><i class="icon-coin-dollar prl-1 fs-13 mr-3"></i> 15,000,000 - 20,000,000 VND</p>
                        </div>
                        <div class="col-md-2 text-right pt-5">
                            <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" class="btn btn-warning btn-apply" target="_blank"><i class="fa-send-o mr-3"></i> Ứng tuyển ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="madia-list" style="padding: 10px">
                <div class="media dashed">
                    <div class="row row-custom">
                        <div class="col-md-6">
                            <h4 class="media-heading mb-10">
                                <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" target="_blank" title="Phó ban Tổ chức Nhân sự">Phó ban Tổ chức Nhân sự</a>
                            </h4>
                            <p class="help-block">
                                <i class="icon-profile pl-1 pr-3"></i> Số lượng: 1 người
                                &nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="icon-location2 prt-1"></i> Hà Nội
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="deadline mb-8"><i class="icon-alarm prt-1 mr-3 text-muted"></i> Hạn nộp hồ sơ: 15-08-2019</p>
                            <p class="salary pb-n mb-n fw400 text-danger"><i class="icon-coin-dollar prl-1 fs-13 mr-3"></i> 15,000,000 - 20,000,000 VND</p>
                        </div>
                        <div class="col-md-2 text-right pt-5">
                            <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" class="btn btn-warning btn-apply" target="_blank"><i class="fa-send-o mr-3"></i> Ứng tuyển ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="madia-list" style="padding: 10px">
                <div class="media dashed">
                    <div class="row row-custom">
                        <div class="col-md-6">
                            <h4 class="media-heading mb-10">
                                <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" target="_blank" title="Phó ban Tổ chức Nhân sự">Phó ban Tổ chức Nhân sự</a>
                            </h4>
                            <p class="help-block">
                                <i class="icon-profile pl-1 pr-3"></i> Số lượng: 1 người
                                &nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="icon-location2 prt-1"></i> Hà Nội
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="deadline mb-8"><i class="icon-alarm prt-1 mr-3 text-muted"></i> Hạn nộp hồ sơ: 15-08-2019</p>
                            <p class="salary pb-n mb-n fw400 text-danger"><i class="icon-coin-dollar prl-1 fs-13 mr-3"></i> 15,000,000 - 20,000,000 VND</p>
                        </div>
                        <div class="col-md-2 text-right pt-5">
                            <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" class="btn btn-warning btn-apply" target="_blank"><i class="fa-send-o mr-3"></i> Ứng tuyển ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="madia-list" style="padding: 10px">
                <div class="media dashed">
                    <div class="row row-custom">
                        <div class="col-md-6">
                            <h4 class="media-heading mb-10">
                                <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" target="_blank" title="Phó ban Tổ chức Nhân sự">Phó ban Tổ chức Nhân sự</a>
                            </h4>
                            <p class="help-block">
                                <i class="icon-profile pl-1 pr-3"></i> Số lượng: 1 người
                                &nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="icon-location2 prt-1"></i> Hà Nội
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="deadline mb-8"><i class="icon-alarm prt-1 mr-3 text-muted"></i> Hạn nộp hồ sơ: 15-08-2019</p>
                            <p class="salary pb-n mb-n fw400 text-danger"><i class="icon-coin-dollar prl-1 fs-13 mr-3"></i> 15,000,000 - 20,000,000 VND</p>
                        </div>
                        <div class="col-md-2 text-right pt-5">
                            <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" class="btn btn-warning btn-apply" target="_blank"><i class="fa-send-o mr-3"></i> Ứng tuyển ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="madia-list" style="padding: 10px">
                <div class="media dashed">
                    <div class="row row-custom">
                        <div class="col-md-6">
                            <h4 class="media-heading mb-10">
                                <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" target="_blank" title="Phó ban Tổ chức Nhân sự">Phó ban Tổ chức Nhân sự</a>
                            </h4>
                            <p class="help-block">
                                <i class="icon-profile pl-1 pr-3"></i> Số lượng: 1 người
                                &nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="icon-location2 prt-1"></i> Hà Nội
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="deadline mb-8"><i class="icon-alarm prt-1 mr-3 text-muted"></i> Hạn nộp hồ sơ: 15-08-2019</p>
                            <p class="salary pb-n mb-n fw400 text-danger"><i class="icon-coin-dollar prl-1 fs-13 mr-3"></i> 15,000,000 - 20,000,000 VND</p>
                        </div>
                        <div class="col-md-2 text-right pt-5">
                            <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" class="btn btn-warning btn-apply" target="_blank"><i class="fa-send-o mr-3"></i> Ứng tuyển ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="madia-list" style="padding: 10px">
                <div class="media dashed">
                    <div class="row row-custom">
                        <div class="col-md-6">
                            <h4 class="media-heading mb-10">
                                <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" target="_blank" title="Phó ban Tổ chức Nhân sự">Phó ban Tổ chức Nhân sự</a>
                            </h4>
                            <p class="help-block">
                                <i class="icon-profile pl-1 pr-3"></i> Số lượng: 1 người
                                &nbsp;&nbsp;|&nbsp;&nbsp;
                                <i class="icon-location2 prt-1"></i> Hà Nội
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="deadline mb-8"><i class="icon-alarm prt-1 mr-3 text-muted"></i> Hạn nộp hồ sơ: 15-08-2019</p>
                            <p class="salary pb-n mb-n fw400 text-danger"><i class="icon-coin-dollar prl-1 fs-13 mr-3"></i> 15,000,000 - 20,000,000 VND</p>
                        </div>
                        <div class="col-md-2 text-right pt-5">
                            <a href="https://mywork.com.vn/tuyen-dung/viec-lam/1296524/pho-ban-to-chuc-nhan-su.html" class="btn btn-warning btn-apply" target="_blank"><i class="fa-send-o mr-3"></i> Ứng tuyển ngay</a>
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
    <div id="nav-brand">
        <div class="titelcongty" style="margin-left: 13%; margin-right: 13%;">
            <div id="about-us" class="page-section bg-white call-action about pb-30" >
                <div class="container" style="margin-top:30px">
                    <h3 class="page-header mt-10">Giới thiệu công ty </h3>
                    <div class="description">
                        <div class="row">
                            <div class="col-md-7">
                                Công ty TNHH Tùng Lâm là một Doanh nghiệp tư nhân được thành lập từ tháng 04 năm 1994, là một trong các doanh nghiệp bắt đầu khởi nghiệp cùng với sự mở cửa của đất nước cho các thành phần kinh tế phát triển. Trải qua hơn 20 năm xây dựng và phát triển đến nay Công ty Tùng Lâm đã đạt được những thành tựu đáng kể trong hoạt động sản xuất kinh doanh.
                                <br>Lĩnh vực sản xuất chính : Sản xuất Cồn sinh học từ nguyên liệu nông sản là sắn, sản xuất CO2 hóa lỏng công nghiệp và thực phẩm, sản xuất bã sấy và ủ chua cho thức ăn chăn nuôi. 
                                <br>Với 02 Nhà máy sản xuất Ethanol, công suất 160.000 tấn/năm và CO2 hóa lỏng 60.000 tấn/năm,  công nghệ hiện đại, tự động hóa hoàn toàn trong dây truyền sản xuất, chúng tôi tự hào là một trong các Nhà máy hiện đại và chất lượng sản phẩm tốt nhất hiện nay.
                                <br>Xuất phát Việt Nam có nhiều vùng đồi núi, địa hình không bằng phẳng, nhiều vùng đất xấu, không có hệ thống tưới tiêu nên canh tác các loại cây trồng khác rất khó khăn. Cây sắn chịu được hạn, ít công chăm sóc là sự lựa chọn cho sự phát triển trồng trọt ở các vùng đất xấu. Với tốc độ tăng trưởng và hiệu quả cây sắn như hiện nay trong vòng 15 năm gần đây cây sắn chính là cây xóa đói giảm nghèo cho bà con vùng cao nguyên. Diện tích trồng sắn trên 500.000 ha sản lượng, trên 10 triệu tấn sắn củ tươi. 
                                <br>Hai Nhà máy Ethanol và CO2 được xây dựng trên Đề án phát triển năng lượng cho một hành tinh xanh, bảo vệ môi trường, chống biến đổi khí hậu. Lấy cây sắn làm gốc, sản xuất Ethanol từ sắn là đầu ra cho bà con nông dân ổn định hơn, không lệ thuộc vào thị trường Trung quốc. 
                                <br>Ethanol của Tùng Lâm đạt tiêu chuẩn xuất khẩu sang những thị trường gồm: Trung Quốc, Hàn Quốc, Singapore,….
                                <br>Nhằm khai thác hết những lợi thế của nước nhà, Công Ty Tùng Lâm có mặt trên nhiều vùng miền trong nước để thu mua, chế biến, sản xuất, nhằm nâng cao giá trị sản phẩm của hàng Việt Nam.  
                                <br>Tùng Lâm đầu tư vào chuỗi công nghệ trà xanh Nhật Bản nhằm phát triển vào thị trường Nhật. Nhà máy trà Tùng Lâm hiện đang hoạt động độc lập với tên Công ty TNHH MTV Tùng Lâm Hòa Bình tại thị trấn Lương Sơn, huyện Lương Sơn Tỉnh Hòa Bình có công xuất 500MT thành phẩm/năm. Trà Tùng Lâm đã thành công và đi vào hơn 20 thị trường trên thế giới bao gồm Nhật Bản, Đức, Hà Lan, Canada, v.v…
                                <br>
                                <br>Doanh số đạt 			: 80,000,000$/năm.
                                <br>
                                <br>Số lao động toàn hệ thống	: 800 người.
                                <br>
                                <br>Những mặt hàng của Công ty sản xuất và kinh doanh, gồm có:          
                                <br>-	Ethanol sinh học
                                <br>-	CO2 và Diesel
                                <br>-	Bã sấy ủ chua làm thức ăn gia súc
                                <br>-	Sắn lát khô, tinh bột sắn
                                <br>-	Trà xanh
                                <br>-	Sản phẩm thủ công giầy, túi truyền thống Nhật Bản
                                <br>
                            </div>
                            <div class="col-md-5">
                                <img src="https://brand.mywork.com.vn/img/intro/2.jpg" style="width: 100%; border-radius: 3px;">
                            </div>
                        </div>
                        <div id="desc-modal" class="modal fade pt-30" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                        <h4 class="modal-title">Giới thiệu công ty</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="office" class="page-section bg-gray pb-n">
                <div class="container">
                    <h3 class="page-header mt-10">Ảnh văn phòng</h3>
                    <div class="images mb-10">
                        <div class="row">
                            <div class="col-md-4" style="margin-bottom: 30px">
                                <a href="https://brand.mywork.com.vn/uploads/album/15-12-2018/nha-mayjpg_1544842126.jpg" class="swipebox">
                        <img class="show-popup img-thumbnail" src="https://brand.mywork.com.vn/uploads/album/15-12-2018/nha-mayjpg_1544842126.jpg" style="width: 100%; height: 250px; object-fit: cover;">
                    </a>
                </div>
                            </div>
                                    </div>
                </div>
            </div>
            <div id="welfare" class="bg-white pb-10">
                <div class="container">
                    <h3 class="page-header fs-30 mt-25">Văn hóa &amp; phúc lợi</h3>
                                    <div class="row flex-container">
                            <div class="col-md-4 col-flex">
                                <div class="box text-center bg-gray">
                                    <div class="icon mt-10"><i class="fa-briefcase"></i></div>
                                    <h4 class="mt-30 mb-20 fw-600">CHÍNH SÁCH TUYỂN DỤNG</h4>
                                    <div class="desc fs-15 lh-24">
                                        Chính sách tuyển dụng công khai, minh bạch, khách quan. Đây là những yếu tố tiên quyết
                                        giúp Công ty TNHH Tùng Lâm tìm kiếm được các ứng viên tài năng, có chuyên môn, nghiệp vụ
                                        tốt, giàu kinh nghiệm cho các vị trí tuyển dụng.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-flex">
                                <div class="box text-center bg-gray">
                                    <div class="icon mt-10"><i class="fa-gift fs-30 prt-2"></i></div>
                                    <h4 class="mt-30 mb-20 fw-600">CHẾ ĐỘ ĐÃI NGỘ LƯƠNG, THƯỞNG</h4>
                                    <div class="desc fs-15 lh-24">
                                        Để khuyến khích tinh thần làm việc cho các thành viên trong công
                                        ty, Công ty TNHH Tùng Lâm có chính sách lương tháng 13, xét tăng lương một năm 1 lần và
                                        xét tăng lương khi gia hạn hợp đồng cho các nhân viên.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-flex">
                                <div class="box text-center bg-gray">
                                    <div class="icon mt-10"><i class="fa-bullhorn fs-30 prt-2"></i></div>
                                    <h4 class="mt-30 mb-20 fw-600">CƠ HỘI THĂNG TIẾN</h4>
                                    <div class="desc fs-15 lh-24">
                                        Tại đây nhân viên được làm việc trong môi trường cạnh tranh lành mạnh, rất nhiều cơ hội
                                        phát triển, thăng tiến đang chờ đón các bạn. Công tác đào tạo và phát triển nguồn nhân
                                        lực luôn được chú trọng và phát triển.
                                    </div>
                                </div>
                            </div>
                        </div>
                                <div class="row flex-container">
                                    </div>
                    <div class="row flex-container">
                                    </div>
                </div>
            </div>
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
