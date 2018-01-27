<?php /* Template_ 2.2.8 2017/12/07 11:48:49 C:\phpuser\semi_project\_template\common\topbar.html 000005147 */ ?>
<div id="header">
    <div class="inner">
<?php if($TPL_VAR["member_info"]===FALSE){?>
        <ul class="r_btn" style="text-align: right;">
            <li class="lnb_line"><a href="<?php echo $TPL_VAR["home_url"]?>/login.php" class="r_btn_a">로그인</a></li>
            <li class="lnb_line"><a href="<?php echo $TPL_VAR["home_url"]?>/register.php" class="r_btn_a">회원가입</a></li>
            <li class="lnb_line"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=qna" class="r_btn_a">고객센터</a></li>
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
                    <li class="sub_li"><a href="#" class="sub_li_a">알레르망</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">알레르망 베이비</a></li>
                </ul>
            </a></li>
            <li class="gnb_li"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=notice" class="gnb_li_a">COMMUNITY
                <ul class="sub_ul sub_ul2">
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=notice" class="sub_li_a">공지사항</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">이벤트</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">생활정보</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">대리점 멤버십</a></li>
                </ul>
            </a></li>
            <li class="gnb_li"><a href="<?php echo $TPL_VAR["home_url"]?>/store.php" class="gnb_li_a">STORE
                <ul class="sub_ul sub_ul3">
                    <li class="sub_li"><a href="#" class="sub_li_a">매장찾기</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">우수매장</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">대리점 개설안내</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">대리점 개설문의</a></li>
                </ul>
            </a></li>
            <li class="gnb_li"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=qna" class="gnb_li_a">SERVICE CENTER
                <ul class="sub_ul sub_ul4">
                    <li class="sub_li"><a href="#" class="sub_li_a">AS 정책</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">FAQ</a></li>
                    <li class="sub_li"><a href="<?php echo $TPL_VAR["home_url"]?>/list.php?bbs_type=qna" class="sub_li_a">1:1 고객문의</a></li>
                </ul>
            </a></li>
            <li class="gnb_li"><a href="<?php echo $TPL_VAR["home_url"]?>/company.php" class="gnb_li_a">COMPANY
                <ul class="sub_ul sub_ul5 sub_ul_lg">
                    <li class="sub_li"><a href="#" class="sub_li_a">기업정보</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">브랜드 스토리</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">사이버홍보실</a></li>
                    <li class="sub_li"><a href="#" class="sub_li_a">찾아오시는 길</a></li>
                </ul>
            </a></li>
        </ul>
    </div>
<hr class="hr1">
<hr class="hr2">