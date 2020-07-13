<?php
include_once 'header.php';
?>

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="intro-element">
                    <h3 class="title-content">Giới thiệu</h3>
                    <ul>
                        <li>
                            <a href="detail.php">Chức năng nhiệm vụ</a>
                        </li>
                        <li>
                            <a href="detail.php">Cơ cấu tổ chức</a>
                        </li>
                        <li>
                            <a href="detail.php">Lãnh đạo sở y tế</a>
                        </li>
                        <li>
                            <a href="detail.php">Đơn vị trực thuộc</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-concern">
                    <div class="gallery1">
                        <a class="hoverimg" href="#">
                            <img class="w-100" src="dist/images/new-1.jpg" alt="">
                        </a>
                        <a data-fancybox="video" class="play" href="https://www.youtube.com/watch?v=sdEU-t3uEM4&amp;list=RDMMsdEU-t3uEM4&amp;start_radio=1">
                            <img src="dist/images/play-video.png" alt="">
                        </a>
                    </div>
                    <div class="box-video">
                        <h5 class="text-uppercase" style="background: #ed2126">Xem nhiều trong tuần</h5>
                        <div class="widget">
                            <div class="sub-item active">
                                <i class="fa fa-video-camera" aria-hidden="true"></i>
                                <a href="">Hà Nội đẩy mạnh tuyên truyền về phòng chống dịch bệnh do nCoV</a>
                            </div>
                            <div class="sub-item">
                                <i class="fa fa-video-camera" aria-hidden="true"></i>
                                <a href="">Ngành y tế chủ động phân loại và cách ly tại cơ sở y tế</a>
                            </div>
                            <div class="sub-item">
                                <i class="fa fa-video-camera" aria-hidden="true"></i>
                                <a href="">Người dân phố Trúc Bạch đã trở về cuộc sống thường ngày</a>
                            </div>
                            <div class="sub-item">
                                <i class="fa fa-video-camera" aria-hidden="true"></i>
                                <a href="">Sẵn sàng thu dung, điều trị bệnh nhân mắc Covid 19</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>
<script>
    $().ready(function () {
        $("#submitForm").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "sogiayphep": {
                    required: true,
                },
                "tencoso": {
                    required: true,
                },
                // "quan": {
                //     required: true,
                // }
            },
            messages: {
                "sogiayphep": {
                    required: "<span class='red'>Số giấy phép không được để trống</span>",
                },
                "tencoso": {
                    required: "<span class='red'>Tên cơ sở không được để trống</span>",
                },
                // "quan": {
                //     required: "<span>Quận không được để trống</span>",
                // }
            }
        });
        // window.location = "http://www.page-2.com";
    });
</script>

