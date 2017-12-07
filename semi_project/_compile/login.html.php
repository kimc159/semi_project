<?php /* Template_ 2.2.8 2017/12/07 17:06:56 C:\phpuser\semi_project\_template\login.html 000002873 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

	<link rel="stylesheet" type="text/css" href="css/login.css">
<style type="text/css">
	.find_id> a, .find_pw>a{
		color: #111;
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
    <div class="login_text">
    	<p>로그인</p>
    	<hr>
    	<p>로그인</p>
    	<p>알레르망, 홈페이지에 오신 것을 환영합니다.</p>
    </div>
	<form action="<?php echo $TPL_VAR["home_url"]?>/login_ok.php" method="post">
		<div class="login">
			<h3>MEMBER LOGIN</h3>
			<fieldset class="login_wrap">
				<legend>회원 로그인</legend>
				<div class="id">
					<span>ID</span>
					<input type="text" name="member_id" placeholder="아이디">
				</div>
				<div class="pw">
					<span>pw</span>
					<input type="password" name="member_pw" placeholder="비밀번호">
				</div>
				<button type="submit" class="login_btn">LOGIN</button>
				<ul class="find_wrap">
					<li class="find_id"><a href="#">아이디찾기</a></li>
					<li class="find_pw"><a href="<?php echo $TPL_VAR["home_url"]?>/password_reset.php">비밀번호찾기</a></li>
				</ul>
				<p class="link">
					<a class="join_btn" href="<?php echo $TPL_VAR["home_url"]?>/register.php">JOIN</a>
				</p>
			</fieldset>
		</div>
	</form>
<?php $this->print_("footer",$TPL_SCP,1);?>

</body>
</html>