$(document).ready(function () {
    // end banner home
    $('#open-menu').on('click', function () {
        $('.header-body').toggleClass('active');
    });


    $('ul.tabs li').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    });

    $('.sub-new').slick({
        slidesToShow: 3,
        draggable: true,
        autoplay: false,
        autoplaySpeed: 7000,
        arrows: true,
        dots: true,
        speed: 500,
        // infinite: true,
        cssEase: 'ease-in-out',
        touchThreshold: 100,
    });

    //search

    $('#toggle-search').click(function () {
        $('.box-form').toggleClass('active');
    });
    //search-mobile
    $('#toggle-search').click(function () {
        if($(this).hasClass('fa fa-search')){
            $(this).attr('class','fa fa-times');
        }else{
            $(this).attr('class','fa fa-search');
        }
        $('body').toggleClass('hide-scroll');
        $('.form-search-mobile').toggle(500);
    });

});

