<?php /* Template_ 2.2.8 2017/12/11 12:10:48 C:\phpuser\semi_project\_template\delete.html 000001376 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

<link rel="stylesheet" type="text/css" href="css/delete.css">
</head>
<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

	<div class="delete_wrap">
		<h1>글 삭제하기</h1>
		<div style="width: 400px; margin: 50px auto;">
<?php if($TPL_VAR["is_mine"]===true){?>
			<p>정말 이 게시물을  삭제하시겠습니까?</p>
<?php }else{?>
			<p>글 작성시 설정한 비밀번호를 입력해야 합니다.</p>
<?php }?>
			<form name="delete_frm" method="post" class="delete_frm" action="delete_ok.php">
				<input type="hidden" name="document_id" value="<?php echo $TPL_VAR["document_id"]?>">
				<input type="hidden" name="bbs_type" value="<?php echo $TPL_VAR["bbs_config"]["type"]?>">
				<fieldset class="delte_fs">
<?php if($TPL_VAR["is_mine"]===false){?>
					<div class="pwd_conf">
						<label for="pwd">비밀번호</label>
						<input type="password" name="pwd" id="pwd">
					</div>
<?php }?>
					<div class="delete_btn">
						<button type="submit">삭제하기</button>
						<button type="reset">삭제취소</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
<?php $this->print_("footer",$TPL_SCP,1);?>

</body>
</html>