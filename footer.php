<div class="footer position-relative">
    <div class="menu-footer">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center" >
                <a href="">Trang chủ</a>
                <a href="">Giới thiệu</a>
                <a href="">CHỈ ĐẠO ĐIỀU HÀNH</a>
                <a href="">Quản lý ngành nghề</a>
                <a href="">Tuyển dụng</a>
                <a href="">Góp ý</a>
            </div>
        </div>
    </div>
    <div class="container p-md-0" style="background: url(dist/images/footer.png) no-repeat top left;">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="info-footer text-center">
                    <h3>CỔNG THÔNG TIN ĐIỆN TỬ SỞ Y TẾ THÀNH PHỐ HÀ NỘI</h3>
                    <div>
                        <p>Địa chỉ: Số 4, Sơn Tây, Ba Đình, Hà Nội</p>
                        <p>Điện thoại: 0243 3998 5765 - Email: vanthu_soyt@hanoi.gov.vn</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="more d-flex align-items-center">
            <div class="widget box-1">
                <p>Chịu trách nhiệm xuât bản - Trưởng BBT : TS.TTƯT Nguyễn Khắc Hiền</p>
                <div class="d-flex">
                    <p>Phó trưởng BBT:</p>
                    <div>
                        <p>PGS.TS Hoàng Đức Hạnh</p>
                        <p>ThS Nguyễn Văn Dung - ThS Nguyễn Quang Anh</p>
                    </div>
                </div>
            </div>
            <div class="widget box-2">
                <p>Đang online: 470 | Lượt truy cập trong tuần: 9.046</p>
                <p>Lượt truy cập trong tháng: 419948</p>
                <p>Lượt truy cập trong năm: 1.231.069 | Tổng : 3.202.454</p>
            </div>
            <div class="widget social d-flex align-items-center">
                <a href="">
                    <img src="dist/images/you.png" alt="">
                </a>
                <a href="">
                    <img src="dist/images/facebook.png" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="copyright text-center">
        <div class="container">
            <p> Sở Y Tế Hà Nội khi phát hành lại thông tin</p>
        </div>
    </div>
</div>


</body>
<script src="dist/js/jquery3-2-1.js"></script>
<script src="dist/js/boostrap-datepicker.js"></script>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
<script src="dist/slick-1.6.0/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js" type="text/javascript"></script>
<script src="dist/js/cascadingDivs.js"></script>
<script src="dist/js/stellarnav.min.js"></script>
<script src="dist/WOW-master/dist/wow.min.js"></script>
<script src="dist/box/jquery.fancybox.min.js"></script>
<script src="dist/js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        jQuery('#banners').cascadingDivs();
        //js banner index
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

        jQuery('.stellarnav').stellarNav({
            theme: 'dark',
            breakpoint: 1200,
            position: 'right',
            phoneBtn: '#',
            locationBtn: '#'
        });
    });
</script>

<script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
<script>
    new WOW().init();
</script>
</html>