<?php /* Template_ 2.2.8 2018/01/04 17:55:12 C:\phpuser\semi_project\_template\as_service.html 000006775 */ ?>
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
        text-align: center;
        margin-top: 10px;
        font-size: 30px;
        font-weight: 400;
        color: #474747;
    }
    .content .pco{
        text-align: center;
        margin: 30px auto;
        font-size: 15px;
        color: #6f757a;
    }
    .call{
        margin-top: 20px;
    }
    .call div{
        width: 50px;
        height: 50px;
        display: inline-block;
        vertical-align: top;
    }
    .call div img{
        width: 50px;
        height: 50px;
    }
    .call > span{
        vertical-align: top;
        display: inline-block;
        width: 100px;
        height: 50px;
        line-height: 50px;
        font-size: 15px;
    }
    th{
        width: 100px;
        text-align: center;
        background-color: #333;
        color: #fff;
    }
    tr:nth-child(1) > td:nth-child(1),tr:nth-child(3) > td:nth-child(1){
        text-align: center;
    }
    tr:nth-child(1) > td:nth-child(1), tr:nth-child(3) > td:nth-child(1){
        background-color: #fbfbfb;
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
            <h1 class="fl">A/S 정책</h1>
            <div class="area2 fr">
                <ul class="clearfix">
                    <li class="fr">> A/S 정책</li>
                    <li class="fr">&nbsp;> SERVICE CENTER&nbsp;</li>
                    <li class="fr">HOME</li>
                </ul>
            </div>
        </div>
        <div>
            <h1 class="as">-A/S 상담-</h1>
            <p class="pco">자세한 사항은 알레르망 1:1 고객문의 부탁드립니다.<br> 
구입 판매점을 통해 문의하시면, 보다 빠르게 답변 받으실 수 있습니다.</p>
        </div>
        <table style="width:100%">
            <thead>
                <tr>
                    <th>구분</th>
                    <th>유상 A/S</th> 
                    <th>무상 A/S</th>
                </tr>
            </thead>
            <tody>
                <tr>
                    <td rowspan="2">누비</td>
                    <td>상품 전체 또는 부분 1YARD이상 원단 소요, 덧댐 A/S</td> 
                    <td></td>
                </tr>
                <tr>
                    <td>이불커버 → 차렵으로 누빔 처리 A/S</td> 
                    <td>누비가 터진 부분을 손누비 A/S</td>
                </tr>
                <tr>
                    <td rowspan="5">봉제</td>
                    <td>사면이 미어져서 랍바 A/S 사이즈 줄임/형질 변경(침대커버 → 매트리스 커버)</td>
                    <td>간단한 봉제 A/S지퍼 슬라이드 파손교체 A/S</td>
                </tr>
                <tr>
                    <td>매트리스커버 후릴 교체 / 후릴 높이 A/S</td>
                    <td></td>
                </tr>
                <tr>
                    <td>고객과실로 인한 원단손상 교체 A/S</td>
                    <td></td>
                </tr>
                <tr>
                    <td>앞, 뒷지 교체, 밴드, 한실베개닛, 지퍼 교체</td>
                    <td></td>
                </tr>
                <tr>
                    <td>한실 지퍼식으로 호칭 교환</td>
                    <td></td>
                </tr>
            </tody>
        </table>
        <div class="call">
            <div><img src="img/as_con.gif"></div>
            <span style="color: #135829">A/S상담전화 :</span><span>02-2146-0960</span>
        </div>
    </div>
<?php $this->print_("footer",$TPL_SCP,1);?>

<script>
    $(function(){
        $(".pagination > li").click(function(){ 
            $(this).addClass(".active");
            $(this).not(this).removeClass('.active');
        });
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