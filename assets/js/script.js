$(document).ready(function(){
    $('.thm-group.have-sub .first-level-link').append('<i class="fa-solid fa-triangle icon-direction"></i>');
    $('.have-sub').hover(function(){
        $(this).find('.submenu-box').fadeIn(100);
        $(this).find('.icon-direction').css('transform','rotate(0deg)');
    });
    $('.have-sub').mouseleave(function(){
        $(this).find('.submenu-box').fadeOut(100);
        $(this).find('.icon-direction').css('transform','rotate(-180deg)');
    });
});