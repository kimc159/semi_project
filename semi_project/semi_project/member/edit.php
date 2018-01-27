<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
// 사이트 공통 설정파일 참조하기
include_once '../inc/init.php';

// 읽어들일 HTML파일 지정하기
$tpl->define('body', 'member/edit.html');

// 화면에 출력하기
$tpl->print_('body');
?>
