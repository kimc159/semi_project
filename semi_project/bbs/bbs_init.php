<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
    include_once '../inc/init.php';

    /** 각 게시물을 구분할 수 있는 파라미터 받기 */
    // 메뉴에서 전달되는 게시판 종류값 받기
    $bbs_type = get('bbs_type', false);

    // GET방식으로 전달된 값이 없다면 POST방식으로 시도한다.
    if ($bbs_type === false) {
        $bbs_type = post('bbs_type', false);
    }

    // 최종적으로 값이 없다면 정상적인 접근이 아님
    if ($bbs_type === false) {
        redirect($home_url, '게시판 종류가 지정되지 않았습니다. 정상적인 경로로 접근해 주세요.');
    }

    /** 게시판 종류에 따른 이름 설정하기 */
    $bbs_name = '';
    switch ($bbs_type) {
        case 'notice':
            $bbs_name = '공지사항';
            break;
        case 'qna':
            $bbs_name = '문의하기';
            break;
        case 'free':
            $bbs_name = '자유게시판';
            break;
        case 'gallery':
            $bbs_name = '갤러리';
            break;
    }

    /** 생성된 변수값을 template에 전달 */
    $bbs_config = array('name' => $bbs_name, 'type' => $bbs_type );
    $tpl->assign('bbs_config', $bbs_config);
?>
