<?php /* Template_ 2.2.8 2017/11/29 17:47:07 C:\phpuser\source\_template\bbs\delete.html 000001393 */ ?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

</head>

<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

	<div class="container">
		<h1><small>글 삭제하기</small></h1>

		<div style="width: 300px; margin: 50px auto;">
<?php if($TPL_VAR["is_mine"]===true){?>
			<p>정말 이 게시물을 삭제하시겟습니까?</p>
<?php }else{?>
			<p>글 작성시 설정한 비밀번호를 입력해야 합니다.</p>
<?php }?>
			<form name="myform" method="post" action="delete_ok.php">
				<input type="hidden" name="document_id" value="<?php echo $TPL_VAR["document_id"]?>">
				<input type="hidden" name="bbs_type" value="<?php echo $TPL_VAR["bbs_config"]["type"]?>">
				<fieldset>
<?php if($TPL_VAR["is_mine"]===false){?>
					<div class="form-group">
						<label for="pwd">비밀번호</label>
						<input type="password" name="pwd" id="pwd" class="form-control">
					</div>
<?php }else{?>
					<div class="form-group">
						<button type="submit" class="btn btn-danger btn-block">삭제하기</button>
						<button type="reset" class="btn btn-primary btn-block">삭제취소</button>
					</div>
<?php }?>
				</fieldset>
			</form>
		</div>
	</div>
<?php $this->print_("footer",$TPL_SCP,1);?>

</body>
</html>