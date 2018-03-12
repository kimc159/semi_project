$(function() {
    var click = '';
    var num= 0;
    setInterval(function(){
        var img = ['img/pro1.jpg','img/pro2.jpg','img/pro3.jpg'];
        num = (num + 1)%3;
        $('.right_slide').find('img').attr('src', img[num]);
    }, 2000);
    /* 헤더 */
    $('.right_nav').height($(document).height());
    $('.gnb_li').mouseenter(function() { 
        $(this).find(".sub_ul").stop().slideDown(300);
    });
     $('.gnb_li').mouseleave(function() { 
        $(this).find(".sub_ul").stop().slideUp(300);
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

    /*오른쪽 메뉴바*/
    $('.btn_icon').click(function(){
        if(click == ''){
            $('.right_nav').css("right","0px");
            $('.btn_icon').css({'right':'260px'});
            $(this).find('i').toggleClass('fa-bars fa-times');
            click = 'click';
        }else{
            console.log("btn_icon click Out");
            $('.right_nav').css("right","-260px");
            $('.btn_icon').css('right','0px');
            $(this).find('i').toggleClass('fa-bars fa-times');
            click = '';
        }
    });
    $('.sub_li').hover(function(){
        console.log("sub_li hover");
        $(this).css('backgroundColor','#4974bc');
        $(this).find('a').css('color','#fff');
    },function(){
        $(this).css('backgroundColor','#fff');
        $(this).find('a').css('color','#000');
    });
    $('.right_icon>li').hover(function(){
        console.log('right_icon in');
        $(this).css('backgroundColor','#4974bc');
        $(this).find('a').css('color','#fff');
    },function(){
        $(this).css('backgroundColor','#fff');
        $(this).find('a').css('color','#777');
    });
    $('.right_sns>li>a').hover(function(){
        console.log("sns_in");
        $(this).find('i').css('color','#4974bc');
    },function(){
        $(this).find('i').css('color','#ccc');
    });
    $('.right_btn2').hover(function(){
        $(this).find('i').removeClass('fa-circle-thin');
        $(this).find('i').addClass('fa-circle');
        var img = $(this).data('img');
        $('.right_slide').find('img').attr('src', img);
    }, function(){
        $(this).find('i').removeClass('fa-circle');
        $(this).find('i').addClass('fa-circle-thin');
    });
});