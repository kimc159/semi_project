<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'bbs_init.php';

	$document_id = post('document_id', FALSE);
	$pwd = post('pwd', FALSE);
	if(!$document_id){
		redirect(FALSE, '글 번호가 지정되지 않았습니다.');
	}

	$is_mine = FALSE;
	if($member_info !== FALSE){ // 로그인 상태인지 확인
		$sql = "SELECT count(id) AS `cnt` FROM bbs_document WHERE id=%d AND member_id=%d";
		$input = array($document_id, $member_info['id']);
		$result = db_query($sql, $input);

		if($result !== FALSE){
			if($result[0]['cnt'] > 0){
				$is_mine = TRUE;
			}
		}
	}
	if($is_mine === FALSE){
		$sql = "SELECT count(id) AS `cnt` FROM bbs_document WHERE id=%d AND writer_pw=password('%s')";
		$input = array($document_id, $pwd);
		$result = db_query($sql, $input);

		if($result === FALSE){
			redirect(FALSE, '비밀번호 검사에 실패했습니다.');
		}

		$cnt = $result[0]['cnt'];
		if($cnt < 1){
			redirect(FALSE, '잘못된 비밀번호를 입력하셨습니다.');
		}
	}
?>