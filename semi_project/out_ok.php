<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/init.php';

	$pass_ok = post('password', FALSE);
	$sql = "SELECT count(id) FROM user WHERE user_pw =password('%s')";
	$input = array($pass_ok);
	$result = db_query($sql, $input);
	if($result[0]['count(id)'] === '0'){
		redirect(false, "비밀번호가 일치하지 않습니다.");
	}else{
		$sql = "UPDATE bbs_comment SET member_id=NULL WHERE member_id=%d";
		$input = array($member_info['id']);
		$result = db_query($sql, $input);

		if($result === false){
			redirect(false, '탈퇴에 실패했습니다.');
		}

		$sql = "UPDATE bbs_document SET member_id=NULL WHERE member_id=%d";
		$input = array($member_info['id']);
		$result = db_query($sql, $input);

		if($result === false){
			redirect(false, '탈퇴에 실패했습니다.');
		}

		$sql = 'DELETE FROM user WHERE id=%d';
		$input = array($member_info['id']);
		$result = db_query($sql, $input);

		if($result === FALSE){
			redirect(false, '탈퇴에 실패했습니다.');
		}
		// 세션 삭제 -> 강제 로그아웃
		session_destroy();

		redirect($home_url.'/allerman.php', '탈퇴되었습니다.');
	}
?>