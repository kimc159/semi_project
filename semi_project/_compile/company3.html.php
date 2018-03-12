<?php /* Template_ 2.2.8 2017/12/27 15:41:25 C:\phpuser\semi_project\_template\company3.html 000002646 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

    <link rel="stylesheet" type="text/css" href="css/company.css">
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
                <li class="page_nav_li"><a href="#">COMPANY
                    <ul class="lnb">
                        <li class="lnb_list"><a href="">PRODUCT</a></li>
                        <li class="lnb_list"><a href="">COMMUNITY</a></li>
                        <li class="lnb_list"><a href="">STORE</a></li>
                        <li class="lnb_list"><a href="">SERVICE CENTER</a></li>
                        <li class="lnb_list"><a href="">COMPANY</a></li>
                    </ul>
                </a></li>
                <li class="page_nav_li"><a href="#">기업정보
                    <ul class="lnb">
                        <li class="lnb_list"><a href="">기업정보</a></li>
                        <li class="lnb_list"><a href="">브랜드스토리</a></li>
                        <li class="lnb_list"><a href="">사이버 홍보실</a></li>
                        <li class="lnb_list"><a href="">찾아오시는길</a></li>
                    </ul>
                </a></li>
            </ul>
        </div>
    </div>
    <div class="company_wrap" style="height: 1100px;">
    	<div class="company_info">
    		<h1>기업정보</h1>
    		<hr>
    	</div>
    	<div class="company_inner">
    		<p>-피부를 생각하는 침구과학</p>
    		<p>우리가 원하는곳, 우리가 가고싶은 곳 세상에서 가장 쾌적한 곳은 알레르망입니다.</p>
    		<div class="inner_tab clearfix">
    			<p class="pull-left"><a href="<?php echo $TPL_VAR["home_url"]?>/company.php">회사소개</a></p>
    			<p class="pull-left"><a href="<?php echo $TPL_VAR["home_url"]?>/company2.php">연혁</a></p>
    			<p class="pull-left"><a href="<?php echo $TPL_VAR["home_url"]?>/company3.php">BI소개</a></p>
    		</div>
    		<p >
    			<img src="img/company3.jpg" alt="BI소개"
                style="margin-left: -30px;">
    		</p>
    	</div>
    </div>
<?php $this->print_("footer",$TPL_SCP,1);?>

    <script src="js/company.js"></script>
</body>
</html>