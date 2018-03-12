<?php /* Template_ 2.2.8 2017/12/27 10:40:37 C:\phpuser\semi_project\_template\bbs_edit.html 000003420 */ 
$TPL_file_list_1=empty($TPL_VAR["file_list"])||!is_array($TPL_VAR["file_list"])?0:count($TPL_VAR["file_list"]);?>
<!DOCTYPE html>
<html>
<head>
<?php $this->print_("head",$TPL_SCP,1);?>

	<link rel="stylesheet" type="text/css" href="css/bbs_edit.css?css">
</head>
<body>
<?php $this->print_("topbar",$TPL_SCP,1);?>

	<div class="edit_wrap">
		<h1>글 수정하기</h1>
		<form class="bbs_edit_frm" method="post" action="bbs_edit_ok.php" enctype="multipart/form-data">
			<input type="hidden" name="document_id" value="<?php echo $TPL_VAR["document"][ 0]["id"]?>">
			<input type="hidden" name="bbs_type" value="<?php echo $TPL_VAR["bbs_config"]["type"]?>">

<?php if($TPL_VAR["is_mine"]===false){?>
			<div class="form_container clearfix">
				<label for="writer_name" class="pull-left">작성자</label>
				<div class="pull-left">
					<input type="text" name="writer_name" id="writer_name" value="<?php echo $TPL_VAR["document"][ 0]["writer_name"]?>">
				</div>
			</div>
			<div class="form_container clearfix">
				<label for="writer_pw" class="pull-left">비밀번호</label>
				<div class="pull-left">
					<input type="password" name="writer_pw" id="writer_pw">
					<p class="p_content">
						글 작성시 설정하신 비밀번호를 입력하세요.
					</p>
				</div>
			</div>
			<div class="form_container clearfix">
				<label for="email" class="pull-left">이메일</label>
				<div class="pull-left">
					<input type="email" name="email" id="email" value="<?php echo $TPL_VAR["document"][ 0]["email"]?>">
				</div>
			</div>
<?php }?>
			<div class="form_container clearfix">
				<label for="subject" class="pull-left">제목</label>
				<div class="pull-left">
					<input type="text" name="subject" id="subject" value="<?php echo $TPL_VAR["document"][ 0]["subject"]?>">
				</div>
			</div>
			<div class="form_container clearfix">
				<label for="content" class="pull-left">내용</label>
				<div class="pull-left">
					<textarea name="content" id="content" value="<?php echo $TPL_VAR["document"][ 0]["content"]?>" style="width: 700px;height: 300px;"></textarea>
				</div>
			</div>
			<div class="form_container clearfix">
				<label for="file" class="pull-left">파일첨부</label>
				<div class="pull-left">
					<input type="file" name="file[]" id="file" multiple style="border: 0;">
				</div> 
			</div>
<?php if($TPL_VAR["file_list"]!==FALSE){?>
			<!-- 파일삭제 -->
			<div class="clearfix">
				<label class="pull-left">파일삭제</label>
				<div class="pull-left">
					<div style="height: auto; padding-top: 0px">
<?php if($TPL_file_list_1){foreach($TPL_VAR["file_list"] as $TPL_V1){?>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="file_delete[]" value="<?php echo $TPL_V1["id"]?>"><?php echo $TPL_V1["file_name"]?>삭제하기
							</label>
						</div>
<?php }}?>
					</div>
				</div>
			</div>
<?php }?>
			<div class="form_container">
				<div class="clearfix btn_wrap">
					<button type="submit" class="pull-left">저장하기</button>
					<button type="button" class="pull-left" onclick="history.back();">작성취소</button>
				</div>
			</div>
		</form>
	</div>
<?php $this->print_("footer",$TPL_SCP,1);?>


</body>
</html>