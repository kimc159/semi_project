<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
/* 모든 페이지에서 사용해야 하는 공통 파일 참조 */
include_once '../inc/init.php';

// 데이터베이스에서 회원정보 삭제하기
$sql = 'DELETE FROM member WHERE id=%d';
$input = array($member_info['id']);
$result = db_query($sql, $input);

if ($result === false) {
    redirect(false, '탈퇴에 실패했습니다. 관리자에게 문의하세요.');
}

// 세션 삭제하기 --> 강제로그아웃
session_destroy();

redirect($home_url, '탈퇴되었습니다. 안녕히 가세요.');
?>
