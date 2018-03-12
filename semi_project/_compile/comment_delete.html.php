<?php /* Template_ 2.2.8 2018/01/22 12:34:17 C:\phpuser\semi_project\_template\comment_delete.html 000003064 */ ?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title>덧글 삭제하기</title>
<?php $this->print_("head",$TPL_SCP,1);?>

	<style type="text/css">
		.modal-header{
			width: 100%;
			text-align: center;
			font-size: 25px;
		}
		.modal-body{
			width: 100%;
			text-align: center;
			font-size: 13px;
			margin-top: 50px;
		}
		.modal-body .form-group input{
			width: 250px;
			height: 30px;
		}
		.modal-body .form-group{
			margin-bottom: 50px;
		}
		.modal-footer{
			width: 100%;
			text-align: center;
		}
		.modal-footer button{
		    display: inline-block;
		    width: 70px;
		    height: 40px;
		    background-color: #474747;
		    color: #fff;
		    text-align: center;
		    line-height: 35px;
		    border-radius: 5px;
		    font-size: 15px;
		}
	</style>
</head>
<body>
<form id="comment_delete_form" method="post" action="<?php echo $TPL_VAR["home_url"]?>/comment_delete_ok.php">
	<!-- 삭제할 덧글에 대한 상태유지 -->
	<input type="hidden" name="bbs_type" value="<?php echo $TPL_VAR["bbs_config"]["type"]?>" />
	<input type="hidden" name="comment_id" value="<?php echo $TPL_VAR["comment_id"]?>" />
	<!-- 모달창의 제목영역 -->
	<div class="modal-header">
		<h4 class="modal-title">덧글 삭제</h4>
	</div>
	<!-- 모달창의 본문영역 -->
	<div class="modal-body">
<?php if($TPL_VAR["is_mine"]==true){?>
			<!-- 자신의 글에 대한 삭제 -->
			<p>정말 이 덧글을 삭제하시겠습니까?</p>
<?php }else{?>
			<!-- 자신의 글이 아닌 경우 -->
			<p>삭제하시려면 비밀번호를 입력하세요</p>
			<div class="form-group">
				<input type="password" name="writer_pw" id="writer_pw" class="form-control"/>
			</div>
<?php }?>
	</div>
	<!-- 모달창의 하단 버튼 영역 -->
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">취소</button>
		<button type="submit" class="btn btn-danger" id="comment_delete">삭제</button>
	</div>
</form>
<script type="text/javascript">
$(function(){
	$("#comment_delete_form").submit(function(e){
		e.preventDefault();
		console.log("delete in");
		$.ajax({
            type: 'post',
            dataType: 'json',
            url: '<?php echo $TPL_VAR["home_url"]?>/comment_delete_ok.php',
            data: $("#comment_delete_form").serialize(),
 
            success: function (json) {
            	console.log("json : "+json);
            	var comment_id = json.comment_id;
                $("#comment_"+comment_id).remove();
                alert("삭제되었습니다.");
               	window.close();
            },
 
            error: function(request,status,error){
              console.log('failed');
             alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
            }
        })
	});
});
</script>
</body>
</html>