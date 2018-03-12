<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once('inc/bbs_init.php');

	$comment_id = get('comment_id', false);
	
	if(!$comment_id){
		redirect(false, '덧글 일련번호가 없습니다.');
	}

	$is_mine = false;
	if($member_info !== false){
		$sql = "SELECT count(id) AS `cnt` FROM bbs_comment WHERE id=%d AND member_id=%d";
		$input = array($comment_id, $member_info['id']);
		$result = db_query($sql, $input);

		if($result !== false){
			if($result[0]['cnt'] >0){
				$is_mine = TRUE;
			}
		}
	}
	$tpl->assign('is_mine', $is_mine);
	$tpl->assign('comment_id', $comment_id);
	$tpl->define('body', 'comment_delete.html');
	$tpl->print_('body');
?> 