<?php /* Template_ 2.2.8 2017/11/22 11:44:10 C:\phpuser\source\_template\member\password_reset.html 000000929 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

</head>
<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

<div class="container">
	<div class="page-header">
		<h1>비밀번호 재설정</h1>
	</div>
	<!-- 이메일 입력 폼 시작 -->
	<form name="myform" method="post" action="password_reset_ok.php" class="form-inline">
	<div class="form-group">
		<label for="email">가입시 입력한 이메일</label>
		<input type="email" name="email" id="email" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">확인</button>
		<button type="reset" class="btn btn-danger">취소</button>
	</div>
	</form>
	<!-- 이메일 입력 폼 끝 -->
</div>
<?php $this->print_("footer",$TPL_SCP,1);?>

</body>
</html>