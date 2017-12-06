$(function() {
        AOS.init();
        /** `#slides`요소에 대해 플러그인 적용 */
        $('#slides').superslides({
            inherit_width_from: '#slide-container',   // 슬라이드의 넓이를 구성할 부모 요소
            inherit_height_from: '#slide-container',  // 슬라이드의 높이를 구성할 부모 요소
            play: 4000,          // 재생시간 (1/1000초 단위). 미지정시 자동재생 안됨.
            animation: 'slide'   // 애니메이션 옵션(fade/slide) (미적용시 슬라이드)
        });

        $('.gnb_li').hover(function(){
            $(this).find(".sub_ul").stop().slideToggle(300);
        });
        $('.best-list').hover(function(){
            $(this).find('.btn_moreview').css('display','block');
            $(this).find('.background_black').css('display','block');
        },function(){
            $(this).find('.btn_moreview').css('display','none');
            $(this).find('.background_black').css('display','none');
        });
        $('.event').hover(function(){
            $(this).find('.event_banner').css('transform','scale(1.2)');
            $(this).find('.background_black2').css('display','block');

        },function(){
            $(this).find('.event_banner').css('transform','scale(1.0)');
            $(this).find('.background_black2').css('display','none');

        });
        $('.film').hover(function(){
            $(this).find('.mov_banner').css('transform','scale(1.2)');
            $(this).find('.background_black2').css('display','block');

        },function(){
            $(this).find('.mov_banner').css('transform','scale(1.0)');
            $(this).find('.background_black2').css('display','none');

        });
        $('.li_img').hover(function(){
            $(this).css('transform','translate(0,-10px)');
        },function(){
            $(this).css('transform','translate(0, 0)');
        });
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
        $(window).scroll(function(){
            if($('.m_gnb').hasClass('m_gnb2')== false){
                if($(document).scrollTop() > 147){
                    $('.m_gnb').addClass('m_gnb2');
                }
            }else{
                if($(document).scrollTop() < 147){
                    $('.m_gnb').removeClass('m_gnb2');
                    
                }
            }
        });
});