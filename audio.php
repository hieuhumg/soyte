<?php
include_once 'header.php';
?>

<div class="brecum" style="background: #fcfaf6">
    <div class="container">
        <div class="brecum-widget d-flex align-items-center">
            <i class="fa fa-home" aria-hidden="true"></i>
            <a href="">Home</a>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <p>Tra cứu thông tin</p>
        </div>
    </div>
</div>
<div class="audio">
    <div class="container">
        <h3 class="title-content text-uppercase">Sản phẩm phát thanh</h3>
        <div class="row">
            <div class="col-md-8">
                <div class="main-audio">
<!--                    <audio controls preload="metadata">-->
<!--                        <source src="https://www.w3schools.com/html/horse.ogg" type="audio/ogg">-->
<!--                    </audio>-->
                    <audio id="player" controls>
                        <source src="https://www.w3schools.com/html/horse.ogg" type="audio/ogg">
                    </audio>
                    <h3>Tầm quan trọng của kẽm với sức khỏe của trẻ</h3>

                    <!--                    search-->
                    <div class="search-bar">
                        <input type="text" placeholder="Tìm kiếm audio" required></input>
                        <div class="search-icon"></div>
                    </div>
                    <!--                    end search-->

                    <div class="audio-involve">
                        <h5>Audio có liên quan đến bài này</h5>
                        <div class="list position-relative">
                            <div class="item">
                                <i class="fa fa-volume-up" aria-hidden="true"></i>
                                <a href="">Chăm sóc trẻ mắc cúm đúng cách</a>
                            </div>
                            <div class="item">
                                <i class="fa fa-volume-up" aria-hidden="true"></i>
                                <a href="">Chăm sóc trẻ mắc cúm đúng cách</a>
                            </div>
                            <div class="item">
                                <i class="fa fa-volume-up" aria-hidden="true"></i>
                                <a href="">Chăm sóc trẻ mắc cúm đúng cách</a>
                            </div>
                            <div class="item">
                                <i class="fa fa-volume-up" aria-hidden="true"></i>
                                <a href="">Chăm sóc trẻ mắc cúm đúng cách</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-concern video-concern-home">
                    <div class="gallery1">
                        <a class="hoverimg" href="#">
                            <img class="img-cover" src="dist/images/new-1.jpg" alt="">
                        </a>
                        <a data-fancybox="video" data-caption="Giới thiệu nhà ga" class="play" href="https://www.youtube.com/watch?v=sdEU-t3uEM4&amp;list=RDMMsdEU-t3uEM4&amp;start_radio=1">
                            <img src="dist/images/play-video.png" alt="">
                        </a>
                    </div>
                    <div class="box-video">
                        <h5 class="text-uppercase">Sản phẩm truyền hình</h5>
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


