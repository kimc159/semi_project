<?php /* Template_ 2.2.8 2018/03/10 04:46:57 C:\phpuser\semi_project\_template\common\topbar.html 000007823 */ ?>
<div id="header">
    <div class="inner">
<?php if($TPL_VAR["member_info"]===FALSE){?>
        <ul class="r_btn" style="text-align: right;">
            <li class="lnb_line"><a href="<?php echo $TPL_VAR["home_url"]?>/login.php" class="r_btn_a">로그인</a></li>
            <li class="lnb_line"><a href="<?php echo $TPL_VAR["home_url"]?>/register.php" class="r_btn_a">회원가입</a></li>
            <li class="lnb_line"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=event" class="r_btn_a">이벤트</a></li>
        </ul>
        <form action="#" name="frm" method="post" class="frm clearfix">
            <div class="search_box pull-left">
                <input type="text" name="inp_search" placeholder="검색어 입력" class="search_txt">
            </div>
            <div class="search_btn">
                <a href="#"><img src="img/btn01.jpg"></a>
            </div>
        </form>
<?php }else{?>
        <ul class="r_btn" style="text-align: right;">
            <p class="nav_text"><?php echo $TPL_VAR["member_info"]["user_name"]?>님</p>
            <li class="lnb_line"><a href="<?php echo $TPL_VAR["home_url"]?>/logout.php" class="r_btn_a">로그아웃</a></li>
            <li class="lnb_line"><a href="<?php echo $TPL_VAR["home_url"]?>/edit.php" class="r_btn_a">회원수정</a></li>
            <li class="lnb_line"><a href="<?php echo $TPL_VAR["home_url"]?>/out.php" class="r_btn_a">회원탈퇴</a></li>
            <li class="lnb_line"><a href="#" class="r_btn_a">고객센터</a></li>
        </ul>
         <form action="#" name="frm" method="post" class="frm clearfix">
            <div class="search_box pull-left">
                <input type="text" name="inp_search" placeholder="검색어 입력" class="search_txt">
            </div>
            <div class="search_btn">
                <a href="#"><img src="img/btn01.jpg"></a>
            </div>
        </form>
<?php }?>
    </div>
    <p class="logo">
        <a href="<?php echo $TPL_VAR["home_url"]?>/allerman.php">
            <img src="img/logo.png" style="width: 200px; height: 40px">
        </a>
    </p>
</div>
 <div class="m_gnb">
        <ul class="nav">
            <li class="gnb_li"><a href="<?php echo $TPL_VAR["home_url"]?>/product_list.php" class="gnb_li_a">PRODUCT
                <ul class="sub_ul">
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/product_list.php" class="sub_li_a">알레르망</a></li>
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/product_list_baby.php" class="sub_li_a">알레르망 베이비</a></li>
                </ul>
            </a></li>
            <li class="gnb_li"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=notice" class="gnb_li_a">COMMUNITY
                <ul class="sub_ul sub_ul2">
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=notice" class="sub_li_a">공지사항</a></li>
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=event" class="sub_li_a">이벤트</a></li>
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=info" class="sub_li_a">생활정보</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">대리점 멤버십</a></li>
                </ul>
            </a></li>
            <li class="gnb_li"><a href="<?php echo $TPL_VAR["home_url"]?>/store.php" class="gnb_li_a">STORE
                <ul class="sub_ul sub_ul3">
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/store.php" class="sub_li_a">매장찾기</a></li>
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=great" class="sub_li_a">우수매장</a></li>
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/store2.php" class="sub_li_a">대리점 개설안내</a></li>
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/store3.php" class="sub_li_a">대리점 개설문의</a></li>
                </ul>
            </a></li>
            <li class="gnb_li"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=qna" class="gnb_li_a">SERVICE CENTER
                <ul class="sub_ul sub_ul4">
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/as_service.php" class="sub_li_a">AS 정책</a></li>
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/faq.php" class="sub_li_a">FAQ</a></li>
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=qna" class="sub_li_a">1:1 고객문의</a></li>
                </ul>
            </a></li>
            <li class="gnb_li"><a href="<?php echo $TPL_VAR["home_url"]?>/company.php" class="gnb_li_a">COMPANY
                <ul class="sub_ul sub_ul5 sub_ul_lg">
                    <li class="sub_li"><a href="#" class="sub_li_a">기업정보</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">브랜드 스토리</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">사이버홍보실</a></li>
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["horm_url"]?>/location.php" class="sub_li_a">찾아오시는 길</a></li>
                </ul>
            </a></li>
        </ul>
    </div>
<hr class="hr1">
<hr class="hr2">
<div class="btn_icon"><i class="fa fa-bars" aria-hidden="true" data-icon="fa-times"></i></div>
<div class="right_nav">

    <div class="right_img">
        <ul>
            <li class="right_slide"><img src="img/pro1.jpg"></li>
        </ul>
        <ul>
            <li class="right_btn2" data-img="img/pro1.jpg"><i class="fa fa-circle-thin" aria-hidden="true"></i></li>
            <li class="right_btn2" style="left: 120px;" data-img="img/pro2.jpg"><i class="fa fa-circle-thin" aria-hidden="true"></i></li>
            <li class="right_btn2" style="left: 140px;" data-img="img/pro3.jpg"><i class="fa fa-circle-thin" aria-hidden="true"></i></li>
        </ul>
    </div>
    <ul class="right_sns clearfix">
        <li class="fl"><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
        <li class="fl"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li class="fl"><a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i></a></li>
    </ul>
    <br>
    <h1>QUICK iCONS</h1>
    <hr>
    <ul class="right_icon clearfix">
        <li class="fl"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>마이페이지</a></li>
        <li class="fl"><a href="#"><i class="fa fa-fighter-jet" aria-hidden="true" style="margin-left: -7px;"></i>배송조회</a></li>
        <li class="fl"><a href="#"><i class="fa fa-heart" aria-hidden="true" style="margin-left: 3px;"></i>개인결제창</a></li>
        <li class="fl"><a href="#"><i class="fa fa-camera" aria-hidden="true" style="margin-left: -7px;"></i>포토후기</a></li>
        <li class="fl"><a href="#"><i class="fa fa-commenting" aria-hidden="true" style="margin-left: -5px;"></i>입고지연</a></li>
        <li class="fl"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=event"><i class="fa fa-calendar-o" aria-hidden="true" style="margin-left: -15px;"></i>이벤트</a></li>
        <li class="fl"><a href="#"><i class="fa fa-file-text-o" aria-hidden="true" style="margin-left: -3px;"></i>상품후기</a></li>
    </ul>
    <br>
    <h1>TODAY VIEW</h1>
    <hr>
</div>