<?php /* Template_ 2.2.8 2017/11/22 12:23:54 C:\phpuser\source\_template\member\edit.html 000004195 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

</head>
<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

<div class="container">
	<div class="page-header">
		<h1>회원정보 수정</h1>
	</div>

	<!-- 정보 수정 폼 시작 -->
	<form class="form-horizontal" name="myform" method="post" action="edit_ok.php">
	<!-- 아이디 -->
	<div class="form-group">
		<label class="col-md-2">아이디</label>
		<div class="col-md-10">
			<p class="form-control-static"><?php echo $TPL_VAR["member_info"]["user_id"]?></p>
		</div>
	</div>
	<!-- 현재 비밀번호 -->
	<div class="form-group">
		<label for="user_pw" class="col-md-2">현재 비밀번호</label>
		<div class="col-md-10">
			<input type="password" name="user_pw" id="user_pw" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="new_user_pw" class="col-md-2">변경할 비밀번호</label>
		<div class="col-md-10">
			<input type="password" name="new_user_pw" id="new_user_pw" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="new_user_pw_re" class="col-md-2">비밀번호 확인</label>
		<div class="col-md-10">
			<input type="password" name="new_user_pw_re" id="new_user_pw_re" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="user_name" class="col-md-2">이름</label>
		<div class="col-md-10">
			<input type="text" name="user_name" id="user_name" class="form-control" value="<?php echo $TPL_VAR["member_info"]["user_name"]?>">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-2">이메일</label>
		<div class="col-md-10">
			<input type="text" name="email" id="email" class="form-control" value="<?php echo $TPL_VAR["member_info"]["email"]?>">
		</div>
	</div>
	<div class="form-group">
		<label for="tel" class="col-md-2">연락처</label>
		<div class="col-md-10">
			<input type="text" name="tel" id="tel" class="form-control" value="<?php echo $TPL_VAR["member_info"]["tel"]?>">
		</div>
	</div>
	<!--우편번호-->
	<div class="form-group">
		<label for="postcode" class="col-md-2">우편번호</label>
		<div class="col-md-10">
			<div class="clearfix">
				<div class="input-group pull-left" style="width:200px; margin-right: 10px">
					<input type="number" name="postcode" id="postcode" class="form-control" value="<?php echo $TPL_VAR["member_info"]["postcode"]?>">
				</div>
				<!-- 클릭 시, Javascript 함수 호충 : openDaumPostcode() -->
				<input type="button" value="우편번호 찾기" class="btn btn-warning" onclick="daumPostCode()">
			</div>
		</div>
	</div>
	<!-- 주소 -->
	<div class="form-group">
		<label for="addr1" class="col-md-2">주소</label>
		<div class="col-md-10">
			<input type="text" name="addr1" id="addr1" class="form-control" value="<?php echo $TPL_VAR["member_info"]["addr1"]?>">
		</div>
	</div>
	<!-- 상세주소 -->
	<div class="form-group">
		<label for="addr2" class="col-md-2">상세주소</label>
		<div class="col-md-10">
			<input type="text" name="addr2" id="addr2" class="form-control" value="<?php echo $TPL_VAR["member_info"]["addr2"]?>">
		</div>
	</div>
	<!-- 가입일시 -->
	<div class="form-group">
		<label class="col-md-2">가입일시</label>
		<div class="col-md-10">
			<p class="form-control-static"><?php echo $TPL_VAR["member_info"]["reg_date"]?></p>
		</div>
	</div>
	<!-- 최근 변경 일시 -->
	<div class="form-group">
		<label class="col-md-2">최근 변경 일시</label>
		<div class="col-md-10">
			<p class="form-control-static"><?php echo $TPL_VAR["member_info"]["edit_date"]?></p>
		</div>
	</div>
	<!-- 버튼들-->
	<div class="form-group text-center">
		<button type="submit" class="btn btn-primary">변경하기</button>
		<button type="reset" class="btn btn-danger">다시작성</button>
		<a href="../index.php" class="btn btn-info">돌아가기</a>
	</div>
	</form>
	<!-- 정보 수정 폼 끝 -->
</div>
<?php $this->print_("footer",$TPL_SCP,1);?>

</body>
</html>