$(function() {
    /* 헤더 */
    $('.gnb_li').hover(function(){
        $(this).find(".sub_ul").stop().slideToggle(300);
    });
    /* 헤더 끝 */
    /* 푸터 */
    $('.font_gnb').hover(function(){
        $(this).find('a').css('color','#4974bc');
    },function(){
        $(this).find('a').css('color','#777777');
    });
    $('.liimg').hover(function(){
        $(this).css('transform','translate(0,-10px)');
    },function(){
        $(this).css('transform','translate(0, 0)');
    });
    /* 푸터 끝 */
});