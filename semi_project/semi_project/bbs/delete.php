<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'bbs_init.php';

	$document_id = get('document_id', FALSE);
	if(!$document_id){
		redirect(FALSE, '글 번호가 지정되지 않았습니다.');
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
	$tpl->define('body', 'bbs/delete.html');
	$tpl->print_('body');
?>