$(function() {
    $('.page_nav_li').hover(function(){
        console.log('hover in');
        $(this).find('.lnb').css('display','block');
    },function(){
        $(this).find('.lnb').css('display','none');
    });
    $('.sub_li').hover(function(){
        console.log("sub_li hover");
        $(this).css('backgroundColor','#4974bc');
        $(this).find('a').css('color','#fff');
    },function(){
        $(this).css('backgroundColor','#fff');
        $(this).find('a').css('color','#000');
    });
});