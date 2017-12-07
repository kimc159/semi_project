$(function(){
$('.page_nav_li').hover(function(){
    $(this).find('.lnb').css('display','block');
},function(){
    $(this).find('.lnb').css('display','none');
});
 /*헤더 스크롤 */
$(window).scroll(function(){
    if($('.page_path').hasClass('m_gnb2')== false){
        var offset = $('.page_path').offset();
        if($(document).scrollTop() > offset.top){
            $('.page_path').addClass('m_gnb2');
        }
    }else{
        if($(document).scrollTop() < 445){
            $('.page_path').removeClass('m_gnb2');
            
        }
    }
});
/*헤더 스크롤 끝*/
});