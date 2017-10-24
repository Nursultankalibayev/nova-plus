$('.navbar-fostrap').click(function () {
    if($(this).attr('data-toggle') == 0){
        $('.mobile_header_menu').addClass('open');
        $(this).attr('data-toggle',1);
    }else {
        $('.mobile_header_menu').removeClass('open');
        $(this).attr('data-toggle',0);
    }
});

$('.carousel_on').slick({
    arrows:true,
    dots:false,
    infinite:true,
    fade: true,
    autoplay:true,
    autoplaySpeed:1200,
    speed:2000
});