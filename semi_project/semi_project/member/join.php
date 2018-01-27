<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
include_once '../inc/init.php';

// 읽어들일 HTML파일 지정하기
$tpl->define('body', 'member/join.html');

// 화면에 출력하기
$tpl->print_('body');
?>
