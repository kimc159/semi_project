<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/init.php';
	
	$sql = 'DELETE FROM user WHERE id=%d';
	$input = array($member_info['id']);
	$result = db_query($sql, $input);

	if($result === FALSE){
		redirect(false, '탈퇴에 실패했습니다.');
	}
	// 세션 삭제 -> 강제 로그아웃
	session_destroy();

	redirect($home_url.'/allerman.php', '탈퇴되었습니다.');
?>