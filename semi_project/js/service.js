$(function() {
    $('.page_nav_li').hover(function(){
        console.log('hover in');
        $(this).find('.lnb').css('display','block');
    },function(){
        $(this).find('.lnb').css('display','none');
    });
});