<?php /* Template_ 2.2.8 2018/01/04 15:15:30 C:\phpuser\semi_project\_template\out.html 000000839 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

	<link rel="stylesheet" type="text/css" href="css/password_reset.css">
</head>
<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

	<div class="pass_re">
		<div class="page_header">
			<h1>회원 탈퇴</h1>
		</div>
		<form name="myform" method="post" action="out_ok.php" class="myform">
			<div class="email_ck">
				<label for="password">비밀번호 확인</label>
				<input type="password" name="password" id="password">
			</div>
			<div class="sub_btn">
				<button type="submit">확인</button>
				<button type="reset">취소</button>
			</div>
		</form>
	</div>
<?php $this->print_("footer",$TPL_SCP,1);?>

</body>
</html>