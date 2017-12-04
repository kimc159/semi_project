<?php /* Template_ 2.2.8 2017/12/04 16:58:29 C:\phpuser\semi_project\_template\login.html 000001265 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

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