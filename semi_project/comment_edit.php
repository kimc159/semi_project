<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once('bbs_init.php');

	$commnet_id = get("comment_id", false);
	if(!$comment_id){
		redirect(false, '덧글 일련번호가 없습니다.');
	}

	$sql = "SELECT id, writer_name, email, content, member_id FROM bbs_comment WHERE id=%d";
	$result = db_query($sql, array($comment_id));

	if($result === false){
		redirect(false, "덧글 조회에 실패했습니다.");
	}
	if(count($result) < 1){
		redirect(false, "조회된 덧글이 없습니다.");
	}

	$tpl->assign("comment", $result[0]);
	$tpl->define('body','comment_edit.html');
	$tpl->print_('body');
?>