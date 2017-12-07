<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/bbs_init.php';

	$document_id = get('document_id', false);
	if(!$document_id){
		redirect(false, '글 번호가 지정되지 않았습니다.');
	}

	$is_mine = FALSE;
	if($member_info !== FALSE){
		$sql = "SELECT count(id) AS `cnt` FROM bbs_document WHERE id=%d AND member_id=%d";
		$input = array($document_id, $member_info['id']);
		$result = db_query($sql, $input);

		if($result !== FALSE){
			if($result[0]['cnt'] > 0){
				$is_mine = TRUE;
			}
		}
	}
	$tpl->assign('is_mine', $is_mine);
	$tpl->assign('document_id', $document_id);
	$tpl->define('body', 'delete.html');

	$tpl->print_('body');
?>