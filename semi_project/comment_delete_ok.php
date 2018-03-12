<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/bbs_init.php';
	
	$pw = post('writer_pw', false);
	$comment_id = post('comment_id', false);
	if(!$comment_id){
		redirect(false, '글 번호가 지정되지 않았습니다.');
	}

	$is_mine = FALSE;
	if($member_info !== FALSE){// 로그인 상태라면?
		$sql = "SELECT count(id) AS `cnt` FROM bbs_comment WHERE id = '%d' AND member_id=%d";
		$input = array($comment_id, $member_info['id']);
		$result = db_query($sql, $input);

		if($result !== FALSE){
			if($result[0]['cnt'] > 0){
				$is_mine = TRUE;
			}
		}
	}

	if($is_mine === FALSE){
		$sql = "SELECT count(id) as `cnt` FROM bbs_comment WHERE id=%d AND writer_pw=password('%s')";
		$input = array($comment_id, $pw);
		$result = db_query($sql, $input);

		if($result === false){
			redirect(false, '비밀번호 검사에 실패했습니다.');
		}

		$cnt = $result[0]['cnt'];
		if($cnt < 1){
			redirect(false, '잘못된 비밀번호를 입력하셨습니다.');
		}
		// 3) 게시물 삭제
		$sql = "DELETE FROM bbs_comment WHERE id=%d";
		$input = array($comment_id);
		$result = db_query($sql, $input);

		print_rest_api('OK', array('comment_id' => $comment_id));
	}


?>