<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once('inc/bbs_init.php');

	$document_id = post('document_id', false);

	$writer_name = post('writer_name', false);
	$writer_pw = post('writer_pw', false);
	$email = post('email', false);
	$content = post('content', false);

	$member_id = 0;

	if($member_info !== false){
		$member_id = $member_info['id'];
		$writer_name = $member_info['user_name'];
		$writer_pw = $member_info['user_pw'];
		$email = $member_info['email'];
	}
	if(!$document_id){print_rest_api('게시물 일련번호값이 없습니다.', false);}
	if(!$writer_name){print_rest_api('작성자 이름을 말하세요.', false);}
	if(!$writer_pw){print_rest_api('비밀번호를 입력하세요.', false);}
	if(!$email){print_rest_api('이메일을 입력하세요', false);}
	if(!$content){print_rest_api('덧글내용을 입력하세요', false);}

	$sql = '';
	$input = false;

	if($member_info !== false){
		$sql = "INSERT INTO bbs_comment(writer_name, writer_pw, email, content, reg_date, edit_date, bbs_document_id, member_id) VALUES ('%s', '%s', '%s', '%s', now(), now(), %d, %d)";
		$input = array($writer_name, $writer_pw, $email, $content, $document_id, $member_id);
	}else{
		$sql = "INSERT INTO bbs_comment(writer_name, writer_pw, email, content,reg_date, edit_date, bbs_document_id, member_id) VALUES ('%s', password('%s'), '%s', '%s', now(), now(), %d, null)";
		$input = array($writer_name, $writer_pw, $email, $content, $document_id);
	}
	$comment_id = db_query($sql, $input);

	if($comment_id === false){
		print_rest_api('덧글 저장에 실패했습니다.', false);
	}
	$sql = "SELECT id, writer_name, email, content, reg_date, edit_date, bbs_document_id from bbs_comment where id =%d";
	$result = db_query($sql, array($comment_id));

	if($result === false){
		print_rest_api('덧글 조회에 실패했습니다.', false);
	}
	if(count($result) < 1){
		print_rest_api('조회된 덧글이 없습니다.', false);		
	}


	$item = array('item'=>$result[0]);
	print_rest_api('OK', $item);	
?>