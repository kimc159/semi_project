<?php /* Template_ 2.2.8 2018/01/04 18:05:44 C:\phpuser\semi_project\_template\faq.html 000004861 */ ?>
<!doctype html>
<html>

<head>
<?php $this->print_("head",$TPL_SCP,1);?>

    <link rel="stylesheet" type="text/css" href="css/list.css">
<style>
    .content{
    width: 1100px;
    height: 800px;
    margin: 50px auto;
    }
    .content .content_text{
        width: 1100px;
        height: 70px;
        border-bottom: 1px solid #111;
    }
    .content .content_text >h1{
        font-size: 30px;
        color: #474747;
    }
    .area2{
        width: 300px;
        margin-top: 40px;
    }
    .content .as{
        margin-top: 10px;
        font-size: 20px;
        font-weight: 400;
        color: #474747;
    }
</style>
</head>

<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

    <div class="p_container">
        <div class="p_img">
            <img src="img/sv01.jpg">
        </div>
        <div class="page_path">
            <span class="page_home">
                <img src="img/btn_home.jpg">
            </span>
            <ul class="page_nav">
                <li class="page_nav_li"><a href="#">SERVICE CENTER
                    <ul class="lnb">
                        <li class="lnb_list"><a href="">PRODUCT</a></li>
                        <li class="lnb_list"><a href="">COMMUNITY</a></li>
                        <li class="lnb_list"><a href="">STORE</a></li>
                        <li class="lnb_list"><a href="">SERVICE CENTER</a></li>
                        <li class="lnb_list"><a href="">COMPANY</a></li>
                    </ul>
                </a></li>
                <li class="page_nav_li"><a href="#">
                    A/S정책
                    <ul class="lnb">
                        <li class="lnb_list"><a href=""><?php echo $TPL_VAR["bbs_config"]["name"]?></a></li>
                        <li class="lnb_list"><a href="">뉴스</a></li>
                        <li class="lnb_list"><a href="">이벤트</a></li>
                        <li class="lnb_list"><a href="">생활정보</a></li>
                        <li class="lnb_list"><a href="">대리점 멤버십</a></li>
                    </ul>
                </a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="content_text clearfix">
            <h1 class="fl">FAQ</h1>
            <div class="area2 fr">
                <ul class="clearfix">
                    <li class="fr">> FAQ</li>
                    <li class="fr">&nbsp;> SERVICE CENTER&nbsp;</li>
                    <li class="fr">HOME</li>
                </ul>
            </div>
        </div>
        <div>
            <h1 class="as">상품관련</h1>
            <ul>
                <li>
                    <h4>
                        <a href="#a1">목화워싱스프레드의 세탁방법은?</a>
                    </h4>
                    <p>
                        목화워싱 스프레드는 천연 목화솜을 사용하는 만큼 솜 안에 목화씨가 들어있습니다. <br>
                        그래서 물에 오래 담가 놓으면 연한 이불의 경우에는 목화씨가 물드는 경우가 발생합니다. <br>
                        이것이 곰팡이가 아닌지 문의 하시는 분들 계신데 천연 목화솜을 사용한다는 증거입니다. <br>
                        인체에는 무해 합니다. 그러나 외관상으로는 보기 좋지는 않기 때문에 물에 오래 담가 놓지 마시고 세탁을 최대한 빠르게 자연건조가 될 수 있도록 진행해주시면<br>
                        목화씨의 물드는 현상을 줄여 사용하실 수 있습니다. <br>
                        옅은 색의 이불일수록 더욱 눈에 띄므로 이런현상이 걱정되시는 분들은 진한 색상의 목화워싱스프레드를 추천드립니다.<br>
                    </p>
                </li>
            </ul>
        </div>
        
    </div>
<?php $this->print_("footer",$TPL_SCP,1);?>

<script>
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
    });
</script>
</body>

</html>