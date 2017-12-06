<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	/* 게시판 공통 설정파일을 참조 */
    // init.php는 이 파일에서 이미 참조중이다.
    include_once 'bbs_init.php';

    /* 템플릿 처리 */
    // 읽어들일 HTML파일 지정하기
    $tpl->define('body', 'bbs/write.html');

    // 화면에 출력하기
    $tpl->print_('body');
?>
