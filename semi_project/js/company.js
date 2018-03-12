$(function(){
    $('.page_nav_li').hover(function(){
        console.log('hover in');
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

    $('.sub_li').hover(function(){
        console.log("sub_li hover");
        $(this).css('backgroundColor','#4974bc');
        $(this).find('a').css('color','#fff');
    },function(){
        $(this).css('backgroundColor','#fff');
        $(this).find('a').css('color','#000');
    });
});
