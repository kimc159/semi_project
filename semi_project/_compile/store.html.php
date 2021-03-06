<?php /* Template_ 2.2.8 2018/01/02 06:51:36 C:\phpuser\semi_project\_template\store.html 000003898 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

    <link rel="stylesheet" type="text/css" href="css/store.css?cs">
<style type="text/css">
.find_store{
    width: 1100px;
    height: 100px;
    margin: 50px auto;
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
                <li class="page_nav_li"><a href="#">STORE
                    <ul class="lnb">
                        <li class="lnb_list"><a href="">PRODUCT</a></li>
                        <li class="lnb_list"><a href="">COMMUNITY</a></li>
                        <li class="lnb_list"><a href="">STORE</a></li>
                        <li class="lnb_list"><a href="">SERVICE CENTER</a></li>
                        <li class="lnb_list"><a href="">COMPANY</a></li>
                    </ul>
                </a></li>
                <li class="page_nav_li"><a href="#">매장찾기
                    <ul class="lnb">
                        <li class="lnb_list"><a href="">매장찾기</a></li>
                        <li class="lnb_list"><a href="">우수매장</a></li>
                        <li class="lnb_list"><a href="">대리점 개설안내</a></li>
                        <li class="lnb_list"><a href="">대리점 개설문의</a></li>
                    </ul>
                </a></li>
            </ul>
        </div>
    </div>
    <div class="find_store">
    	<h1>매장찾기</h1>
    	<hr>
    </div>
    <div class="search_wrap">
		<div class="search clearfix">
			<div class="search_left pull-left">
				<h2>매장별 검색</h2>
				<p>매장명 또는 주소지의 동(읍/면/리)를 입력해주세요.</p>
				<input type="text" name="store"><a href="#"><i class="fa fa-search search_i" aria-hidden="true"></i><a>
			</div>
			<div class="search_right pull-left">
				<h2>키워드 검색</h2>
				<p>키워드로 더 자세한 매장정보를 확인하실 수 있습니다.</p>
				<button type="button">가까운 매장 찾기</button>
				<button type="button">필로와이즈 매장찾기</button>
			</div>
		</div>
    </div>
    <div class="title_search">
    	<p class="store_title1">지역별검색</p>
    	<p class="store_title2">원하는 지역을 클릭후 지역별 매장정보를 확인해 주세요.</p>
    	<div class="pt clearfix">
    		<p class="pull-left"><a href="#" style="margin-top: -60px;">전체</a></p>
    		<p class="pull-left"><a href="#">서울</a></p>
    		<p class="pull-left"><a href="#">인천</a></p>
    		<p class="pull-left"><a href="#">경기</a></p>
    		<p class="pull-left"><a href="#">대전</a></p>
    		<p class="pull-left"><a href="#">대구</a></p>
    		<p class="pull-left"><a href="#">광주</a></p>
    		<p class="pull-left"><a href="#">부산</a></p>
    		<p class="pull-left"><a href="#">울산</a></p>
    		<p class="pull-left"><a href="#">강원</a></p>
    		<p class="pull-left"><a href="#">경남</a></p>
    		<p class="pull-left"><a href="#">경북</a></p>
    		<p class="pull-left"><a href="#">전남</a></p>
    		<p class="pull-left"><a href="#">전북</a></p>
    		<p class="pull-left"><a href="#">충남</a></p>
    		<p class="pull-left"><a href="#">충북</a></p>
    		<p class="pull-left"><a href="#">제주</a></p>
    		<p class="pull-left"><a href="#">세종</a></p>
    	</div>
    </div>
<?php $this->print_("footer",$TPL_SCP,1);?>

    <script src="js/store.js?js"></script>
</body>
</html>