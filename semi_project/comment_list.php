<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once('inc/bbs_init.php');

	$document_id = get('document_id', false);
	if(!$document_id){
		print_rest_api("게시물 일련번호가 없습니다.", false);
	}

	$sql = "SELECT id, writer_name, email, content, reg_date FROM bbs_comment WHERE bbs_document_id=%d ORDER BY id ASC";
	$result = db_query($sql, array($document_id));

	if($result === FALSE){
		print_rest_api("게시물 조회에 실패했습니다.", false);
	}
	
	for($i=0; $i<count($result); $i++){
		$result[$i]['content'] = preg_replace("/\r|\n/", "<br/>", $result[$i]['content']);
	}

	$item = array('item' => $result);
	print_rest_api('OK', $item);
?>