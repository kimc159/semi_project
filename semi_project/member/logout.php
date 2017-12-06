<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
include_once '../inc/init.php';

// 로그인을 판별하기 위한 회원정보가 false라면 로그인중이 아님
if (!$member_info) {
    redirect(FALSE, '로그인하지 않으셨습니다.');
}

// 세션 삭제하기
session_destroy();

redirect('/index.php', '로그아웃 되셨습니다.');
?>
