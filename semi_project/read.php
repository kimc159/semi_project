<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/bbs_init.php';

	/* 게시물 일련번호 받기 */
	$document_id = get('document_id', false);
	if(!$document_id){
		redirect(false, '게시물 일련번호가 없습니다.');
	}
	/* 게시물 일련번호와 일치하는 본문 데이터 조회하기 */
	$sql = 'SELECT id, bbs_type, member_id, writer_name, email, subject, content, hit, reg_date, edit_date FROM bbs_document WHERE id=%d';
	$input = array($document_id);

	$document = db_query($sql, $input);

	if(count($document) < 1){
		redirect(false, '존재하지 않는 게시물 입니다.');
	}

	/*첨부파일 데이터 조회하기*/
	$sql = 'SELECT id, bbs_document_id, file_name, file_type, file_size, file_path, reg_date, edit_date FROM bbs_file WHERE bbs_document_id=%d';
	$input = array($document_id);

	$file_list = db_query($sql, $input);

	if($file_list === false){
		redirect(false, '첨부파일 조회에 실패했습니다.');
	}
	/* 이전 글 조회하기 */
    $sql = "SELECT id, subject FROM bbs_document
			WHERE bbs_type='%s' AND id < %d
			ORDER BY id DESC
			LIMIT 0, 1";
    $input = array($bbs_type, $document_id);

    $prev_document = db_query($sql, $input);

    // SQL 처리 에러인 경우
    // 이전글이 없는 경우도 있으므로 데이터가 0건인 경우는
    // 에러로 간주하지 않는다.
    if ($prev_document === false) {
        redirect(false, '게시물 읽기에 실패했습니다. 관리자에게 문의 바랍니다.');
    } elseif (count($prev_document) < 1) {
        $prev_document = false; // 이전 글 조회결과 없음
    } else {
        $prev_document = $prev_document[0]; // 조회결과가 있을 경우 1차 배열로 변환
    }
     /* 다음 글 조회하기 */
    $sql = "SELECT id, subject FROM bbs_document
			WHERE bbs_type='%s' AND id > %d
			ORDER BY id ASC
			LIMIT 0, 1";
    $input = array($bbs_type, $document_id);

    $next_document = db_query($sql, $input);

    // SQL 처리 에러인 경우
    // 다음글이 없는 경우도 있으므로 데이터가 0건인 경우는
    // 에러로 간주하지 않는다.
    if ($next_document === false) {
        redirect(false, '게시물 읽기에 실패했습니다. 관리자에게 문의 바랍니다.');
    } elseif (count($next_document) < 1) {
        $next_document = false; // 이전 글 조회결과 없음
    } else {
        $next_document = $next_document[0]; // 조회결과가 있을 경우 1차 배열로 변환
    }
    /* 조회수 1 증가 시키기 */
    // 각 게시물을 고유하게 식별할 수 있는 이름 만들기
    $cookie_name = sprintf('bbs_document_%s_%d',
        $bbs_type, $document_id);

    // 이 이름의 쿠키가 없을 경우만 조회수 갱신.
    if (get_cookie($cookie_name, false) === false) {
        $sql = 'UPDATE bbs_document SET hit=hit+1 WHERE id=%d';
        $input = array($document_id);
        db_query($sql, $input);

        // 쿠키 생성 -> 같은 게시물을 24시간 내에 다시 읽을 경우 조회수 증가 안함.
        set_cookie($cookie_name, 'Y', 24 * 60 * 60);
    }
    /* 템플릿 처리 */
    // 조회결과를 템플릿에 추가한다.
    $tpl->assign('document',        $document[0]);
    $tpl->assign('prev_document', $prev_document);
    $tpl->assign('next_document', $next_document);
    $tpl->assign('file_list',    $file_list);

	$tpl->define('body', 'read.html');

	$tpl->print_('body');
?>