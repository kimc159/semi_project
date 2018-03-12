<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once("inc/bbs_init.php");

	$bbs_type = post('bbs_type', false);
	$comment_id = post('comment_id', false);
	$writer_name = post('writer_name', false);
	$writer_edit_pw = post('writer_edit_pw', false);
	$email = post('email', false);
	$content = post('content', false);

	$is_mine = false;
	if($member_info !== false){
		$sql = "SELECT count(id) AS `cnt` FROM bbs_comment WHERE id=%d AND member_id=%d";
		$input = array($comment_id, $member_info['id']);

		if($result !== false){
			if($result[0]['cnt'] > 0){
				$is_mine = TRUE;
				$writer_name = $member_info['user_name'];
				$writer_edit_pw = $member_info['user_pw'];
				$email = $member_info['email'];
			}
		}
	}
	if(!$comment_id){
		redirect(false, '덧글 일련번호가 없습니다.');
	}
	if(!$writer_name){
		redirect(false, '작성자 이름을 입력하세요.');
	}
	if(!$writer_edit_pw){
		redirect(false, '비밀번호를 입력하세요.');
	}
	if(!$email){
		redirect(false, '이메일을 입력하세요.');
	}
	if(!$content){
		redirect(false, '글 내용을 입력하세요.');
	}

	if($is_mine === false){
		$sql = "SELECT count(id) as `cnt` FROM bbs_comment WHERE id=%d AND writer_pw = password('%s')";
		$input = array($comment_id, $writer_edit_pw);
		$result = db_query($sql, $input);

		if($result === false){
			print_rest_api('비밀번호 검사에 실패했습니다.', false);
		}
		$cnt = $result[0]['cnt'];

		if($cnt <1){
			print_rest_api('잘못된 비밀번호를 입력하셨습니다.', false);
		}
	}
	$sql = "UPDATE bbs_comment SET writer_name ='%s', email = '%s', content='%s', edit_date=now() WHERE id='%d'";
	$input = array($writer_name, $email, $content, $comment_id);
	$result = db_query($sql, $input);

	if($result === false || $result <1){
		print_rest_api('덧글 수정에 실패했습니다.', false);
	}

	/*수정된 덧글 데이터 조회하기*/
	$sql = "SELECT id, writer_name, email, content, reg_date FROM bbs_comment WHERE id=%d";
	$result = db_query($sql, array($comment_id));

	if($result === false || count($result) < 1){
		print_rest_api('덧글 조회에 실패했습니다.', false);
	}

	for($i=0; $i<count($result); $i++){
		$result[$i]['content'] = preg_replace("/\r|\n/", "<br/>", $result[$i]['content']);
	}

	print_rest_api("OK", array('item' => $result[0]));
?>