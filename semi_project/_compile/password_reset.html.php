<?php /* Template_ 2.2.8 2017/12/04 18:07:46 C:\phpuser\semi_project\_template\password_reset.html 000000868 */ ?>
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
			<h1>비밀번호 재설정</h1>
		</div>
		<form name="myform" method="post" action="password_reset_ok.php" class="myform">
			<div class="email_ck">
				<label for="email">가입시 입력한 이메일</label>
				<input type="email" name="email" id="email">
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