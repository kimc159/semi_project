<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	/* 게시판 공통 설정파일을 참조 */
    // init.php는 이 파일에서 이미 참조중이다.
    include_once('bbs_init.php');

    /* 검색구문 만들기 */
    $where = "bbs_type='%s'";
    $input = array($bbs_type);

    /* 검색어가 존재한다면, 검색구문 추가 */
    $keyword = get('keyword', false);
    if ($keyword !== false) {
        $where .= " AND (subject LIKE '%%%s%%' OR content LIKE '%%%s%%')";
        $input[] = $keyword;    // 배열에 데이터 추가
        $input[] = $keyword;    // 배열에 데이터 추가
    }

    /* 페이지 구현 */
    // 현재 페이지 수
    $now_page = get('page', 1);
    // 한 페이지에 보여질 목록 수
    $list_count = 10;
    // 한 번에 표시될 페이지 번호 그룹 수
    $group_count = 5;

    /* 게시물 수 가져오기 */
    $sql = 'SELECT COUNT(id) `cnt` FROM bbs_document WHERE '.$where;
    $document_count = db_query($sql, $input);
    if ($document_count === false) {
        redirect(false, '게시물 수 조회에 실패했습니다.');
    }
    $total_count = $document_count[0]['cnt'];

    /* 페이지 계산 */
    $page_info = get_page_info($total_count, $now_page, $list_count, $group_count);


    /* 게시물 목록 가져오기 */
    $sql = "SELECT id, subject, writer_name, hit, reg_date
            FROM bbs_document
            WHERE ".$where." ORDER BY id DESC LIMIT %d, %d";

    $input[] = $page_info['offset'];
    $input[] = $page_info['list_count'];

    $document_list = db_query($sql, $input);

    if ($document_list === false) {
        redirect(false, '게시물 목록 조회에 실패했습니다.');
    }

    /* 갤러리 형태의 게시판인 경우 */
    if($bbs_type == 'gallery'){
        for($i=0; $i<count($document_list); $i++){
            $document_id = $document_list[$i]['id'];

            $sql = "SELECT file_path FROM bbs_file WHERE bbs_document_id=%d AND left(file_type,5)='image' ORDER BY id ASC LIMIT 0,1";
            $file = db_query($sql, array($document_id));

            if($file !== FALSE $$ count($file) > 0){
                
            } 
        }
    }
    /* 템플릿 처리 */
    // 템플릿에 데이터 추가
    $tpl->assign('document_list', $document_list);
    $tpl->assign('keyword', $keyword);
    $tpl->assign('page_info', $page_info);

    // 읽어들일 HTML파일 지정하기
    $tpl->define('body', 'bbs/list.html');

    // 화면에 출력하기
    $tpl->print_('body');
?>
